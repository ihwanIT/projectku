<!DOCTYPE html>
<html lang="en">
<head>
	{{-- <link rel="stylesheet" href="detail_kos.css"> --}}
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="Gambar/logokosku.jpg" type="image/x-icon">
    <title>PENYEDIA INFO KOS MURAH</title>
		<style>
		table{
			width: 400px;
			margin: 10px;
			padding: 10px;
		}
		.container-foto{
			display: flex;
			justify-content: center;
		}
			.container{

				display: flex;
        justify-content: center;
				width: 100px;
			}
			.cont{
				display: flex;
				justify-content: center;

			}
			.wa{
				background-color: royalblue;
				text-decoration: none;
				color: black;
				padding: 5px;
				width: 720px;
				border-radius: 5px;
				text-align: center;
	
			}
			.container-data{
				display: flex;
				justify-content: center;
			}
			.tablecont{
				background-color: gray;
				width: 730px;
				border-radius: 5px;
				margin: 5px;
			}
			.foto{
				background-color: gray;
				width: 190px;
				height: 50px;
				margin: 5px;
				text-align: center;
				border-radius: 5px;
				margin-bottom: 140px;
			}
			img{
				border-radius: 0px 0px 5px 5px;
			}
		</style>
  </head>
  <body>
		<div class="container-foto">
		<div class="container">
			<div class="foto">
				Halman Depan
				<img src="{{ asset('storage/' . $Datakost[0]->imageA) }}" class="rounded" style="width: 11rem; height: 10rem;">
			</div>
			<div class="foto">
				Teras Kos
				<img src="{{ asset('storage/' . $Datakost[0]->imageB) }}" class="rounded" style="width: 11rem; height: 10rem;">
			</div>
			<div class="foto">
				Tampak Dalam
				<img src="{{ asset('storage/' . $Datakost[0]->imageC) }}" class="rounded" style="width: 11rem; height: 10rem;">
			</div>
			<div class="foto">
				dapur
				<img src="{{ asset('storage/' . $Datakost[0]->imageD) }}" class="rounded" style="width: 11rem; height: 10rem;">
			</div>
		</div>
	</div>

		<div class="container-data">
			<div class="tablecont">
			<table>
			<tr>
				<td>Nama kos</td>
				<td>:{{ $Datakost[0]->namakos }}</td>
			</tr>
			<tr>
				<td>Jumlah kamar</td>
				<td>:{{ $Datakost[0]->jumlahkamar}}</td>
			</tr>
			<tr>
				<td>Fasilitas</td>
				<td>:{{ $Datakost[0]->fasilitas }}</td>
			</tr>
			<tr>
				<td>Luas Kamar</td>
				<td>:{{ $Datakost[0]->luas_kamar}}</td>
			</tr>
			<tr>
				<td>Jarak</td>
				<td>:{{ $Datakost[0]->jarak }}</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>: Rp.{{ $Datakost[0]->harga }}</td>
			</tr>
			{{-- <tr>
				<td>IMAGE</td>
				<td>:{{ $row['image']; }}</td>
			</tr> --}}
	
	</table>
</div>
</div>
<div class="cont">
		<a href="https://wa.me/6283857949725" class="wa" class="wa">Hubungi sekarang</a>
	</div>
		{{-- @endsection --}}
  </body>
</html>


