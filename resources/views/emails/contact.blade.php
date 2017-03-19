<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hello Admin , </h2>
		<p> You have new contact mail from  </p>
		<p>
			Họ và tên : {{ $user->name }}<br />
			Email : {{ $user->email }} <br />
			Số điện thoại : {{ $user->phoneNumber }}<br />
		</p>
		<p> Tiêu đề : {{ $user->subject }} </p>
		<div>
			{{ $user->message }}
		</div>
		
		<p> Thank You </p><br /><br />
		
		{{ config('sximo')['cnf_appname'] }}
	</body>
</html>