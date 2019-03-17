


<?php


abstract class Person
{
    private $fname;  //firstname
    private $lname;  //lastname
    private $ybirth;  //Year of birth
    private $age;

    public function getFname()
    {
        return $this->fname;
    }

    public function setFname($param)
    {
        $this->fname = $param;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function setLname($param)
    {
        $this->lname = $param;
    }

    public function getYbirth()
    {
        return $this->ybirth;
    }

    public function setYbirth($param)
    {
        $this->ybirth = $param;
    }

    public function getAge($year)
    {
        $date = "$year";
        if(version_compare(PHP_VERSION, '5.3.0') > 0){
            $by = new DateTime($date);
            $now = new DateTime();
            return $now->diff($by)->y;
        }
        $difference = time() - strtotime($date);
        return floor($difference) / 31556926;
    }
    public function setAge($param)
    {
        $this->age = $param;
    }
}

?>