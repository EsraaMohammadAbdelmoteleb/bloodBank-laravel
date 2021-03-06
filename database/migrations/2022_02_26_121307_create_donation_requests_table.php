<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationRequestsTable extends Migration {

	public function up()
	{
		Schema::create('donation_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->string('patient_name');
			$table->string('patient_phone');
			$table->string('hospital_name');
			$table->string('hospital_adress');
			$table->integer('patient_age');
			$table->integer('bags_num');
			$table->decimal('longitude')->default('10.8');
			$table->text('details');
			$table->decimal('latitude')->default('10.8');
			$table->integer('blood_type_id')->unsigned();
			$table->integer('client_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('donation_requests');
	}
}