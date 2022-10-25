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
        Schema::create('dossier_legal_representative', function (Blueprint $table) {
            $table->id();
            $table->String('dossier_legal_representative_name');
            $table->date('dossier_legal_representative_date_of_birth');
            $table->string('dossier_legal_representative_place_of_birth');
            $table->string('dossier_legal_representative_mobile');
            $table->string('dossier_legal_representative_nationality');
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
        Schema::dropIfExists('dossier_legal_representative');
    }
};
