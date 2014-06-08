<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhilieneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('philiene', function(Blueprint $table)
		{
		    $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('header', 256);
			$table->text('body');
			$table->string('footer', 256)->default('');
			$table->enum('type', array('child', 'pencil-square-o', 'picture-o', 'video-camera'));
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
		Schema::drop('philiene');
	}

}
