<?php

class SubjectTableSeeder extends Seeder {

	public function run()
	{
             DB::table('subject')->delete();
             //id 1
             Subject::create(array(
                 'syllabus_id' => 1,
                 'name' => 'Matemática'
             ));
             //id 2
             Subject::create(array(
                 'syllabus_id' => 2,
                 'name' => 'Matemática'
             ));
             //id 3
             Subject::create(array(
                 'syllabus_id' => 1,
                 'name' => 'Programación 1'
             ));
             //id 4
             Subject::create(array(
                 'syllabus_id' => 2,
                 'name' => 'Redes LAN'
             ));
	}

}