<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class GaleriCreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();

            $table->foreignId('album_id')
                  ->constrained('galeri_album')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->string('judul')->nullable();
            $table->string('gambar')->nullable();
            $table->boolean('cover')->default(0);
            $table->boolean('publish')->default(true);
            $table->mediumText('isi')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
