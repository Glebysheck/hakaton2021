<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('detail_posters', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('title');
            $table->dateTime('date_lower')->nullable();
            $table->dateTime('date_upper')->nullable();
            $table->integer('price');
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('detail_posters');
    }
}
