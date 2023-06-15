<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
  <link rel="shortcut icon" href="Gambar/logokosku.jpg" type="image/x-icon">
</head>
<body>
  @extends('layout.main_admin')
@section('login1')
  <div class="login">
<form  action="login_x" method="POST">
  @csrf
  <h2>LOGIN ADMIN</h2>
  <table border="0">
   <tr>
     {{-- <td>USER</td> --}}
	 <td><input type="text" name="name" id="name" placeholder="Username" autofocus required></td>
   </tr>
   <tr>
    {{-- <td>EMAIL</td> --}}
    {{-- <td><input type="email" name="email" id="email" placeholder="Email" required></td> --}}
  </tr>
   <tr>
     {{-- <td>PASSWORD</td> --}}
	 <td><input type="password" name="password" id="password" placeholder="Password" required ></td>
   </tr>
   <tr>
    <td><button type="submit">Login</button></td>
  </tr>
  @error('password')
      <div class="password">
        {{ $message }}
      </div>
  @enderror
  
  </table>
</form>
</div>
@endsection
</body>
</html>


