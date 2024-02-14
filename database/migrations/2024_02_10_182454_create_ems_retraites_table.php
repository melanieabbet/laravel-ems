<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Suppression de toutes les tables existantes
        Schema::dropIfExists('retraites');
        Schema::dropIfExists('ems');

        // Création de la table "ems"
        Schema::create('ems', function (Blueprint $table) {
            $table->id();
            $table->string('societe');
            $table->string('adresse');
            $table->string('numero_telephone')->nullable();
            $table->timestamps();
        });

        // Création de la table "retraites"
        Schema::create('retraites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->text('note');
            $table->foreignId('ems_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table "retraites"
        Schema::dropIfExists('retraites');

        // Suppression de la table "ems"
        Schema::dropIfExists('ems');
    }
};
