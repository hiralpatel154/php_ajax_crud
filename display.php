<?php
include('conn.php');
if(isset($_POST['displaySend'])){
    $table = '<table class="table">
    <thead class="table-dark">
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Course</th>
      <th>Operations</th>
      </tr>
    </thead>';
  $sql = "SELECT * from `crud`";
  $result=mysqli_query($con,$sql);

  $number = 1;
  while($row=mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $course = $row['course'];
    $table.='<tr>
        <td>'.$number.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$course.'</td>
        <td> <button class="btn btn-dark" onclick="GetDetails('.$id.')"> Update </button >
            <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Delete</button>
</td>
    </tr>' ;
    $number++;
  
  }
  $table.='</table>';

  echo $table;

}

?>