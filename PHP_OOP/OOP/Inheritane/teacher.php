<?php
    require_once('Person.php');
    class teacher extends Person{
        private $subject;
        function setSubject($subject){
            $this->subject=$subject;
        }
        function getSubject($subject){
            return $this->subject;
        }
    }
    $Teacher1 = new Teacher();
    $Person -> setName("Keo");
    $Person -> setGender("Male");
    $Person -> setDOB("2024-01-13");
    $Person -> setphone("01010101010");
    $Person -> setSubject("Khmer");
    echo 'Name:'.$Person->getName().'<br/>';
    echo 'Gender:'.$Person->getGender().'<br/>';
    echo 'DOB:'.$Person->getDOB().'<br/>';
    echo 'Phone:'.$Person->getPhone().'<br/>';
    echo 'Subject:'.$Person->getSubject().'<br/>';
?>