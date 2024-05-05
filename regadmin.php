<?php

$conn = new mysqli('localhost', 'root', '', 'vaccination');

// save the form data to db
$NID = $_POST['nid'];
$fullName = $_POST['name'];
$Designation = $_POST['designation'];
$Password = $_POST['Pass'];

$query = "SELECT * FROM admin WHERE nid='$NID'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // User already exists, redirect back to registration form with an error message
  echo "<script>alert('User already exists');
  window.location.href='adminlogin.php';
  </script>";
  exit;
} else {
  // Insert new user into the database
  $insert_query = "INSERT INTO admin (nid, name, designation, Pass) VALUES ('$NID','$fullName','$Designation','$Password')";
  if ($conn->query($insert_query) === TRUE) {
    // Registration successful, redirect to a success page
    echo "<script>alert('User created successfully, you may now log in');
            window.location.href='adminlogin.php';
            </script>";
    exit;
  } else {
    // If there's an error in inserting user data, handle it accordingly
    echo "Error: " . $insert_query . "<br>" . $conn->error;
  }
}

$conn->close();




// // database insert SQL code
// $sql = "INSERT INTO admin (nid, name, designation, Pass) VALUES ('$NID','$fullName','$Designation','$Password')";

// if ($conn->query($sql) === TRUE) {
//   // echo "<h1>User created successfully, you may now log in</h1>";
//   // header ("location: index.php");


//   // Display alert box
//   echo "<script>alert('User created successfully, you may now log in');
//   window.location.href='adminlogin.php';
//   </script>";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();


?>