<?php 
spl_autoload_register(function ($class_name) {

    include $class_name . '.php';

});



echo '<h2>Student</h2>';

$myStudent = new Students();

$myStudent->setFname('Jim');

$myStudent->setLname('Smith');

$myStudent->setYbirth('1999');

$myStudent->setCourses('PHP programming');

$myStudent->setCourses('Physics');




$coursesOfJim=$myStudent->getCourses();

echo 'Student '.$myStudent->getFname().' '.$myStudent->getLname().', born in '.$myStudent->getYbirth().' , '.$myStudent->getAge('1999').' years old.';

print_r($coursesOfJim);

//$from = new DateTime('1999-01-01');
//$to = new DateTime('today');
//echo $from->diff($to)->y;




echo '<h2>Teacher</h2>';

$aTeacher = new Teachers();

$aTeacher->setFname('Mike');

$aTeacher->setLname('Johnson');

$aTeacher->setYbirth('1976');

$aTeacher->setTeachingSubjects('PHP programming');

$aTeacher->setTeachingSubjects('Javascript programming');

$aTeacher->setDepartment('Engineering department');


$teachingSubjectOfMike=$aTeacher->getTeachingSubjects();

echo 'Teacher '.$aTeacher->getFname().' '.$aTeacher->getLname().', born in '.$aTeacher->getYbirth().' , '.$aTeacher->getDepartment().' , '.$aTeacher->getAge('1976').' years old.';

print_r($teachingSubjectOfMike);


echo '<h2>Staff members</h2>';

$aStaff = new Staff();

$aStaff->setFname('Ann');

$aStaff->setLname('Jones');

$aStaff->setYbirth('1981');

$aStaff->setVacancy('Cleaner');

echo 'Staff member '.$aStaff->getFname().' '.$aStaff->getLname().', born in '.$aStaff->getYbirth().' , '.$aStaff->getVacancy().' , '.$aStaff->getAge('1981').' years old.';


echo "<br><br>";
$bStaff = new Staff();

$bStaff->setFname('Simon');

$bStaff->setLname('Williams');

$bStaff->setYbirth('1974');

$bStaff->setVacancy('Caretaker');

echo 'Staff member '.$bStaff->getFname().' '.$bStaff->getLname().', born in '.$bStaff->getYbirth().' , '.$bStaff->getVacancy().' , '.$bStaff->getAge('1974').' years old.';
?>