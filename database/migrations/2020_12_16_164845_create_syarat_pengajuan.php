<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyaratPengajuan extends Migration
{

    public function up()
    {
        Schema::create('syarat_pengajuan', function (Blueprint $table) {
            $table->increments('id_pengajuan');
            $table->string('file');
            $table->string('status');
            $table->string('jns_pengajuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('syarat_pengajuan');
    }
}
