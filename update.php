<?php
include('conn.php');
if(isset($_POST['updateid'])){
   echo  $unique = $_POST['updateid'];exit;

    $sql = "select * from `crud` where id=$unique";
    $result=mysqli_query($con,$sql);

    $response = array();
    while($row = mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);
}
else{
    $response['status'] = 200;
    $response['message'] = "Invalid";
}
?>