<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/23/2018
 * Time: 10:49 AM
 */
$connect = mysqli_connect("localhost","root","","sort");
if (isset($_POST['id'])){
    extract($_POST);
//    mysqli_query($connect,"UPDATE details SET jina ='$name',arafa ='$email',simu='$number' WHERE id=$id");
    mysqli_query($connect,"UPDATE `information` SET name='$name',username='$username',email='$email',number='$number',password='$password' WHERE id=$id");

//    header("location:showusers.php");
    header("location: table.php");
}
?>