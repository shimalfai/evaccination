<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Add New child</title>
</head>

<body>
  <h2 style="text-align: center";>Add Child Details</h2>
  <form name="addnewchild" method="post" action="newchild.php">
    <div class="registration">
      <p>Please fill this form to add child details.</p>
      <hr>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="name" id="name" required>
      <br>
      <label for="gender"><b>Gender</b></label><br>
        <label for="Male">Male</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="Female">
      <br><br>
      <label for="dob"><b>DOB</b></label>
      <input type="date" placeholder="Enter DOB" name="dob" id="dob" required><br>
      <br>
      <label for="nid"><b>NID</b></label>
      <input type="text" placeholder="Enter ID number" name="nid" id="nid" required>
      <br>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter address" name="address" id="address" required>
      <br>
     
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</body>
</html>
