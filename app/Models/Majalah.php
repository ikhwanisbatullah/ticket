<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalah extends Model
{
    protected $table = 'majalah';
    protected $primaryKey = 'kd_majalah';
    protected $guarded = array();
}
