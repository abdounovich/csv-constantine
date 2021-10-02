<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('prenom');
			$table->string('telephone');
			$table->string('telephone_pere');
			$table->string('address');
			$table->string('nom_pere');
            $table->unsignedBigInteger('groupe_id')->nullable();           
			$table->boolean('transport');
			$table->string('duree');
			$table->string('prix_abonnement')->nullable();
            $table->string('prix_reste')->nullable();
			$table->string('email')->nullable();
			$table->string('sexe');
			$table->string('date_naissance');
			$table->string('badge_url')->nullable();
            $table->text('documents')->nullable();

            $table->foreign('groupe_id')
            ->references('id')->on('groupes')
            ->constrained()
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
