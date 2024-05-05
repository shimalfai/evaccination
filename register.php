<?php include("include/header.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<br>

<body>

<!-- // Parent registration form -->
<form method="post" action="insert.php">
        <div class="registration">
            <h1>Parent Registration</h1>
            <p><b>Please fill this form to create an account.</b></p>
            <hr>
            <label for="nid"><b>NID</b></label>
            <input type="text" placeholder="Enter ID number" name="nid" id="nid" required>

            <label for="fname"><b>Full Name</b></label>
            <input type="text" placeholder="Enter Full Name" name="fname" id="fname" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" id="address" required>

            <label for="mobile"><b>Mobile</b></label>
            <input type="text" placeholder="Enter Mobile number" name="mobile" id="mobile" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>
<br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</body>

</html> 