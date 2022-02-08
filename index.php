<?php
    class User {
        // properties
        private $username ;
        private $email;

        // the Constructor methode:
        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        // methodes:
        public function addFriend(){
            return $this->username." added a new friend";
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
    }

    // $user1 = new User();
    // $user2 = new User();
    $user1 = new User('Rahiche Messaoud','someEmail@gmail.com');
    $user3 = new AdminUser('Houssame', 'adminEmail@gmail.com',3);
    echo $user3->getEmail() . ' level : '. $user3->getLevel() .'<br>';

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