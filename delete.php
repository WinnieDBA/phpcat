<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/22/2018
 * Time: 10:52 AM
 */
$connected = mysqli_connect("localhost","root","","sort");
if (isset($_GET['x'])){
    $id = $_GET['x'];
    mysqli_query($connected,"delete from information where id=$id");
    header("location:table.php");
}
?>