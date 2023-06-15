<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_kos extends Model
{
    protected $fillable = ['namakos', 'jumlahkamar','fasilitas','luas_kamar','jarak','harga', 'imageA', 'imageB', 'imageC', 'imageD',  ];
}
