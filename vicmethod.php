<?php
session_start();
if (isset($_POST["btnsave"]))
{
    if ((!empty($_POST['email']))and(!empty($_POST['password']))) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conn = mysqli_connect("localhost", "root", "", "sort");
//
//        $select = "SELECT `id`, `full name`, `username`, `email`, `mobile number`, `password` FROM `information` WHERE password='$password' and (username='$usernameOrEmail'
//or email='$usernameOrEmail')";
        $select="SELECT `id`, `full name`, `username`, `email`, `mobile number`, `password` FROM 'information' WHERE email='$email' and (password='$password)'";

        $query = mysqli_query($conn, $select);
        $_SESSION["error"] =mysqli_error($select);
        header("location:logform.php");

        $rows = mysqli_num_rows($query);
        if ($rows >= 1) {
            $_SESSION["email"] = "$email";
            header("location:table.php");
        } else {
            header("location:logform.php");
            $_SESSION["error"] = "Wrong username or password <br/><span style='color: #000000'><nobr>Forgot password?
/            <a href='resetPassword.php'>Reset password</a></nobr></span>";
        }

    }else
    {
        header("location:logform.php");
        $_SESSION["error"] = "Empty email or username";
    }
}
?>