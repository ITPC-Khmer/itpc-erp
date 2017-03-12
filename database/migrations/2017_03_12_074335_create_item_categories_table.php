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
            $table->integer('parent');
            $table->string('matrix_id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('item_type_id')->comment('Manufactured, Purchased, Service');
            $table->integer('units_measure_id')->nullable()->comment('ខ្នាតបស់ Item');
            $table->integer('exclude_sales')->default(0);
            $table->integer('exclude_purchases')->default(0);
            $table->integer('sales_account_id')->nullable()->default(0);
            $table->integer('inventory_account_id')->nullable()->default(0);
            $table->integer('c_o_g_s_account_id')->nullable()->default(0);
            $table->integer('inventory_adjustments_account_id')->nullable()->default(0);
            $table->integer('item_assembly_costs_account_id')->nullable()->default(0);
            $table->longText('option');
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
        Schema::dropIfExists('st_item_categories');
    }
}
