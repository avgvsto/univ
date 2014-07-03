<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLegajoToStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */º
	public function up()
	{
		Schema::table('students', function(Blueprint $table)
		{
                    $table->integer('legajo');
		});
	}


}