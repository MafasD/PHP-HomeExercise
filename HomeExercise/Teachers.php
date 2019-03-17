<?php 

class Teachers extends Person{

    function __construct(){

    }
    private $teachingSubjects=array();
    private $department;

    public function getTeachingSubjects()
    {
        return $this->teachingSubjects;
    }

    public function setTeachingSubjects($param)
    {
        array_push($this->teachingSubjects,$param);
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($param)
    {
        $this->department = $param;
    }
}





?>