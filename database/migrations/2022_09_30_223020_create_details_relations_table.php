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
        Schema::create('details_relations', function (Blueprint $table) {
            $table->id();
            $table->float('score');
            $table->smallInteger('stu_duration');
            $table->foreignId('courses_quizzes_id')->constrained()
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('subjects_users_id')->constrained()
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('details_relations');
    }
};
