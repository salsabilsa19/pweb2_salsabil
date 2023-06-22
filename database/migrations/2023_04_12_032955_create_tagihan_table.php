<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('sebelumnya')->nullable();
            $table->integer('sekarang')->nullable();
            $table->integer('jumlahtagihan');
            $table->enum('statuspembayaran' ,['Lunas','Belum Bayar']);
            $table->rememberToken();
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
        Schema::dropIfExists('tagihan');
    }
};
