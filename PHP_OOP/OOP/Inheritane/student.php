<?php
    require_once('Person.php');
    class student extends Person{
        private $score;
        public function setScore($score){
            $this->score=$score;
        }
        public function getScore(){
            return $this->score;
        }
    }
    $Person=new Student();
    $Person->setName('Phanna');
    $Person->setGender('Male');
    $Person->setDob('2024-01-13');
    $Person->setPhone('011-811-911');
    $Person->setScore('96');

    echo 'Name:'.$Person->getName().'<br/>';
    echo 'Gender:'.$Person->getGender().'<br/>';
    echo 'Dob:'.$Person->getDob().'<br/>';
    echo 'Phone:'.$Person->getPhone().'<br/>';
    echo 'Score:'.$Person->getScore().'<br/>';
?>