<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('frameworks');
    }
}
