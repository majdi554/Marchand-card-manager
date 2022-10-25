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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('dossier_nature');
            $table->string('dossier_type');
            $table->string('dossier_name');
            $table->string('dossier_date_of_constitution');
            $table->string('dossier_adress');
            $table->string('dossier_country');
            $table->string('dossier_type_of_activity');
            $table->string('dossier_activity');
            $table->string('dossier_branch_addresses');
            $table->string('dossier_phone_number');
            $table->string('dossier_fax_number');
            $table->string('dossier_mobile_number');
            $table->string('dossier_legal_responsible_name');
            $table->foreignId('demande_id')
                  ->constrained('demandes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('dossiers');
    }
};
