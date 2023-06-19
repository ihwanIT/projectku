
{{-- @extends('layout.main_admin')
@section('kos_edit'); --}}
		
{{-- html --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/action/edit.css">
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
         height: 340px;
         width: 400px;
         border-radius: 5px;

      }
      input{
         padding: 10px;
         border: 0;
         border-radius: 5px;
         margin: 3px;
      }
   </style>
</head>
<body>
   <center><h2>EDIT DATA KOS</h2></center>
	<div class="container">
	<div class="form-edit">

<form action="/kos_edit/{{ $Datakost[0]->id }}" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
 <table>
  <tr>
   <td>Nama Kos</td>
	 <td><input type="text" name="data_kos-namakos" value="{{ $Datakost[0]->namakos }}"></td>
  </tr>
  <tr>
   <td>Jumlah Kamar</td>
	 <td><input type="text" name="data_kos-jumlahkamar" value="{{ $Datakost[0]->jumlahkamar}}"></td>
  </tr>
  <tr>
   <td>Fasilitas</td>
	 <td><input type="text" name="data_kos-fasilitas" value="{{ $Datakost[0]->fasilitas }}"></td>
  </tr>
  <tr>
   <td>Luas Kamar</td>
	 <td><input type="text" name="data_kos-luas_kamar" value="{{ $Datakost[0]->luas_kamar}}"></td>
  </tr>
  <tr>
   <td>Jarak</td>
	 <td><input type="text" name="data_kos-jarak" value="{{ $Datakost[0]->jarak }}"></td>
  </tr>
  <tr>
   <td>Harga Sewa</td>
   <td><input type="text" name="data_kos-harga" value="{{ $Datakost[0]->harga }}"></td>
  </tr>
  <tr>
   <td>
	<input type="submit" value="Simpan" name="proses" />
	<input type="submit" value="Reset" name="reset" />
   </td>
  </tr>
 </table>
</form>
</div>

</div>


</body>
</html>
{{-- @endsection --}}

