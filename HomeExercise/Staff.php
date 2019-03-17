<?php 

class Staff extends Person{

    function __construct()
    {

    }
    private $vacancy;

    public function getVacancy()
    {
        return $this->vacancy;
    }

    public function setVacancy($param)
    {
        $this->vacancy = $param;
    }

}



?>