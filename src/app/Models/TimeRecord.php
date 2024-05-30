<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;
use Carbon\Carbon;

class TimeRecord extends Model
{
	use HasFactory;

	protected $fillable = [	
		'user_id','date','start_time','end_time','start_break','end_break',
		'total_break_time','actual_work_time',
	];

	protected $casts = [
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'total_break_time' => 'integer', // minutes
	];
	// 勤務時間を計算するアクセサ
	public function getWorkDurationAttribute()
	{
		if ($this->start_time && $this->end_time) {
			$start = Carbon::parse($this->start_time);
			$end = Carbon::parse($this->end_time);
			return $end->diff($start)->format('%H:%I:%S');
		}
		return null;
	}
	// 休憩時間を計算するアクセサ
	public function getBreakDurationAttribute()
	{
		if ($this->break_start && $this->break_end) {
			$breakStart = Carbon::parse($this->break_start);
			$breakEnd = Carbon::parse($this->break_end);
			return $breakEnd->diff($breakStart)->format('%H:%I:%S');
		}
		return null;
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}