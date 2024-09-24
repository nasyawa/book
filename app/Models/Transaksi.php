<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function buku(){
        return $this->belongsToMany(Buku::class, 'transaksi_buku')->withPivot('jumlah');
    }
}
