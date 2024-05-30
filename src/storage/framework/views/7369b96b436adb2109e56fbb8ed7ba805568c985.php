<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ログイン</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">
</head>

<body>
	<div class="auth-container">
		<h2>ログイン</h2>
		<form method="POST" action="<?php echo e(route('login')); ?>">
			<?php echo csrf_field(); ?>
			<?php if(count($errors) > 0): ?>
			<p>メールもしくはパスワード入力に問題があります。</p>
			<?php endif; ?>
			<div class="input-group">
				<label for="email">メールアドレス</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="input-group">
				<label for="password">パスワード</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit">ログイン</button>
		</form>
		<p>アカウントをお持ちでない方はこちらから <a href="<?php echo e(route('register')); ?>">新規登録</a></p>
	</div>
</body>

</html><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>