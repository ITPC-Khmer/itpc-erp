<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_unit_measures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->nullable();
            $table->decimal('decimal_places')->index()->nullable();
            $table->longText('options');//json
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('st_unit_measures');
    }
}
