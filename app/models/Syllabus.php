<?php

class Syllabus extends \Eloquent {
	protected $fillable = [];
        public $table = 'syllabus';
        
        public function subjects(){
            return $this->hasMany('subject');
        }
}