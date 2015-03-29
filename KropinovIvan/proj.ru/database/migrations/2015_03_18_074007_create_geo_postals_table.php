<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoPostalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_postals', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('geonameid');
            $table->string('postal_code', 10);
            $table->decimal('lat', 10, 7);
            $table->decimal('lon', 10, 7);
            $table->string('country_code', 2);
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
		Schema::drop('geo_postals');
	}

}
