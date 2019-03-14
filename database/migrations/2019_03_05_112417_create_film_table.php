<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
			$table->string('id_film')->unique();
			$table->string('id_kategori', 100);
            $table->string('judul', 100);
            $table->string('sutradara', 100);
            $table->string('thn_rilis', 100);
            $table->string('sinopsis', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
