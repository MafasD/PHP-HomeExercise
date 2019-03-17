<?php 

class Students extends Person{
    function __construct()
    {
        
    }


private $courses=array();  //selectedCourses
private $credits;          //creditPoints

public function getCourses()

    {

        return $this->courses;

    }

    public function setCourses($param)

    {

        array_push($this->courses,$param);

    }

    public function getCredits(){
        return $this->credits;
    }

    public function setCredits($value){
        $this->credits=$value;
    }
}
?>