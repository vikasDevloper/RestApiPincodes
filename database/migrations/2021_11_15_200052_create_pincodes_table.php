<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePincodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
                          

    public function up()
    {
        Schema::create('pincodes', function (Blueprint $table) {
            $table->id();
            $table->string('officename');
            $table->string('pincode');
            $table->string('officeType');
            $table->timestamp('Deliverystatus')->nullable();
            $table->string('divisionname');
            $table->string('regionname');
            $table->string('circlename');
            $table->string('Taluk');
            $table->string('Districtname');
            $table->string('statename');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pincodes');
    }
}
