<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tiket;

class Kategori extends Model
{
    protected $guarded = [];

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_kategori', 'id');
    }
}
