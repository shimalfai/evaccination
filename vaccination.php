<?php
include('include/header.php');
?>

<body>
      <form action="insert.php" method="POST">
        <h2>Enter child records</h2>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
       </form>
</body>