<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
<center>
<table border="1">
<thead>
<tr class="bg-info">
<th><font color="red">ID</th>
<th><font color="red">Nama</th>
<th><font color="red">Alamat</th>
<th><font color="red">Jenis kelamin</th>
</tr>
</thead>
<?php  
$no = 1;
?>
<tbody>
	@foreach ($a as $data)
	<tr>
		<td><font color="blue">{{ $no++}}</td>
		<td><font color="green"> {{ $data->nama}}</td>
		<td><font color="purple">{{ $data->alamat}}</td>
		<td><font color="navy">{{ $data->jk}}</td>
	</tr>
	@endforeach
	</center>
</table>
</body>
</html>