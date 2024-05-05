<?php
include('connects.php');
?>

<?php
if (isset($_GET['child_id'])) {
  $id = $_GET['child_id'];
$query = "SELECT * FROM children WHERE child_id= '$id'";


if (isset($_POST['Update'])) {
  $Name = $_POST['Name'];
  $NID = $_POST['NID'];
  $DOB = $_POST['DOB'];
  $Address = $_POST['Address'];

  $query = "UPDATE children SET Name = '$Name', NID = '$NID', DOB = '$DOB', Address = '$Address' where child_id='$id'";
  $result = $mysqli->query($query);
  if ($result) {
    echo "<script>alert('Record Updated Successfully');
  window.location.href='dashboard.php';
  </script>";
  exit;
  } else {
    die("Update Failed");
  }
}
}


?>