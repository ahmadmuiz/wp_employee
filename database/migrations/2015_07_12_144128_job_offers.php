<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobOffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('employee_id')->unsigned();
            $table->string('job_title', 250)->nullable();
            $table->integer('work_load', 250)->nullable();
            $table->string('function', 250)->nullable();
            $table->string('location', 250)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->mediumText('advertisement')->nullable();
            $table->mediumText('link')->nullable();
            $table->dateTime('online_start')->nullable();
            $table->dateTime('online_end')->nullable();

            $table->timestamp('created_date');
            $table->string('created_by', 250);
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 250)->nullable();
            //set relationship
            
            // $table->timestamps();   //Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_offers');
    }
}
