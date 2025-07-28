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
        Schema::create('investment_sale_points', function (Blueprint $table) {
            $table->id();

            $table->string('province'); // Województwo
            $table->string('district'); // Powiat
            $table->string('municipality'); // Gmina
            $table->string('city'); // Miejscowość
            $table->string('street')->nullable(); // Ulica
            $table->string('building_number'); // Nr nieruchomości
            $table->string('apartment_number')->nullable(); // Nr lokalu
            $table->string('postal_code'); // Kod pocztowy

            $table->text('additional_locations')->nullable(); // Dodatkowe lokalizacje
            $table->text('contact_method')->nullable(); // Sposób kontaktu

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
        Schema::dropIfExists('investment_sale_points');
    }
};
