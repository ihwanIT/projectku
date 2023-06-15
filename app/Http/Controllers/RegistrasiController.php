<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use Illuminate\Support\
class RegistrasiController extends Controller
{
    public function index()
    {
        return view("admin.actif.registrasi");
    }
    public function registrasi(Request $request)
    {
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // DB::insert("insert into admin (name,email,password) values(?,?,?)",[$name,$email,$password]);
        // echo " inserted successfully.<br>";
        // echo '<a href = "/index">Click Here</a> to go back.';
        $ValidateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        // $ValidateData['password'] = Hash::make($ValidateData
        // ['password']);
        // $ValidateData = Hash::make($ValidateData['password']);
        $ValidateData['password'] = bcrypt($ValidateData['password']);
        User::create($ValidateData);
            return redirect('/')->withSuccess('data admin berhasil di tambahkan!');
        

    }
}
