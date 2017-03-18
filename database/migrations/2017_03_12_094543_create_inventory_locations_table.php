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
            $table->string('code')->index()->nullable();
            $table->string('location_name')->index()->nullable();
            $table->text('contact')->nullable();//json
            $table->text('address')->nullable();

            /*[
             name : xxxx,
             contact_deliveries : xxx,
             phone : xxx,
             email: xx
            ];*/

            $table->text('options')->nullable();//json
            $table->integer('status')->index()->nullable()->default(1);
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
        Schema::dropIfExists('st_inventory_locations');
    }
}
