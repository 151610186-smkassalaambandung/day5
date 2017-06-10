<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
<center>
	<tr>
		<td><h1>Daftar : {{$data}}</h1></td>
		<td>@foreach($query as $data)
		{{$data}}<hr>
		@endforeach</td>
	</tr>
</center>
</body>
</html>