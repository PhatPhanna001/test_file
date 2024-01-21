<?php
class Student {
    // Properties (fields)
    public $id;
    public $name;
    public $gender;
    public $dob;
    public $phone;
    // Constructor
    public function __construct($id, $name, $gender, $dob, $phone) {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->phone = $phone;
    }
    // Getter methods
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getDob() {
        return $this->dob;
    }
    public function getPhone() {
        return $this->phone;
    }
}
// Dispay :
$student = new Student(02, "Phat_Phanna", "Male", "2024-01-13", "011-811-911");
$currentDate = date('Y-M-D-h-s');
// Accessing properties using getter methods
echo "Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $student->getId() . "<br>";
echo "Name&nbsp;&nbsp;: " . $student->getName() . "<br>";
echo "Gender: " . $student->getGender() . "<br>";
echo "DoB&nbsp;&nbsp;&nbsp;&nbsp;: " . $student->getDob() . "<br>";
echo "Phone&nbsp;&nbsp;: " . $student->getPhone() . "<br>";
echo "Today's : $currentDate";
// $timestamp = time(); $currentDate = gmdate('Y-m-d', $timestamp); 
// echo $currentDate;
?>
