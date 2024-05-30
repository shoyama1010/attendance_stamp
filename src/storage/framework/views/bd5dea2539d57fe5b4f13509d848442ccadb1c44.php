<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>打刻画面</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/timecard.css')); ?>">
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

			<h1><?php echo e(auth()->user()->name); ?>さんお疲れ様です！</h1>

			<div class="buttons">
				<form action="<?php echo e(route('timecard.record')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="button-group">
						<button type="submit" name="action" value="start-work">勤務開始</button>
						<button type="submit" name="action" value="end-work">勤務終了</button>
					</div>
					<div class="button-group">
						<button type="submit" name="action" value="start-break">休憩開始</button>
						<button type="submit" name="action" value="end-break">休憩終了</button>
					</div>
				</form>
			</div>
		</main>
		<footer>
			<p>Atte, inc.</p>
		</footer>
	</div>
</body>

</html><?php /**PATH /var/www/resources/views/timecard.blade.php ENDPATH**/ ?>