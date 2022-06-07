<?php
class Student{
    public $id;
    public $lastName;
    public $firstName;
    public $dob;
   public function speak(){
        echo "Hi";

    }
    public function fullName(){
        return $this->lastName." ".$this->firstName  ;
      }

    };
// $student1 = new student(1,"Ighot","Muhire","06/04/2005");
$student1 = new Student();
$student1->firstName = "Ighor";
echo $student1->firstName;
echo "<br/>";
$student1->speak();
$student1->lastName="Muhire";
echo $student1->lastName;
echo "<br/>";
echo $student1->fullName();
?>