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
        Schema::create('investment_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nazwa dewelopera
            $table->string('legal_form')->nullable(); // Forma prawna

            $table->string('krs_number')->nullable();
            $table->string('ceidg_number')->nullable();
            $table->string('nip')->nullable();
            $table->string('regon')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('website')->nullable();

            // Adres - siedziba/główne miejsce działalności
            $table->string('province')->nullable();       // Województwo
            $table->string('district')->nullable();       // Powiat
            $table->string('municipality')->nullable();   // Gmina
            $table->string('city')->nullable();           // Miejscowość
            $table->string('street')->nullable();         // Ulica
            $table->string('building_number')->nullable();// Nr nieruchomości
            $table->string('apartment_number')->nullable(); // Nr lokalu
            $table->string('postal_code')->nullable();    // Kod pocztowy

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
        Schema::dropIfExists('investment_companies');
    }
};
