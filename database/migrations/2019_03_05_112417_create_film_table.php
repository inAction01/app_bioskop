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
			$table->primary('id_film');
			$table->string('id_film',20);
			$table->string('id_kategori',10);
            $table->string('img');
            $table->string('judul');
            $table->string('sutradara');
            $table->string('thn_rilis');
            $table->longText('sinopsis');
			$table->timestamp('created_at')->useCurrent();
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
