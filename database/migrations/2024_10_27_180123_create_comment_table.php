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
       
    Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('post_id'); // Foreign key to posts table
        $table->string('author');
        $table->text('content');
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};
