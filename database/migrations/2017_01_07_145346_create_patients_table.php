<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_doctor');
            $table->integer('id_consulting_room');
            $table->string('name');
            $table->string('last_name');
            $table->string('genre');
            $table->string('birth_date');
            $table->string('state');
            $table->string('city');
            $table->string('postal_code');
            $table->string('colony');
            $table->string('street');
            $table->string('no_exterior');
            $table->string('no_interior');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('occupation');
            $table->string('scholarship');
            $table->string('civil_status');
            $table->string('religion');
            $table->integer('diabetes');
            $table->integer('arterial_hypertension');
            $table->integer('asthma');
            $table->integer('cardiopathy');
            $table->integer('nephropathy');
            $table->integer('hepatopathy');
            $table->integer('pneumopathy');
            $table->integer('cancer');
            $table->integer('mental_diseases');
            $table->integer('allergic_diseases');
            $table->integer('endocrine_diseases');
            $table->text('others_family_background');
            $table->text('diseases');
            $table->text('previous_surgery');
            $table->text('hospitalizations');
            $table->text('traumas');
            $table->text('allergies');
            $table->text('transfusions');
            $table->string('smoking');
            $table->string('alcoholism');
            $table->string('addictions');
            $table->string('immunizations');
            $table->text('others_personal_history');
            $table->string('menarca');
            $table->string('menstrual_rhythm');
            $table->integer('g');
            $table->integer('p');
            $table->integer('a');
            $table->integer('c');
            $table->string('fum');
            $table->string('menopause');
            $table->text('cardiovascular_system');
            $table->text('digestive_system');
            $table->text('respiratory_system');
            $table->text('genitourinary_system');
            $table->text('lymphatic_system');
            $table->text('endocrine_system');
            $table->text('osteomyoarticular_system');
            $table->text('nervous_system');
            $table->text('integumentary_system');
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
        Schema::drop('patients');
    }
}
