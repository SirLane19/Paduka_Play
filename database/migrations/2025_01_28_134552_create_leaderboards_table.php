<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->integer('round');
            $table->string('team_name');
            $table->integer('rank');
            $table->integer('contribution')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leaderboards');
    }
};
