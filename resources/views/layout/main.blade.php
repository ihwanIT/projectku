
<!-- boostraph -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
		<link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link rel="shortcut icon" href="Gambar/logokosku.jpg" type="image/x-icon">

    <title>Kos murah untuk mu</title>
  </head>
	<style>
		body{
			background-image: url('Gambar/wp.17.png');
		}
	</style>
  <body>

		{{-- vanila --}}
		<div class="nav">
			{{-- <ul>
				<li> --}}
					<a href="/kosku"><img src="Gambar/rum1.ico"></a>
				{{-- </li>
			</ul> --}}
		</div>
		@yield('kos')
		
		<div class="detail">
				@yield('detail')
				</div>
				
{{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
