<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>勤怠記録</title>
	<link rel="stylesheet" href="{{ asset('css/records.css') }}">
</head>

<body>
	<div class="container">
		<header class="header">
			<h1>Atte</h1>
			<nav>
				<ul>
					<li><a href="{{ route('home') }}">ホーム</a></li>
					<li><a href="{{ route('records') }}">日付別一覧</a></li>
					<li><a href="{{ route('logout') }}">ログアウト</a></li>
				</ul>
			</nav>
		</header>

		<main class="main">

			<div class="date">
				<label for="date">日付:</label>
				<input type="date" id="date" name="date" value="{{ now()->toDateString() }}" readonly>
			</div>
			<!-- <form method="POST" action="{{ route('records.search') }}">
				@csrf
				<div class="form-group">
					<label for="date">日付を選択してください:</label>
					<input type="date" id="date" name="date" value="{{ $date ?? '' }}">
					<button type="submit" class="btn btn-primary">検索</button>
				</div>
			</form> -->

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
					@foreach($records as $record)
					<tr>
						<td>{{ $record->user->name }}</td>
						<td>{{ $record->start_time ? $record->start_time->format('H:i') : '' }}</td>
						<td>{{ $record->end_time ? $record->end_time->format('H:i') : '' }}</td>
						<td>{{ $record->total_break_time ? floor($record->total_break_time / 60) . '時間' . ($record->total_break_time % 60) . '分' : '0分' }}</td>
						<td>{{ $record->actual_work_time ? floor($record->actual_work_time / 60) . '時間' . ($record->actual_work_time % 60) . '分' : '0分' }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="pagination-wrapper">
				{{ $record->appends(['date' => $date])->links() }}
			</div>
		</main>
	</div>
</body>

</html>