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
        Schema::create('property_price_component_property', function (Blueprint $table) {
            $table->id();

            $table->foreignId('property_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('property_price_component_id')
                ->constrained()
                ->onDelete('cascade')
                ->index()
                ->comment('Składnik ceny')
                ->foreign('property_price_component_id', 'ppc_prop_ppc_id_fk') // <-- ręczna, krótsza nazwa
                ->references('id')
                ->on('property_price_components');

            $table->tinyInteger('category');
            $table->decimal('value', 12, 2);
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
        Schema::dropIfExists('property_price_component_property');
    }
};
