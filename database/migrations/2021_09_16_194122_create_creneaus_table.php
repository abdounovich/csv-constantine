<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreneausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creneaus', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
            $table->unsignedBigInteger('groupe_id')->nullable();
            $table->string('nom');
			$table->string('jour');
			$table->string('debut');
			$table->string('fin');
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
        Schema::dropIfExists('creneaus');
    }
}
