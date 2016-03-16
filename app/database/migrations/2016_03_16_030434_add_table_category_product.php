<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableCategoryProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("category", function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
        });

        Schema::create("product", function(Blueprint $table){
            $table->increments("id");
            $table->integer("category_id");
            $table->string("name");
            $table->double("price");
            $table->string("content");
            $table->string("status");
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("category");
        Schema::dropIfExists("product");
	}

}
