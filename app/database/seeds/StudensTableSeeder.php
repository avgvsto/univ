<?php

class StudensTableSeeder extends Seeder {

	public function run()
	{
              DB::table('students')->delete();
              
              Student::create(array(
                'surename' => 'Riveros',
                'name' => 'Tadeo',
                'dni' => 32032835,
                'email' => 'tadeork@gmail.com',
                'legajo' => 110058,
                'syllabus_id' => 1
              ));
              
              Student::create(array(
                'surename' => 'Coria',
                'name' => 'Octavio',
                'dni' => 34226432,
                'email' => 'octa.ac@gmail.com',
                'legajo' => 131201,
                'syllabus_id' => 1
              ));
              
              Student::create(array(
                'surename' => 'Diaz',
                'name' => 'Matias',
                'dni' => 33076432,
                'email' => 'mati.diaz@gmail.com',
                'legajo' => 110201,
                'syllabus_id' => 2
              ));
	}

}