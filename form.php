<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/decoration.css">

</head>
<body>
<!--<div class="log"><p>Have an account ?  <a href="logform1.php"><button class="btn btn-success">log in here</button></a></p></div>-->
<div class="arr">
    <br><br>
    <h3>Teachers Portal</h3>
    <p>sign up to access students information
    </p>

    <br>


<form action="signupprocess.php" method="get" >
    <input required type="text" name="name" placeholder="Name" class="sign" ><br><br>
    <input required type="text" name="name2" placeholder="Username" class="sign" ><br><br>
    <input required type="email" name="email" placeholder="Email" class="sign"><br><br>
    <input required type="number" name="number" placeholder="Number" class="sign"><br><br>
    <input required type="password" name="password" placeholder="Password" class="sign"><br><br>
    <input type="submit" name="btnsave" value="Sign Up" class="sign sign2">
 <a href="logform1.php"><button class="btn btn-success btn1">log in</button></a>


</form>
    By signing up, you agree to our Terms,<br>
        Data Policy and Cookies Policy.
</div>
<br>



</body>
</html>