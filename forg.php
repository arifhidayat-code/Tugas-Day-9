<?php 

require_once('animal.php');

class Frog extends Animal 
{

    public $name;
    public $legs = 4 ;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jump() 
    {
        return 'hop hop';
    }

    public function get_legs()
    {
        return $this->legs;
    }

}
