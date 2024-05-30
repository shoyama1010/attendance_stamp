<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>勤怠記録</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/records.css')); ?>">
</head>
<body>
	<div class="container">
		<header class="header">
			<h1>Atte</h1>
			<nav>
				<ul>
					<li><a href="<?php echo e(route('home')); ?>">ホーム</a></li>
					<li><a href="<?php echo e(route('records')); ?>">日付別一覧</a></li>
					<li><a href="<?php echo e(route('logout')); ?>">ログアウト</a></li>
				</ul>
			</nav>
		</header>
		<main class="main">
			<!-- <div class="date">
				<label for="date">日付:</label>
				<input type="date" id="date" name="date" value="<?php echo e(now()->toDateString()); ?>" readonly>
			</div> -->
			<div class="date-navigation">
				<button class="date-button">&lt;</button>

				<span class="date-display">2021-11-01</span>

				<button class="date-button">&gt;</button>
			</div>
			<table>
				<thead>
					<tr>
						<th>名前</th>
						<th>勤務開始</th>
						<th>勤務終了</th>
						<th>休憩時間</th>
						<th>勤務時間</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($record->user->name); ?></td>

						<td><?php echo e($record->start_time ? $record->start_time->format('H:i') : ''); ?></td>
						<td><?php echo e($record->end_time ? $record->end_time->format('H:i') : ''); ?></td>
						<td><?php echo e($record->last_break_start ? $record->last_break_start->format('H:i') : ''); ?></td>
				
						<td><?php echo e($record->actual_work_time ? floor($record->actual_work_time / 60) . '時間' . ($record->actual_work_time % 60) . '分' : '0分'); ?></td>

					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<div class="pagination">
				<button class="page-button">1</button>
				<button class="page-button">2</button>
				<button class="page-button">3</button>
				<button class="page-button">4</button>
				<button class="page-button">5</button>
				<span>...</span>
				<button class="page-button">21</button>
				<button class="page-button">›</button>
			</div>
		</main>
		<footer>
			<p>Atte, inc.</p>
		</footer>
	</div>
</body>

</html><?php /**PATH /var/www/resources/views/records.blade.php ENDPATH**/ ?>