<?php
    class Person{
        private $name;
        private $gender;
        private $dob;
        private $phone;
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function setGender($gender){
            $this->gender=$gender;
        }
        public function getGender(){
            return $this->gender;
        }
        public function setDoB($dob){
            $this->dob=$dob;
        }
        public function getDoB(){
            return $this->dob;
        }
        public function setPhone($phone){
            $this->phone=$phone;
        }
        public function getPhone(){
            return $this->phone;
        }
    }
?>