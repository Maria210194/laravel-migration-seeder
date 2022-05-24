<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("codice_treno");
            $table->string("azienda");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->datetime("orario_di_partenza");
            $table->datetime("orario_di_arrivo");
            $table->tinyInteger("numero_di_carrozze");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
            $table->string("codice_treno");
            $table->string("azienda");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->datetime("orario_di_partenza");
            $table->datetime("orario_di_arrivo");
            $table->tinyInteger("numero_di_carrozze");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
    }
}
