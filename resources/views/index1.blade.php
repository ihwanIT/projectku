<!DOCTYPE html>
<html lang="en">
<head>
	{{-- <link rel="stylesheet" href="css/admin_kostampil.css"> --}}
  <link rel="stylesheet" href="css/index_costumer.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="Gambar/logokosku.jpg" type="image/x-icon">

  <title>PENYEDIA INFO KOS MURAH</title>
</head>
<body>
  
@extends('layout.main')
@section('kos')
<div class="container">
  @foreach ($Datakost as $Datakos)

  {{-- <tr>
    <td>{{ $Datakos->id }}</td>
    <td>{{ $Datakos->namakos }}</td>
    <td>{{ $Datakos->jumlahkamar }}</td>
    <td>{{ $Datakos->fasilitas }}</td>
    <td>{{ $Datakos->luas_kamar }}</td>
    <td>{{ $Datakos->jarak }}</td>
    <td>{{ $Datakos->harga }}</td> --}}
    {{-- <td>{{ $Datakos->image }}</td> --}}
		{{-- <td> --}}
			{{-- <a href = 'kos_edit/{{ $Datakos->id }}' class="kuning">
				<img src='icon/update1.ico'>
			</a>
			<a href = 'kos_hapus/{{ $Datakos->id }}' class="merah">
				<img src='icon/hapus.ico'> --}}
			{{-- </a>
		</td>
  </tr> --}}

<div class="card" style="width: 10rem; height: 13rem;">
  <img src="{{ asset('storage/' . $Datakos->imageA) }}" class="card-img-top">
  <div class="card-body">
    <p class="card-title">{{ $Datakos->namakos }}</p>	
    <p class="card-title">Rp.{{ $Datakos->harga }}</p>	
    <a href = 'detail/{{ $Datakos->id }}' class="button">Lihat</a>
  </div>
</div>

  @endforeach

  @endsection
</div>

</body>
</html>

