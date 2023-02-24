<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('CaseNo');
            $table->string('LId');
            $table->string('LName');
            $table->date('DOC');
            $table->string('Court')->nullable();
            $table->time('STime');
            $table->time('ETime');
            $table->string('Details',1000);
            $table->string('Status');
            $table->date('ND')->nullable();
            $table->string('FNo')->nullable();
            $table->string('ALId')->nullable();
            $table->string('Remarks',1000)->nullable();
            $table->string('Docx',10000)->nullable();
            $table->string('UpdatedBy');
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
        Schema::dropIfExists('details');
    }
}
