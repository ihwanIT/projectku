
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>edit kos</title>
	<style>
		body{
			 background-image: url('Gambar/wp.17.png');
		}
		form{
			 margin: 10px;
			 
		}
		.container{
			 display: flex;
			 justify-content: center;
		}
		.form-edit{
			 background-color: royalblue;
			 height: 250px;
			 width: 400px;
			 border-radius: 5px;

		}
		button{
			padding: 5px;
			width: 400px;
			margin: 5px;
			border: 0px;
			border-radius: 5px;
			background-color: gray;
		}
		.button{
			display: flex;
			justify-content: center;
		}
		tr td{
			margin: 5px;
		}
 </style>
</head>
<body>
	<center><h2>HAPUS DATA</h2></center>
	<div class="container">
	<div class="form-edit">

<form action="/kos_delete/{{ $Datakost[0]->id }}" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 <table>
  <tr>
   <td>Nama Kos</td>
	 <td>:{{ $Datakost[0]->namakos }}</td>
  </tr>
  <tr>
   <td>Jumlah Kamar</td>
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
   <td>Harga Sewa</td>
   <td>:{{ $Datakost[0]->harga }}</td>
  </tr>
 </table>

</div>
</div>
<div class="button">
<button type="submit">Hapus</button>
</div>
</form>
</body>
</html>

