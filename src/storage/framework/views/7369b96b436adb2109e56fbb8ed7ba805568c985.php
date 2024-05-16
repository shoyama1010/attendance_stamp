<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ログイン</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>

<body>
	<div class="container">
		<header>
			<h1>Atte</h1>
		</header>
		<main>
			<div class="login-form">
				<h2>ログイン</h2>

				<form action="/" method="POST">
					<div class="input-group">
						<label for="email">メールアドレス</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class="input-group">
						<label for="password">パスワード</label>
						<input type="password" id="password" name="password" required>
					</div>
					<!-- <button type="submit">ログイン</button> -->
					<!-- <input class="login-form__btn btn" type="submit" value="ログイン"> -->
					<a href="/">ログイン</a>

				</form>

				<p>アカウントをお持ちでない方はこちらから</p>
				<a href="/register">会員登録</a>
			</div>
		</main>
		<footer>
			<p>Atte, inc.</p>
		</footer>
	</div>
</body>

</html><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>