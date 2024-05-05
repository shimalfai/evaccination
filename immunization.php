<?php
include('functions.php');
 ?>



<?php
// insert the form data

$con = mysqli_connect("localhost", "root", "", "vaccination");


if (isset($_POST['submit'])) {
  $date = htmlspecialchars($_POST['date']);
  $child_id = htmlspecialchars($_POST['child_id']);
  $Name = htmlspecialchars($_POST['Name']) ;



  $sql = "INSERT INTO `child_vaccines` (date,child_id,Name) VALUES ('$date','$child_id', '$Name')";
  $result = mysqli_query($con,$sql);

  if ($result)
  {
    echo "Updated Successfully";
  }
}

$con->close();

?>