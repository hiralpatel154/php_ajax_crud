<?php
include('conn.php');
extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['emailsend']) && 
isset($_POST['phonesend']) && isset($_POST['coursesend'])){
    $sql = "INSERT into `crud` (name, email, phone, course) 
    values ('$namesend','$emailsend','$phonesend','$coursesend')";

    $result = mysqli_query($con, $sql);


}
?>