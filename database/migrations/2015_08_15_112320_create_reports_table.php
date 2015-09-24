<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sm_num');
			$table->string('link');
			$table->string('employer_id');
			$table->text('group');
			$table->string('application');
			$table->timestamp('created_at')
            ->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')
            ->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reports');
	}

}
