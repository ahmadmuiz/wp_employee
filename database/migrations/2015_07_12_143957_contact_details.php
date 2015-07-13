<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('job_offer_id')->unsigned();
            $table->enum('salutation', ['best', 'good', 'bad'])->nullable();
            $table->string('firstname', 250);
            $table->string('lastname', 250)->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('mobile', 200)->nullable();
            $table->string('email', 200);
            $table->string('website', 200)->nullable();
            $table->mediumText('link', 200)->nullable();
            $table->boolean('default_use');

            $table->timestamp('created_date');
            $table->string('created_by', 250);
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 250)->nullable();
            //set relationship
            $table->foreign('job_offer_id')->references('id')->on('job_offers')->onUpdate('cascade');

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
        Schema::drop('contact_details', function(Blueprint $table){
            $table->dropForeign('contact_details');   
        });
    }
}
