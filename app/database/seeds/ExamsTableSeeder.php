<?php

class ExamsTableSeeder extends Seeder {

	public function run()
	{
            DB::table('exams')->delete();
            
            Exams::create(array(
                'subject_id' => '1',
                ''
            ));
	}

}