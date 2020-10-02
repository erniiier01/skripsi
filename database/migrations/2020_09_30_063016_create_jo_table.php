<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('location');
            $table->foreignId('project_id')->constrained('project');
            $table->string('jo_id', 30);
            $table->string('desc', 100);
            $table->string('status_jo');
            $table->date('target_date');
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
        Schema::dropIfExists('jo');
    }
}
