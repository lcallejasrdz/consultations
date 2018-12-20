<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsiltingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulting_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('address');
            $table->string('lat');
            $table->string('lng');
            $table->string('logo')->nullable();
            $table->string('monday_init_1')->nullable();
            $table->string('monday_finish_1')->nullable();
            $table->string('monday_init_2')->nullable();
            $table->string('monday_finish_2')->nullable();
            $table->string('tuesday_init_1')->nullable();
            $table->string('tuesday_finish_1')->nullable();
            $table->string('tuesday_init_2')->nullable();
            $table->string('tuesday_finish_2')->nullable();
            $table->string('wednesday_init_1')->nullable();
            $table->string('wednesday_finish_1')->nullable();
            $table->string('wednesday_init_2')->nullable();
            $table->string('wednesday_finish_2')->nullable();
            $table->string('thursday_init_1')->nullable();
            $table->string('thursday_finish_1')->nullable();
            $table->string('thursday_init_2')->nullable();
            $table->string('thursday_finish_2')->nullable();
            $table->string('friday_init_1')->nullable();
            $table->string('friday_finish_1')->nullable();
            $table->string('friday_init_2')->nullable();
            $table->string('friday_finish_2')->nullable();
            $table->string('saturday_init_1')->nullable();
            $table->string('saturday_finish_1')->nullable();
            $table->string('saturday_init_2')->nullable();
            $table->string('saturday_finish_2')->nullable();
            $table->string('sunday_init_1')->nullable();
            $table->string('sunday_finish_1')->nullable();
            $table->string('sunday_init_2')->nullable();
            $table->string('sunday_finish_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consulting_rooms');
    }
}
