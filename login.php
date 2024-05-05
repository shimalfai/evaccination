<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="validation.php" method="POST"><br>
        <h1>Welcome to e-Vaccination</h1>
        <div style="text-align:center">
        <?php 
        echo $title;
        ?>
        </div>
        <div class="login">
            <h2>Log in</h2>
            <p><b>Please Login to continue! Don't have an account? <a href="register.php">Register</a>.</p></b>
            <hr>
            <label for="fname"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="fname" id="fname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            <button type="submit" class="btn btn-primary">login</button>
            <br>
            <hr>
        </div>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>