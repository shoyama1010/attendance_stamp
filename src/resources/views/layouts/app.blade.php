<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Atte</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
	<header class="header">
		<h1>Atte</h1>
		<nav>
			<ul>
				<li><a href="{{ route('home') }}">ホーム</a></li>
				<li><a href="{{ route('records') }}">日付一覧</a></li>
				<li><a href="{{ route('logout') }}">ログアウト</a></li>
			</ul>
		</nav>
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<p>Atte, inc.</p>
	</footer>
</body>

</html>