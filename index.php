<?php
    class User {
        // properties
        protected $username ;
        protected $email;
        public $role = 'member';

        // the Constructor methode:
        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }


        public function __destruct() {
            echo "the user $this->username has been deleted <br />";
        }

        public function __clone() {
            $this->username = $this->username." (cloned)";
        }

        // methodes:
        public function addFriend(){
            return $this->username." added a new friend";
        }

        public function sendMessage(){
            return "$this->email sent an email";
        }


        // getters
        public function getEmail(){
            return $this->email;
        }

        // setters
        public function setEmail($email){
            if(strpos($email, '@') > -1){
                $this->email = $email;
            }
        }
    }

    class AdminUser extends User {
        private $level;
        public $role = 'admin';

        public function __construct($username,$email,$level){
            parent::__construct($username,$email);
            $this->level = $level;
        }

        public function getLevel(){
            return $this->level;
        }

        public function setLevel($level){
            $this->level = $level;
        }

        public function sendMessage(){
            return "$this->email, $this->role sent an email";
        }
    }

    // $user1 = new User();
    // $user2 = new User();
    $user1 = new User('Rahiche Messaoud','someEmail@gmail.com');
    echo $user1->sendMessage().'<br>';
    $user3 = new AdminUser('Houssame', 'adminEmail@gmail.com',3);
    echo $user3->getEmail() . ' level : '. $user3->getLevel() .'<br>';
    echo $user3->sendMessage().'<br>';

    // clone objects:
    $userClone = clone $user3;

    // delete the reference to an object from a variable
    // unset($user1);


    // echo $user1->email."<br />";
    // echo $user1->addFriend()."<br />";
    
    // to get class' properties:
    // print_r(get_class_vars('User'));
    // echo '<br />';
    // print_r(get_class_methods('User'));

    // changing class' properties values:
    // methode 1:
    // $user1->username = "<br />Rahiche Houssame";
    // echo $user1->username;

    // methode2: Constructor methode

    // access modifiers:
        // in php called -> visibility modifiers : private public ..etc
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP Tuts</title>
</head>
<body>
    
</body>
</html>