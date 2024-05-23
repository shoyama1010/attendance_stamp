<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新規登録</title>
	<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
	<div class="auth-container">
		<h2>新規登録</h2>
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="input-group">
				<label for="name">名前</label>
				<input type="text" id="name" name="name" required>
			</div>
			<div class="input-group">
				<label for="email">メールアドレス</label>
				<input type="email" id="email" name="email" required>
			</div>
			<div class="input-group">
				<label for="password">パスワード</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="input-group">
				<label for="password_confirmation">確認用パスワード</label>
				<input type="password" id="password_confirmation" name="password_confirmation" required>
			</div>
			<button type="submit">会員登録</button>
		</form>
		<p>アカウントをお持ちの方はこちらから <a href="{{ route('login') }}">ログイン</a></p>
	</div>
</body>

</html>