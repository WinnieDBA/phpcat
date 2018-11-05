
<?php
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
            header("location: studentstable.php");
        }
        else{
            echo "Invalid Username or Password ";
            header("location:studentslogin.php");
        }
    }else{
        echo "Invalid  Password or Username";
        header("location:studentslogin.php");
    }
}


?>