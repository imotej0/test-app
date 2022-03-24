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
        Schema::create('comment_smiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('comment_id');
            $table->foreign('comment_id')
            ->on('comments')
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
        Schema::dropIfExists('comment_smiles');
    }
};
