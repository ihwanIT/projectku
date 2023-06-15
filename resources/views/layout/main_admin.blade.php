<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/style_admin.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="Gambar/logokosku.jpg" type="image/x-icon">

	<title>KOS KU</title>
</head>
<style>
	body{
		background-image: url('Gambar/wp.17.png');
	}
</style>
<body >
	
		
	<div class="nav">
				<a href="/kosku"><img src="Gambar/rum1.ico"></a>
				@yield('logout')
	</div>


<div class="container">
<div class="kos">
@yield('container')
</div>

<div class="kos-tampil">
	@yield('kos_tampil')
</div>

<div class="kos_isi">
	@yield('foto')
</div>

<div class="login">
	@yield('login')
	</div>
	<div class="login1">
		@yield('login1')
			@yield('registrasi')
		</div>
		<div class="kos_edit">
			@yield('kos_edit')
		</div>
		<div class="registrasi">

</div>
</div>
</body>
</html>