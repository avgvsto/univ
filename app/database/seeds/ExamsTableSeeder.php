<?php

class ExamsTableSeeder extends Seeder {

	public function run()
	{
            DB::table('exams')->delete();
            
            //febrero
            $date = new DateTime('2014-02-21');
            $date->format('Y-m-d');
            //Matemática, Software
            Exams::create(array(
                'subject_id' => '1',
                'syllabus_id' => 1,
                'call' => $date,
            ));
            //Matemática, Redes
            Exams::create(array(
                'subject_id' => '2',
                'syllabus_id' => 2,
                'call' => $date,
            ));
            
            //marzo
            $date = new DateTime('2014-03-10');
            $date->format('Y-m-d');
            
            Exams::create(array(
                'subject_id' => '1',
                'syllabus_id' => 1,
                'call' => $date,
            ));
            
            Exams::create(array(
                'subject_id' => '2',
                'syllabus_id' => 2,
                'call' => $date,
            ));
            
            //abril
            $date = new DateTime('2014-04-14');
            $date->format('Y-m-d');
            
            Exams::create(array(
                'subject_id' => '1',
                'syllabus_id' => 1,
                'call' => $date,
            ));
            
            Exams::create(array(
                'subject_id' => '2',
                'syllabus_id' => 2,
                'call' => $date,
            ));
            
            //julio-1
            $date = new DateTime('2014-06-03');
            $date->format('Y-m-d');
            
            Exams::create(array(
                'subject_id' => '1',
                'syllabus_id' => 1,
                'call' => $date,
            ));
            
            Exams::create(array(
                'subject_id' => '2',
                'syllabus_id' => 2,
                'call' => $date,
            ));
            
            //julio-2
            $date = new DateTime('2014-06-24');
            $date->format('Y-m-d');
            
            Exams::create(array(
                'subject_id' => '1',
                'syllabus_id' => 1,
                'call' => $date,
            ));
            
            Exams::create(array(
                'subject_id' => '2',
                'syllabus_id' => 2,
                'call' => $date,
            ));
	}

}