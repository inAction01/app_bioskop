<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
			$table->primary('id_transaksi');
			$table->string('id_transaksi',20);
			$table->string('id_film',20);	
			$table->string('nama');
			$table->string('no_ktp');
			$table->string('tgl_pinjam');
			$table->string('tgl_kembali');
			$table->double('hrg_sewa');
			$table->string('status');
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
        Schema::dropIfExists('transaksi');
    }
}
