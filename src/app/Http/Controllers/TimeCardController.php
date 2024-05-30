<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeRecord;
use App\Models\DailyRecord;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TimeCardController extends Controller
{
	public function index()
	{
		$user = auth()->user();
		return view('timecard', compact('user'));
	}	

	public function records()
	{
		$user = auth()->user();		
		$records = TimeRecord::with('user')->where('user_id', optional($user)->id)->get();
		// $records = TimeRecord::with('user')->where('user_id', $user->id)->get();
		return view('records', compact('records'));
	}

	public function recordTime(Request $request)
	{
		// 打刻処理
		$user = auth()->user();
		$now = Carbon :: now();
		$date = $now->toDateString();

		$record = TimeRecord::firstOrNew(['user_id' => optional($user)->id, 
		'date' => $now->toDateString()]);

		switch ($request->input('action')) {
			case 'start-work':
				$record->start_time = $now;
				break;

			case 'end-work':
				$record->end_time = $now;
				// 勤務時間を算出し、休憩時間を引く
				// $record->work_time = $record->end_work->diffInSeconds($record->start_work) - $record->total_break_time;
				break;

			case 'start-break':			
				// $record ->last_break_start = $now;
				$record->break_start = $now;
				break;

			case 'end-break':  // 休憩時間を累積する

				if ($record->last_break_start) {
					$break_time = $record->last_break_start->diffInMinutes($now);
					$record->last_break_start->$now;

					$record->total_break_time += $break_time;
					$record->last_break_start = null;				
				}
				$record->total_break_time += $now->diffInSeconds($record->break_start);

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



