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
    Schema::create('contacts', function (Blueprint $table) {
    $table->id();
    $table->bigInteger('id_user')->usigned();
    $table->foreign('id_user')->references('id')->on('user');
    $table->String('name');
    $table->String('email');
    $table->String('subject');
    $table->text('message');
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
