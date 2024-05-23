<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;

class TimeRecord extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'date',
		'start_time',
		'end_time',
		'total_break_time',
		'actual_work_time',
	];

	protected $casts = [
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'total_break_time' => 'integer', // minutes
	];

	public function user()
	{
		return $this->belongsTo(User::class);
		
	}
	// 勤務時間や休憩時間の計算ロジックを追加します
	public function calculateBreakTime($startBreak, $endBreak)
	{
		$start = Carbon::parse($startBreak);
		$end = Carbon::parse($endBreak);
		return $start->diff($end)->format('%H:%I:%S');
	}

	public function calculateWorkTime($startTime, $endTime, $breakTime)
	{
		$start = Carbon::parse($startTime);
		$end = Carbon::parse($endTime);
		$workDuration = $start->diff($end)->format('%H:%I:%S');

		// 休憩時間を減算する
		$workDurationInSeconds = strtotime($workDuration) - strtotime($breakTime);
		return gmdate('H:i:s', $workDurationInSeconds);
	}

}
