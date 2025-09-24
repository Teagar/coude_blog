<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');


            /* $table->unsignedBigInteger('category_id'); */
            /* $table->foreignId('category_id') */
            /*     ->references('id')->on('categories') */
            /*     ->onDelete('cascade')->onUpdate('cascade'); */

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
