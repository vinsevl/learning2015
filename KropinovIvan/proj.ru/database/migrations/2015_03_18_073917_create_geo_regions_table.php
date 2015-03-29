<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoRegionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_regions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('country', 2);
            $table->string('code', 10);
            $table->text('name');
            $table->string('alternate_name', 200);
            $table->bigInteger('population');
            $table->integer('timezone_id');
            $table->bigInteger('geonameid');
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
		Schema::drop('geo_regions');
	}

}
