<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternateNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alternate_names', function(Blueprint $table)
		{
			$table->increments('alternateNameId');
            $table->integer('geonameid');
            $table->string('isolanguage', 7);
            $table->string('alternate_name', 200);
            $table->char('isPreferredName', 1);
            $table->char('isShortName', 1);
            $table->char('isColloquial', 1);
			$table->char('isHistoric', 1);
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
		Schema::drop('alternate_names');
	}

}
