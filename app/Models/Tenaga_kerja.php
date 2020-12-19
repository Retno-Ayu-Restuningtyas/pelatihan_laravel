<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenaga_kerja extends Model
{
    use HasFactory;

    protected $table = 'Tenaga_kerja';

    protected $fillable = ['id','tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
