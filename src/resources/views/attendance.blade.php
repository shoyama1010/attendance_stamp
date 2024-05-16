<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>打刻記録一覧</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
			background-color: #f5f5f5;
			flex-direction: column;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin-top: 20px;
		}

		th,
		td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: center;
		}

		th {
			background-color: #f2f2f2;
		}

		header {
			width: 80%;
			display: flex;
			justify-content: space-between;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<header>
		<div><a href="{{ route('index') }}">ホーム</a></div>
		<div><a href="{{ route('attendance') }}">日付一覧</a></div>
		<div>ログアウト</div>
	</header>
	<h1>打刻記録一覧</h1>


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
			@foreach($attendances as $attendance)
			<tr>
				<td>{{ $attendance->user->name }}</td>
				<td>{{ $attendance->clock_in }}</td>
				<td>{{ $attendance->clock_out }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</body>

</html>