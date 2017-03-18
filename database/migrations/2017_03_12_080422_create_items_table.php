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

            $table->string('matrices_id')->index()->nullable();//json
            $table->integer('matrices')->index()->nullable();
            $table->string('matrices_unit')->index()->nullable();

            $table->string('code')->index()->nullable();
            $table->string('bar_code')->index()->nullable();
            $table->string('qr_code')->index()->nullable();
            $table->string('manufacturer_code')->index()->nullable();

            $table->string('title')->index()->nullable();
            $table->string('description')->index()->nullable();

            $table->integer('item_category_id')->index()->nullable();
            $table->integer('item_tax_type_id')->index()->nullable();
            $table->integer('exclude_sales')->index()->nullable();
            $table->integer('exclude_purchases')->index()->nullable();
            $table->integer('sales_account_id')->index()->nullable()->default(0);
            $table->integer('inventory_account_id')->index()->nullable()->default(0);
            $table->integer('c_o_g_s_account_id')->index()->nullable()->default(0);
            $table->integer('inventory_adjustments_account_id')->index()->nullable()->default(0);
            $table->integer('item_assembly_costs_account_id')->index()->nullable()->default(0);

            $table->longText('image_url')->nullable();
            $table->text('options')->nullable();//json
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
        Schema::dropIfExists('st_items');
    }
}
