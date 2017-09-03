<!doctype html>
<html>
	<head>
	</head>

	<body>
		<div style="font-weight:bold;">From</div>
		{{ $messageData->name }} ( <a href="mailto:{{ $messageData->email }}?subject=Contact Request">{{ $messageData->email }}</a> )

		<br>
		<br>
		<div style="font-weight:bold;">Message</div>
		{{ $messageData->message }}
	</body>

</html>

