<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientGovernorateTable extends Migration {

	public function up()
	{
		Schema::create('client_governorate', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('governorate_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('client_governorate');
	}
}
