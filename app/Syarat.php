<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $table    = "syarat_pengajuan";
    protected $fillable  = ['jns_pengajuan','file', 'status'];
}
