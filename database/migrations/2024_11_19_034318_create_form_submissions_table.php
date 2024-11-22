<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('form_submissions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('ic',12);
        $table->string('email');
        $table->string('phone');
        $table->timestamps();
    });
 
    Schema::create('attachments', function (Blueprint $table) {
        $table->id('attachmentID');
        $table->unsignedBigInteger('submissionID');
        $table->string('filename');
        $table->integer('filesize');
        $table->string('filetype');
        $table->string('filepath');
        $table->timestamps();


        $table->foreign('submissionID')->references('id')->on('form_submissions');
    });
}


 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_submissions');
    }
};
