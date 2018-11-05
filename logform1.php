
<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/decoration.css">
</head>
<body>
<p></p>
<div>
<form action="log2.php" method="get" class="alignment">
<!--    <input required type="text" name="username" placeholder="Username"><br><br>-->
    <input type="text" name="username" placeholder="Username" required class="size"><br><br>
    <?php echo "<P>". $_SESSION['error'] ."</P>";?><input type="password" name="password" placeholder="Password" required class="size"><br><br>




<!--    <input required type="password" name="password" placeholder="Password"><br><br>-->


    <input type="submit" name="btnsave" value="log in" class="size"><br>
</form>
</div>

</body>
</html>