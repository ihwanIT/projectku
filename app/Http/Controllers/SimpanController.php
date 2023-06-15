<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function store()
    {

// if(isset($_GET['idkos'])){
// 	$idkos	= $_GET['idkos'] ;
// 	$simpan	= "EDIT" ;
// }else{
// 	$simpan	= "BARU" ;
// }

// $namakos		= $_GET['namakos'];
// $jumlahkamar	= $_GET['jumlahkamar'];
// $fasilitas		= $_GET['fasilitas'];
// $LuasKamar		= $_GET['luas_kamar'];
// $jarak		= $_GET['jarak'];
// $harga			= $_GET['harga'];

// post
        if(isset($_POST['idkos'])){
	    $idkos	= $_POST['idkos'] ;
	    $simpan	= "EDIT" ;
        }else{
	    $simpan	= "BARU" ;
        }

        $namakos = $_POST['namakos'];
        $jumlahkamar	= $_POST['jumlahkamar'];
        $fasilitas		= $_POST['fasilitas'];
        $LuasKamar		= $_POST['luas_kamar'];
        $jarak		= $_POST['jarak'];
        $harga			= $_POST['harga'];

//================
//====koneksi

        error_reporting(E_ALL ^ E_DEPRECATED);
	    $host = "localhost";
	    $user = "root";
	// $pass = "123";
	    $dbName = "sewakos";
	
	    $kon = mysqli_connect($host, $user);
	    if (!$kon)
		die("Gagal Koneksi . . .");
	
	    $hasil = mysqli_select_db($kon, $dbName);
	    if (!$hasil){

		    $hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		    if (!$hasil)
			die("Gagal Buat Database");
		    else
			$hasil = mysqli_select_db($kon, $dbName);

			if (!$hasil) die ("Gagal Konek Database");

	    }
	    $sqlTabelKos = "create table if not exists kos ( 
		idkos int auto_increment not null primary key, 
					namakos varchar(40) not null, 
					jumlahkamar int not null default 0, 
					fasilitas varchar(150) not null,
					luas_kamar int not null default 0,
					jarak int not null default 0,
					harga int not null default 0, 
					KEY(namakos) )";
					
	    mysqli_query ($kon, $sqlTabelKos) or die("Gagal Buat Tabel Kos");

//============
        if($simpan == "EDIT"){

	        $sql = "update kos set
			namakos = '$namakos' , jumlahkamar = '$jumlahkamar',
			fasilitas ='$fasilitas' ,luas_kamar = '$LuasKamar', jarak = '$jarak', harga = '$harga' 
			where idkos = $idkos ";
        }else{
	    $sql = "insert into kos
		(namakos,jumlahkamar,fasilitas,luas_kamar, jarak, harga)
		values ('$namakos',$jumlahkamar,'$fasilitas',$LuasKamar, '$jarak',$harga) ";
        }


        $hasil = mysqli_query($kon, $sql);

        if (!$hasil) {

	        echo "Masih Ada Kesalahan, silahkan perbaiki! <be />";
	        echo mysqli_error($kon);
	        echo "<input type='button' value='Kembali' 
		    onClick='self.history.back()'>";
	        exit;
        } else {
	// echo "berhasil";
	    header("location:kos_tampil.blade.php");
        }
    return redirect('/kos_tampil');
    }
    
}
?>