<?php
    if(isset($_POST['submit'])){
        // do this
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Course Project</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" methode="POST">
        <div>
            <input type="text" name='username' placeholder="Username">
        </div>
        <div>
            <input type="email" name='email' placeholder="email">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>