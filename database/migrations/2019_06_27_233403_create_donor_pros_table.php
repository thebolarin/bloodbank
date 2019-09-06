<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_pros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('donor_id')->nullabe();
            $table->string('status_id')->nullabe();
            $table->string('gender')->nullabe();
            $table->string('contact_number')->nullabe();
            $table->string('address')->nullabe();
            $table->string('blood_id')->nullabe();
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
        Schema::dropIfExists('donor_pros');
    }
}
