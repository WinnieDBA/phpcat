<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/25/2018
 * Time: 9:04 PM
 */
session_start();

if (isset($_GET['btnsave'])){
    $exist = "";
    $connect = mysqli_connect("localhost","root","","sort");
    if (!$connect){
        echo "connection failed";
    }else{
        $name=$_GET['name'];
        $name2=$_GET['name2'];

        $email =$_GET['email'];
        $number=$_GET['number'];
        $password=$_GET['password'];
        $select ="SELECT  email FROM `information` WHERE email='$email'";

        $query = mysqli_query($connect,$select);


        $rows = mysqli_num_rows($query);
        if ($rows>0){

//            echo "connected successfully";
//            header("location:logform1.php");
            $exist = "The account already exists";
            header("location:form.php");

            exit();







        }else{
            $insert="INSERT INTO information (`id`, `name`, `username`, `email`, `number`, `password`) VALUES (null ,'$name','$name2','$email','$number','$password')";
            $insertQuery = mysqli_query($connect,$insert);
//            echo "failed";
            header("location:logform1.php");
        }



    }


}
?>

