@extends('layout.main_admin')

@section('foto')
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/form_input.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>input data kos</title>
</head>
<body>
   &nbsp;
<div class="container-form-input">
   <div class="form-input">
<form action="/insert" method="post" enctype="multipart/form-data" >
   @csrf
   {{-- @error('image')
       {{ $message }}
   @enderror --}}
 <table>
  <tr>
   <td>Nama Kos </td>
   <td><input type="text" name="namakos" placeholder="Nama Kos" autofocus required></td>
  </tr>
  <tr>
   <td>Jumlah Kamar</td>
   <td><input type="text" name="jumlahkamar" placeholder="Jumlah Kamar" required/></td>
  </tr>
  <tr>
   <td>Fasilitas</td>
   <td><input type="text" name="fasilitas" placeholder="Fasilitas" required/></td>
  </tr>
  <tr>
   <td>Luas Kamar</td>
   <td><input type="text" name="luas_kamar" placeholder="Luas Kamar" required/></td>
  </tr>
  <tr>
   <td>Jarak</td>
   <td><input type="text" name="jarak" placeholder="Jarak" required/></td>
  </tr>
  <tr>
   <td>Harga Sewa</td>
   <td><input type="text" name="harga" placeholder="Harga" required/></td>
  </tr>
  {{-- foto --}}
  <tr>
   <td>Halaman Depan</td>
   <td><input type="file" name="imageA" id="imageA" required/></td>
  </tr>
  <tr>
   <td>Teras kos</td>
   <td><input type="file" name="imageB" id="imageB" required/></td>
  </tr>
  <tr>
   <td>Tampak Dalam</td>
   <td><input type="file" name="imageC" id="imageC" required/></td>
  </tr>
  <tr>
   <td>Dapur</td>
   <td><input type="file" name="imageD" id="imageD" required/></td>
  </tr>

  {{-- ============ --}}

  <tr>
   <td colspan="2" aligh="center">
   <button type="submit" value="Simpan" name="proses">Simpan</button>
   <button type="submit" value="Reset" name="reset">Reset</button>
   </td>
  </tr>
 </table>
</form>

</div>
</div>

</body>
</html>
@endsection