<?php
$con = new mysqli("localhost","root","","bootstrapcrud");

if(!$con){
    die('Connection Failed'. mysqli_error($con));
}


?>