<?php

class AcademicSituationTableSeeder extends Seeder {

    public function run() {
        DB::table('academic_situation')->delete();
        //Tadeo, Matematica
        Academic_Situation::create(array(
            'subject_id' => 1,
            'student_id' => 1,
            'situation' => 'regular'
        ));
        //Tadeo, Programación
        Academic_Situation::create(array(
            'subject_id' => 3,
            'student_id' => 1,
            'situation' => 'regular'
        ));
        //Octavio, Matemática
        Academic_Situation::create(array(
            'subject_id' => 1,
            'student_id' => 2,
            'situation' => 'regular'
        ));
        //Octavio, Programación
        Academic_Situation::create(array(
            'subject_id' => 3,
            'student_id' => 2,
            'situation' => 'regular'
        ));
        //Matias, Matemática
        Academic_Situation::create(array(
            'subject_id' => 2,
            'student_id' => 3,
            'situation' => 'no regular'
        ));
        //Matias, Redes LAN
        Academic_Situation::create(array(
            'subject_id' => 4,
            'student_id' => 3,
            'situation' => 'recursa'
        ));
    }

}
