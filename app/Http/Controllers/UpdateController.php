<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function index() {
        $products = DB::select('select * from product');
        return view('p10_update.update-product-view',['products'=>$products]);
        }
        public function show($id) {
        $products = DB::select('select * from product where id = ?',[$id]);
        return view('p10_update.update-product',['products'=>$products]);
        }
        public function edit(Request $request,$id) {
        $name = $request->input('product-name');
        DB::update('update product set name = ? where id = ?',[$name,$id]);
        return redirect('select-product')->with('success','data berhasil di ubah');
        }
}
