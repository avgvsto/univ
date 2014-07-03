<?php

class Student extends \Eloquent {
	protected $fillable = [];
        public $table = 'students';
        
        public function syllabus(){
            return $this->belongsTo('Syllabus');
        }
}