<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBuku extends Model
{
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
