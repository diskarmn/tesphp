<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('idpost')->autoIncrement();
            $table->text('title');
            $table->text('content');
            $table->dateTime('date');
            $table->string('username',45);
            $table->foreign('username')->references('username')->on('accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
