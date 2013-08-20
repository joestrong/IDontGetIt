<?php

use Illuminate\Database\Migrations\Migration;

class CreateJokesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('jokes', function($table)
        {
            $table->increments('id');
            $table->string('joke');
            $table->string('explanation');
            $table->int('user_id');
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
		Schema::drop('users');
	}

}