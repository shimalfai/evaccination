


<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

session_start();
if (!isset($_SESSION['fname'])) {
  header('location:parents.php');
}

include_once('functions.php');

$conn = mysqli_connect('localhost', 'root', '', 'vaccination');

$parents_id = $_SESSION['parents_id'];
$get_user_informaion_sql = "SELECT * FROM parents WHERE id = '" . $parents_id . "'";
$logged_in_user = getFirstRow($get_user_informaion_sql, $conn);

// insert the form data
$Name = htmlspecialchars($_POST['name']);
$Gender = htmlspecialchars($_POST['gender']);
$NID = htmlspecialchars($_POST['nid']);
$DOB = htmlspecialchars($_POST['dob']);
$Address = htmlspecialchars($_POST['address']);
$parents_id = htmlspecialchars($logged_in_user['id']);

// database insert SQL code
$query = "SELECT * FROM children WHERE nid='$NID'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // User already exists, redirect back to registration form with an error message
  echo "<script>alert('User already exists');
  window.location.href='addnewchild.php';
  </script>";
  exit;
} else {
  // Insert new user into the database
  $insert_query = "INSERT INTO children (`name`, `gender`,`nid`, `dob`, `address`, `parents_id`) VALUES ('$Name', '$Gender','$NID', '$DOB', '$Address', '$parents_id')";
  if ($conn->query($insert_query) === TRUE) {
    // Registration successful, redirect to a success page
    echo "<script>alert('Child details added successfully');
            window.location.href='dashboard.php';
            </script>";
    exit;
  } else {
    // If there's an error in inserting user data, handle it accordingly
    echo "Error: " . $insert_query . "<br>" . $conn->error;
  }
}

$conn->close();
