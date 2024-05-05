<?php


$conn = new mysqli('localhost', 'root', '', 'vaccination');
// save the form data to db
$NID = htmlspecialchars($_POST['nid']);
$fullName = htmlspecialchars($_POST['fname']);
$Address = htmlspecialchars($_POST['address']);
$Mobile = htmlspecialchars($_POST['mobile']);
$Email = htmlspecialchars($_POST['email']);
$Password = htmlspecialchars($_POST['psw']);

$query = "SELECT * FROM parents WHERE nid='$NID'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // User already exists, redirect back to registration form with an error message
  echo "<script>alert('User already exists');
  window.location.href='login.php';
  </script>";
  exit;
} else {
  // Insert new user into the database
  $insert_query = "INSERT INTO parents (nid, fname, address, mobile, email, psw) VALUES ('$NID','$fullName','$Address', '$Mobile','$Email','$Password')";
  if ($conn->query($insert_query) === TRUE) {
    // Registration successful, redirect to a success page
    echo "<script>alert('User created successfully, you may now log in');
            window.location.href='login.php';
            </script>";
    exit;
  } else {
    // If there's an error in inserting user data, handle it accordingly
    echo "Error: " . $insert_query . "<br>" . $conn->error;
  }
}

$conn->close();
