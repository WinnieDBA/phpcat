<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/decoration.css">
</head>
<body><br><br>
<h1>Update Students Details Here</h1><br><br>
<hr>
<a href="table.php"><button class="btn btn-primary">Cancel</button></a><br><br>
<form action="updateprocess.php" method="post">
    <?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 10/23/2018
     * Time: 10:32 AM
     */
    $connected= mysqli_connect("localhost","root","","sort");
    $id=$_GET['x'];
    $fetch = mysqli_query($connected,"select * from information where id=$id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);

    ?>
    <input type="text" name="name" value="<?php echo $name;?>">
    <input type="text" name="name" value="<?php echo $username;?>">
    <input type="email" name="email" value="<?php echo $email;?>">
    <input type="number" name="number" value="<?php echo $number;?>">
    <input type="password" name="password" value="<?php echo $password;?>">
    <input type="number" name="id" value="<?php echo $id;?>"hidden>
    <input type="submit" name="btnsave" value="update">

</form>

</body>
</html>