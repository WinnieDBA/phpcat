
<?php
session_start();
require_once ('Connect.php');
$connect = mysqli_connect("localhost","root","","sort");
if (isset($_POST)& !empty($_GET)){
    $username = $_GET['username'];
    $password = $_GET['password'];

//    echo $name. $email . $number;
//    $sql = "SELECT Username FROM `CatDetails` WHERE Email ='$username' ";
    $sql ="SELECT  username FROM `information` WHERE username='$username'";
    $result =mysqli_query($connect,$sql);
    $count =mysqli_num_rows ($result);
//    $sql = $mysqli->query("SELECT * FROM users WHERE email='$email'");
//    $sql= "SELECT jina FROM details WHERE jina='$name'";

    if($count == 1){
//
        $sql2="SELECT  password FROM `information` WHERE password='$password'";
        $result2 =mysqli_query($connect,$sql2);
        $count2 =mysqli_num_rows ($result2);
        if($count2==1){

//            echo "Welcome ". $username;
            header("location:table.php");
        }
//        else{
////            echo "Invalid Username";
////            header("location:form.php");
//
//        }
    }else{
        $_SESSION['error'] ="Invalid password";
//        echo "Invalid  Password ";
//        header("location:form.php");
        header("location:logform1.php");
    }
}else
{
    $_SESSION['error'] ="";
}


?>
