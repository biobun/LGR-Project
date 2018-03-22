<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['id', 'nama', 'deskripsi', 'stok', 'harga', 'img1', 'img2', 'img3', 'img4'];
    public $incrementing = false;
}
