<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeRecord;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TimeCardController extends Controller
{
	// public function index()
	// {
	// 	$user = auth()->user();
	// 	return view('timecard', compact('user'));
	// }

	public function index(Request $request)
	{
		$user = auth()->user();
		return view('timecard', compact('user'));

		// ページネーション
		$date = $request->input('date', Carbon::today()->toDateString());
		$timecards = TimeRecord::whereDate('created_at', $date)->paginate(5);
		return view('records', compact('timecard', 'date'));
	}

	public function search(Request $request)
	{
		$date = $request->input('date');
		return redirect()->route('records', ['date' => $date]);
	}



	public function records()
	{
		$user = auth()->user();
		// $records = TimeRecord::with('user')->where('user_id', $user->id)->get();
		$records = TimeRecord::with('user')->where('user_id', optional($user)->id)->get();
		return view('records', compact('records'));
	}

	public function recordTime(Request $request)
	{
		$user = auth()->user();
		$now = now();
		$record = TimeRecord::firstOrNew(['user_id' => $user->id, 'date' => $now->toDateString()]);

		switch ($request->input('action')) {
			case 'start-work':
				$record->start_time = $now;
				break;
			case 'end-work':
				$record->end_time = $now;
				break;
			case 'start-break':
				$record->last_break_start = $now;
				break;
			case 'end-break':
				if ($record->last_break_start) {
					$break_time = $record->last_break_start->diffInMinutes($now);
					$record->total_break_time += $break_time;
					$record->last_break_start = null;
				}
				break;
		}

		if ($record->start_time && $record->end_time) {
			$total_work_time = $record->start_time->diffInMinutes($record->end_time);
			$record->actual_work_time = $total_work_time - $record->total_break_time;
		}

		$record->save();

		return redirect()->back();
	}
}
