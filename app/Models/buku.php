<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function penerbit()
    {
        return $this->belongsTo(penerbit::class);
    }
}
