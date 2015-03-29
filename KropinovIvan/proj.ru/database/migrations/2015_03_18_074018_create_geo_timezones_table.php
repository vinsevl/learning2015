<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoTimezonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_timezones', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('timeZoneId', 200);
            $table->decimal('GMT_offset', 3, 1);
            $table->decimal('DST_offset', 3, 1);
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
		Schema::drop('geo_timezones');
	}

}
