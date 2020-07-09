<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule');
            $table->string('name');
            $table->string('direction');
            $table->date('date_only');
            $table->time('clock_in');
            $table->time('clock_out');
            $table->time('real_clockin');
            $table->time('real_clockout');
            $table->integer('work_time');
            $table->integer('over_time');
            $table->time('late');
            $table->time('early_leave');
            $table->string('edited_by');
            $table->string('validated_by');
            $table->string('attachment');
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
        Schema::dropIfExists('logs');
    }
}
