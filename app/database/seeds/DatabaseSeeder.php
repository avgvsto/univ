<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
                $this->call('ExamsTableSeeder');
                $this->call('StudensTableSeeder');
                $this->call('SyllabusTableSeeder');
                $this->call('SubjectTableSeeder');
                $this->call('AcademicSituationTableSeeder');
	}

}
