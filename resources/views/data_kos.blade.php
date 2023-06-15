<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/admin_kostampil.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Kos</title>
</head>
<body>
  @extends('layout.main_admin')
@section('logout')
		
<form action="logout" method="post">
	Admin : {{ auth()->user()->name }}
	@csrf
	<button type="submit">
		<img src="icon/logout.ico">
	</button>
</form>
@endsection

@section('kos_tampil')

<div class="container">
<table class="table table-striped">
	<tr>
		<th class="add"><a href="/kos_isi">
			<img src="icon/add.ico">
		</a></th>
		{{-- <th>{{ $message }}</th> --}}
	</tr>
	<tr>
	 <th>No</th>
	 <th>Nama Kos</th>
	 <th>Jumlah Kamar</th>
	 <th>Fasilitas</th>
	  <th>Luas Kamar</th>
	 <th>Jarak</th>
	 <th>Harga Sewa</th>
   {{-- <th>Image</th> --}}
	 <th>Operasi</th>
	</tr>
  @foreach ($Datakost as $Datakos)

  <tr>
    <td>{{ $Datakos->id }}</td>
    <td>{{ $Datakos->namakos }}</td>
    <td>{{ $Datakos->jumlahkamar }}</td>
    <td>{{ $Datakos->fasilitas }}</td>
    <td>{{ $Datakos->luas_kamar }}</td>
    <td>{{ $Datakos->jarak }}</td>
    <td>{{ $Datakos->harga }}</td>
    {{-- <td>{{ $Datakos->image }}</td> --}}
		<td>
			<a href = 'kos_edit/{{ $Datakos->id }}' class="kuning">
				<img src='icon/update1.ico'>
			</a>
			<a href = 'kos_delete/{{ $Datakos->id }}' class="merah">
				<img src='icon/hapus.ico'>
			</a>
		</td>
  </tr>
  @endforeach
  <tr>

  </tr>
	</div>
	
</body>
</html>
@endsection

</body>
</html>