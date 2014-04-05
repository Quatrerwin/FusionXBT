<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTorrentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('torrents', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('filename');
			$table->string('save_as');
			$table->bigInteger('size')->default(0);
			$table->integer('hits')->unsigned()->default(0);
			$table->integer('times_completed')->default(0);
			$table->integer('sedders')->default(0);
			$table->integer('leechers')->default(0);
			$table->enum('visible', array('yes', 'no'))->default('yes')->index();
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
		Schema::drop('torrents');
	}

}
