<?php

class Subject extends \Eloquent {
	protected $fillable = [];
        public $table = 'subject';
        
        public function syllabus(){
            return $this->belongsTo('Syllabus');
        }
}