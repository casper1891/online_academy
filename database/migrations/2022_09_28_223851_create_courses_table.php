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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('img');
            $table->boolean('active')->default(true);
            $table->enum('type', ['free', 'paid']);// paid or free
            $table->integer('price')->nullable();
            $table->foreignId('subject_id')->constrained()
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade')->onUpdate('cascade');// teacher name
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
};
