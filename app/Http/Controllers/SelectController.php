<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function store()
    {
        $Datakost = DB::select('select * from data_kos');
        return view('data_kos',['Datakost'=>$Datakost]);
    }
    public function store_costumer()
    {
        $Datakost = DB::select('select * from data_kos');
        return view('index1',['Datakost'=>$Datakost]);
    }
    public function detail_costumer($id)
    {
        $Datakost = DB::select('select * from data_kos where id = ?',[$id]);
        return view('detail_kos',['Datakost'=>$Datakost]);
    }
    // update kos
    public function show($id) {
        $Datakost = DB::select('select * from data_kos where id = ?',[$id]);
        return view('kos_edit',['Datakost'=>$Datakost]);
        }
    public function edit(Request $request,$id) {
        $namakos = $request->input('data_kos-namakos');
        $jumlahkamar = $request->input('data_kos-jumlahkamar');
        $fasilitas = $request->input('data_kos-fasilitas');
        $luaskamar = $request->input('data_kos-luas_kamar');
        $jarak = $request->input('data_kos-jarak');
        $harga = $request->input('data_kos-harga');
        
        DB::update('update data_kos set namakos = ?, jumlahkamar = ?, fasilitas = ?, luas_kamar = ?, jarak = ?, harga = ?  where id = ?',[$namakos, $jumlahkamar, $fasilitas, $luaskamar, $jarak, $harga,$id]);
        return redirect('datakos');
    }
    //DELETE DATA KOS
    public function ShowDelete($id) {
        $Datakost = DB::select('select * from data_kos where id = ?',[$id]);
        return view('kos_hapus',['Datakost'=>$Datakost]);
    }
    public function Delete($id) {
        DB::delete('delete from data_kos  where id = ?',[$id]);
        return redirect('datakos');
    }

}
