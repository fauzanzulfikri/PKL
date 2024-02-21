<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('penulis',50);
            $table->string('penerbit',50);
            $table->string('genre',30);
            $table->text('sinopsis');
            $table->enum('status',['tak tersedia','tersedia']);
            $table->integer('stok');
            $table->string('fotobuku',100);
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
        Schema::dropIfExists('bukus');
    }
}
