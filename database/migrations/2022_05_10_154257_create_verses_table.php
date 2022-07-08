<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('version', 10)->nullable();
            $table->integer('testament')->nullable();
            $table->integer('book')->nullable();
            $table->integer('chapter')->nullable();
            $table->integer('verse')->nullable();
            $table->string('text', 75)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verses');
    }
}
