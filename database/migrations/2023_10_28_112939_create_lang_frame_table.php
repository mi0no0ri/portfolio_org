<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangFrameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_frame', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('language_id');
            $table->foreign('language_id')->references('id')->on('usableLanguages');
            $table->unsignedInteger('framework_id');
            $table->foreign('framework_id')->references('id')->on('usableFrameworks');
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
        Schema::dropIfExists('lang_frame');
    }
}
