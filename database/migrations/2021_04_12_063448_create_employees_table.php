<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->String('frstName');
            $table->String('middleName');
            $table->String('lastName');
            $table->string('address');
            $table->integer('departmentId');
            $table->integer('cityId');
            $table->integer('stateId');
            $table->integer('countryId');
            $table->integer('zip');
            $table->date('bod');
            $table->date('dateHired');
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
        Schema::dropIfExists('employees');
    }
}
