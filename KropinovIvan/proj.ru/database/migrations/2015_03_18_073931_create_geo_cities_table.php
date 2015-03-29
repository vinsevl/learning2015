<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_cities', function(Blueprint $table)
		{
			$table->increments('geonameid');
            $table->integer('region_id');
            $table->string('name', 200);
            $table->string('asciiname', 200);
            $table->text('alternatenames');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->char('fclass', 1);
            $table->string('fcode', 10);
            $table->string('country', 2);
            $table->string('cc2', 60);
            $table->string('admin1', 20);
            $table->string('admin2', 80);
            $table->string('admin3', 20);
            $table->string('admin4', 20);
            $table->integer('population');
            $table->integer('elevation');
            $table->integer('gtopo30');
            $table->string('timezone', 40);
            $table->integer('timezone_id');
            $table->date('moddate');
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
		Schema::drop('geo_cities');
	}

}
