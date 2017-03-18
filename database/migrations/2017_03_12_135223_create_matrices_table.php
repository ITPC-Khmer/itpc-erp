<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_matrices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->nullable();
            $table->string('description')->index()->nullable();
            $table->text('option')->nullable()->comment('Input Value of title');
            $table->integer('status')->index()->default(1);
            $table->integer('user_id')->index()->nullable();
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
        Schema::dropIfExists('st_matrices');
    }
}
