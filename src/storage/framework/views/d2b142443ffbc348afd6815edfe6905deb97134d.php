<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>勤退打刻アプリ</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
	<div class="container">
		<header>
			<h1>Atte</h1>
			<div class="user-info">
			
				<a href="/logout">ログアウト</a>
			</div>
		</header>
		<main>
			<?php echo $__env->yieldContent('content'); ?>
		</main>
		<footer>
			<p>Atte, inc.</p>
		</footer>
	</div>
</body>


</html><?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>