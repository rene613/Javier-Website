<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubservicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subservices', function(Blueprint $table)
		{
			$table->integer('service_id')->unsigned();
			$table->increments('sub_id');
			$table->string('sub_name');
			$table->string('sub_text');
			$table->decimal('price', 13, 2);

			$table->foreign('service_id')->references('service_id')->on('services');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subservices');
	}

}
