<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->string('department', 250)->nullable();
            $table->string('address_line1', 250)->nullable();
            $table->string('address_line2', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('country', 200)->nullable(0);
            $table->string('state', 200)->nullable();
            $table->mediumText('logo')->nullable();
            $table->mediumText('teaser')->nullable();
            $table->integer('sector');
            $table->longText('description')->nullable();
            $table->longText('d_description')->nullable();
            $table->string('color_title', 250)->nullable();
            $table->string('color_subtitle', 250)->nullable();
            $table->string('color_text', 250)->nullable();
            $table->boolean('bool_use_color');

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
        Schema::drop('employee');
    }
}
