<?php

class Human
{
    private $first_name;
    private $second_name;
    private $age;

    public function __construct($first_name,$second_name,$age)
    {
        $this->first_name=$first_name;
        $this->second_name=$second_name;
        $this->age=$age;
    }

    public function set_first_name($var){
        $this->first_name = $var;
    }

    public function set_second_name($var){
        $this->second_name = $var;
    }

    public function set_age($var){
        $this->first_name = $var;
    }

    public function get_first_name(){
        return $this->first_name;
    }

    public function get_second_name(){
        return $this->second_name;
    }

    public function get_age(){
        return $this->age;
    }
}

class Student extends Human
{
    private $form;
    private $course;
    private $marks = [];

    public function __construct($first_name,$second_name,$age,$form,$course)
    {
        parent::__construct($first_name,$second_name,$age);
        $this->form = $form;
        $this->course = $course;
    }

    public function set_marks($mark){
        array_push($this->marks, $mark);
    }

    public function get_marks(){
        return $this->marks;
    }

    public function set_form($var){
        $this->form = $var;
    }

    public function set_course($var){
        $this->course = $var;
    }

    public function get_form($var){
        $this->form = $var;
    }

    public function get_course($var){
        $this->form = $var;
    }
}

class Coworker extends Human
{
    private $salary;

    public function __construct($first_name, $second_name, $age, $salary)
    {
        parent::__construct($first_name, $second_name, $age);
        $this->salary=$salary;
    }

}