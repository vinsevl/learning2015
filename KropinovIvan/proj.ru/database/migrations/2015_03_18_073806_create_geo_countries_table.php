<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geo_countries', function(Blueprint $table)
		{
			$table->string('iso_alpha2', 2);
            $table->string('iso_alpha3', 3);
            $table->integer('iso_numeric');
            $table->string('fips_code', 3);
            $table->string('name', 200);
            $table->string('capital', 200);
            $table->double('areainsqkm');
            $table->integer('population');
            $table->string('continent', 2);
            $table->string('tld', 3);
            $table->string('currency', 3);
            $table->string('currencyName', 20);
            $table->string('Phone', 10);
            $table->string('postalCodeFormat', 20);
            $table->string('postalCodeRegex', 20);
            $table->integer('geonameId');
            $table->string('languages', 200);
            $table->string('neighbours', 20);
            $table->string('equivalentFipsCode', 10);
            $table->string('adm_type', 20);
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
		Schema::drop('geo_countries');
	}

}
