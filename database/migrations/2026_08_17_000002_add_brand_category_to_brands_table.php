<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrandCategoryToBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_category_id')->nullable()->after('id');
            $table->string('brand_category_name')->nullable()->after('brand_category_id');

            $table->foreign('brand_category_id')
                  ->references('id')
                  ->on('brand_categories')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropForeign(['brand_category_id']);
            $table->dropColumn(['brand_category_id', 'brand_category_name']);
        });
    }
}
