<!DOCTYPE html>
<html>
<head>
	<title>Jenis</title>
</head>
<body>
<center>
  <tr>
  <td><h1>Buah :</h1></td>
  <td>@foreach($buah as $data)
  {{$data}}<hr>
  @endforeach</td>

<td><h1>Kehidupan :</h1></td>
<td>@foreach($kehidupan as $data)
 {{$data}}<hr>
@endforeach</td>

<td><h1>Komputer :</h1></td>
<td>@foreach($komputer as $data)
 {{$data}}<hr>
@endforeach</td>

</tr>
</center>
</body>
</html>