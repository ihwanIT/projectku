<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\data_kos;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\validateRequest;
use Symfony\Contracts\Service\Attribute\Required;

class InsertController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        //model post validate
        $ValiDate = $request->validate([
            'namakos' => 'required',
            'jumlahkamar' => 'required',
            'fasilitas' =>  'required',
            'luas_kamar' =>  'required',
            'jarak' =>  'required',
            'harga' =>  'required',
            'imageA' => 'required|image|mimes:jpg, jepg,png|max:1024',
            'imageB' => 'required|image|mimes:jpg, jepg,png|max:1024',
            'imageC' => 'required|image|mimes:jpg, jepg,png|max:1024',
            'imageD' => 'required|image|mimes:jpg, jepg,png|max:1024'
        ]);
        $imagePathA = $request->file('imageA')->store('foto-kos', 'public');

        $imagePathB = $request->file('imageB')->store('foto-kos', 'public');
        
        $imagePathC = $request->file('imageC')->store('foto-kos', 'public');

        $imagePathD = $request->file('imageD')->store('foto-kos', 'public');

        data_kos::create([
            'namakos' => $ValiDate['namakos'] ,
            'jumlahkamar' => $ValiDate['jumlahkamar'] ,
            'fasilitas' => $ValiDate['fasilitas'],
            'luas_kamar' => $ValiDate['luas_kamar'],
            'jarak' => $ValiDate['jarak'],
            'harga' => $ValiDate['harga'],
            'imageA' => $imagePathA,
            'imageB' => $imagePathB,
            'imageC' => $imagePathC,
            'imageD' => $imagePathD
            // return redirect('/datakos')->with('error')
        ]);
        return redirect('/datakos')->with('succes','Data berhasil di tambahkan');
    }
}
