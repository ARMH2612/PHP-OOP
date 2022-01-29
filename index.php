<?php
    class User {
        // properties
        public $username = 'houssame';
        public $email= 'houssame@gmail.com';

        // methodes:
        public function addFriend(){
            return $this->username." added a new friend";
        }
    }

    $user1 = new User();
    $user2 = new User();

    echo $user1->email."<br />";
    echo $user1->addFriend()."<br />";
    
    // to get class' properties:
    print_r(get_class_vars('User'));
    echo '<br />';
    print_r(get_class_methods('User'));

    // changing class' properties values:
    // methode 1:
    $user1->username = "<br />Rahiche Houssame";
    echo $user1->username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP OOP Tuts</title>
</head>
<body>
    
</body>
</html>