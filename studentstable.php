<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/decoration.css">


</head>
<body><br><br>
<!--<h1>User</h1>-->
<!--<a href="saveUser.php"><button class="btn btn-primary">Add User</button></a>-->
<p>The enrolled students in second term 2018 </p>
<!--<a href="home.php"><button class="btn btn-primary">Home</button></a>-->
<hr>
<table >
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Password</th>
<!--        <th>Delete</th>-->
<!--        <th>Update</th>-->
    </tr>
    <?php
    $connected = mysqli_connect("localhost","root","","sort");
    $fetch = mysqli_query($connected,"select * from information");
    while ($row = mysqli_fetch_assoc($fetch)) {
        extract($row);
        echo "<tr>
<td>$name</td>
<td>$username</td>
<td>$email</td>
<td>$number</td>
<td>$password</td>

</tr>";
    }

    ?>
</table>
<br>


</body>
</html>