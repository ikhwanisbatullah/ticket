<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKonten extends Model
{
    protected $table = 'kategori_konten';
    protected $primaryKey = 'kd_kategori_konten';
    protected $guarded = array();
}
