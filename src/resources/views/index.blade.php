<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>勤退打刻アプリ</title>
	<link rel="stylesheet" href="{{ asset('index.css') }}">
</head>

<body>
	<div class="container">
		<header>
			<h1>Atte</h1>
			<div class="user-info">
				<a href="/">ホーム</a>
				<a href="/attendance">日付一覧</a>
				<a href="/register">ログアウト</a>
			</div>
		</header>

		<main>
			<!-- @yield('content') -->
			<div class="navbar">
				<h1>{{ $name }}さんお疲れ様です！</h1>
			</div>

			<form action="/attendance" method="POST">
				<div class="main-content">
					<div class="box">勤務開始
						<!-- <input type="submit" value="打刻する"> -->
						<a href="/attendance">打刻→一覧へ</a>
					</div>
					<div class="box">勤務終了
						<input type="submit" value="打刻する">
					</div>
					<div class="box">休憩開始
						<input type="submit" value="打刻する">
					</div>
					<div class="box">休憩終了
						<input type="submit" value="打刻する">
					</div>
				</div>
			</form>

		</main>
		<footer>
			<p>2024 Atte, inc.</p>
		</footer>
	</div>
</body>

</html>