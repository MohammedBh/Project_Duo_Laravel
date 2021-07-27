<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_articles', function (Blueprint $table) {
            $table->id();
            $table->string('titleHome');
            $table->string('img');
            $table->string('titleCreative');
            $table->string('para1');
            $table->string('ahref1');
            $table->string('titleBest');
            $table->string('para2');
            $table->string('para3');
            $table->string('ahref2');
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
        Schema::dropIfExists('home_articles');
    }
}
