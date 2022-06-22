<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->id();
            $table->string('MaSV');
            $table->string('FirthName');
            $table->string('LastName');
            $table->date('Birth');
            $table->string('Gender');
            $table->string('Address');
            $table->string('BirthPlace');
            $table->String('Email');
            $table->String('PhoneNumber');
            $table->String('CitizenIdentityCard');
            $table->String('Image');
            $table->String('Status');
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
        Schema::dropIfExists('sinhviens');
    }
};
