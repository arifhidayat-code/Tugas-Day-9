<?php 
class Animal {

    public $name = '';
    public $legs = 2 ;
    public $cold_blooded = 'false';

    public function __construct($data_name) 
    {
        $this->name = $data_name;
    }

    public function set_name($data)
    {
        $this->name = $data;
    }

    public function get_name() 
    {
        return $this->name;
    }

    public function set_legs($data)
    {
        $this->legs = $data;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function set_cold($data)
    {
        $this->cold_blooded = $data;
    }

    public function get_cold()
    {
        return $this->cold_blooded;
    }

}
