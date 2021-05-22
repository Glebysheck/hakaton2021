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
        Schema::create('detail__posters', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->char('title');
            $table->date('date_lower');
            $table->date('date_upper');
            $table->integer('price');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->char('image');
            $table->char('address');
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
        Schema::dropIfExists('detail__posters');
    }
}
