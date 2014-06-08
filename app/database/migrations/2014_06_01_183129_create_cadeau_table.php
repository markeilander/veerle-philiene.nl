<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadeauTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cadeau', function(Blueprint $table)
		{
		    $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('titel', 16);
			$table->string('omschrijving', 256);
			$table->string('winkel', 64);
			$table->string('url', 512);
			$table->string('afbeelding', 512);
			$table->float('prijs');
			$table->enum('beschikbaar', array('ja', 'nee'));
			$table->tinyInteger('aantal');
			$table->tinyInteger('besteld');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cadeau');
	}

}
