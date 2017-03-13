<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('bar_code')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('manufacturer_code')->nullable();
            $table->string('description')->nullable();
            $table->integer('item_category_id');
            $table->integer('item_tax_type_id')->nullable();
            $table->integer('exclude_sales')->nullable();
            $table->integer('exclude_purchases')->nullable();
            $table->integer('sales_account_id')->nullable()->default(0);
            $table->integer('inventory_account_id')->nullable()->default(0);
            $table->integer('c_o_g_s_account_id')->nullable()->default(0);
            $table->integer('inventory_adjustments_account_id')->nullable()->default(0);
            $table->integer('item_assembly_costs_account_id')->nullable()->default(0);
            $table->longText('image');
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
        Schema::dropIfExists('st_items');
    }
}
