<?php

class SyllabusTableSeeder extends Seeder {

	public function run()
	{
             DB::table('syllabus')->delete();
             
             Syllabus::create(array(
                 'name' => 'Licenciatura en Desarrollo de Software'
             ));
             
             Syllabus::create(array(
                 'name' => 'Licenciatura en Redes y Telecomunicaciones'
             ));
	}

}