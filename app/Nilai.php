<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table    = "nilai";

    protected $fillable = ['nim', 'nama', 'prodi', 'judul', 'nm_dosen'];
}
