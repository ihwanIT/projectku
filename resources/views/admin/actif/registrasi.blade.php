<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>registrasi</title>
</head>
<body>
  @extends('layout.main_admin')
  @section('registrasi')

  <form action="registrasi_proses" method="POST">
    @csrf
    <table>
      <tr>
        <td>Nama :</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><button type="submit" value="registrasi">registrasi</button></td>
      </tr>
    </table>
    
  </form>
  @endsection
</body>
</html>