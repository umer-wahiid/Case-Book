<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caseregs', function (Blueprint $table) {
            $table->id();
            $table->string('CaseId');
            $table->date('DOB');
            $table->string('year',4);
            $table->string('District');
            $table->string('CourtType');
            $table->string('PName');
            $table->string('PEmail');
            $table->string('OName')->nullable();
            $table->string('Matter',1000);
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
        Schema::dropIfExists('caseregs');
    }
}
