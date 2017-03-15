<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_inventory_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('contact_deliveries');
            $table->string('address');
            $table->string('phone');
            $table->string('secondary_phone');
            $table->string('facsimile_num');
            $table->string('email')->nullable();
            $table->longText('options');
            $table->integer('status')->default(1);
            $table->integer('user_id');
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
        Schema::dropIfExists('st_inventory_locations');
    }
}
