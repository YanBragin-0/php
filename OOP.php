<?php
    abstract class User{

        public function __construct($name,$email) {
            $this->Name = $name; $this->Email  = $email;
        }
        abstract public function getRole();

        public function getName(){
            return $this-> Name;
        }
        public function setName($str){
            $this->Name = $str;
        }
        public function getEmail(){
            return $this->Email;
        }
        public function setEmail($str){
            $this->Email = $str;
        }


        private $Name;
        private $Email;
    }

    class Student extends User{
        
        public function getRole():string
        {
            return "Student";
        }
        public function getGroup(){
            return $this-> group;
        }
        public function setGroup($str){
            $this->group = $str;
        }


        private $group;
    }
    class Teacher extends User{

        public function getRole():string
        {
            return "Teacher";
        }
        public function getSubject(){
            return $this-> subject;
        }
        public function setSubject($str){
            $this->subject = $str;
        }
        
        private $subject;
    }



    $student = new Student("Ivan","123@gmail.com");
    $teacher = new Teacher("Daniyl","234@gmail.com");
    $student->setGroup("CS-21");
    $teacher->setSubject("Math");
    print("Ім'я студента: {$student->getName()}".PHP_EOL);
    print("Email: {$student->getEmail()}".PHP_EOL);
    print("Роль: {$student->getRole()}".PHP_EOL);
    print("Група: {$student->getGroup()}".PHP_EOL);

    print("Ім'я викладача: {$teacher->getName()}".PHP_EOL);
    print("Email: {$teacher->getEmail()}".PHP_EOL);
    print("Роль: {$teacher->getRole()}".PHP_EOL);
    print("Предмет: {$teacher->getSubject()}".PHP_EOL);
?>
