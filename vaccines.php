
<?php

$con = mysqli_connect('localhost', 'root', '', 'vaccination');


// insert the form data
$Name = htmlspecialchars($_POST['Name']) ;


// database insert SQL code
$sql = "INSERT INTO vaccines (`Name`) VALUES ('$Name')";


// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
  // echo "<script>alert('Data Entered')</script>";
  header('location:admin.php');
}
?>