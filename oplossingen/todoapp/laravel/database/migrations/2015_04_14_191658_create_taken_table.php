<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taken', function($table)

						{

						    $table->increments('taken_id');
						    $table->text('taak');
						    $table->string('categorie');
						    $table->boolean('voltooid');

						});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taken');
	}

}
