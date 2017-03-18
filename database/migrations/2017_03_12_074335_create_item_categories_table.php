<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_item_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->index()->nullable()->default('0');
            $table->string('matrix_id')->index()->nullable();//json
            $table->string('title')->index()->nullable();
            $table->string('description')->index()->nullable();
            $table->integer('item_type_id')->index()->nullable()->comment('Manufactured, Purchased, Service');
            $table->integer('unit_measure_id')->index()->nullable()->comment('ខ្នាតបស់ Item');
            $table->integer('exclude_sales')->index()->nullable()->default(0);
            $table->integer('exclude_purchases')->index()->nullable()->default(0);
            $table->integer('sales_account_id')->index()->nullable()->default(0);
            $table->integer('inventory_account_id')->index()->nullable()->default(0);
            $table->integer('c_o_g_s_account_id')->index()->nullable()->default(0);
            $table->integer('inventory_adjustments_account_id')->index()->nullable()->default(0);
            $table->integer('item_assembly_costs_account_id')->index()->nullable()->default(0);
            $table->text('image_url')->index()->nullable();//json
            $table->longText('options')->index()->nullable();//json
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
        Schema::dropIfExists('st_item_categories');
    }
}
