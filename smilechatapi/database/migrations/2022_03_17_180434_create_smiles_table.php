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
        Schema::create('smiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
            ->on('post')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->booleal('smile');
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
        Schema::dropIfExists('smiles');
    }
};
