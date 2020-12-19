<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produktivitas_perkebunan extends Model
{
    use HasFactory;

    protected $table = 'Produktivitas_perkebunan';

    protected $fillable = ['id','tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
