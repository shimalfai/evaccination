<?php
include('connects.php');
include_once('functions.php');

session_start();
if (!isset($_SESSION['fname'])) {
    header('location:login.php');
}

$parents_id = $_SESSION['parents_id'];
$get_user_informaion_sql = "SELECT * FROM parents WHERE id = '" . $parents_id . "'";
$logged_in_user = getFirstRow($get_user_informaion_sql, $mysqli);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-card {
      width: 400px;
      margin: 100px auto;
      text-align: center;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      height: 50vh;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
      object-fit: cover;
    }

    .profile-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-description {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-card">
      <img src="imges/profile.png" alt="Profile Picture" class="profile-img">
      <div class="profile-name"><?php echo $logged_in_user['fname']; ?></div>
      <div class="profile-description">
        <b>NID:</b> <?php echo $logged_in_user['NID']; ?> <br>
        <b>Mobile:</b> <?php echo $logged_in_user['mobile']; ?> <br>
        <b>Address:</b> <?php echo $logged_in_user['Address']; ?></p>
      </div>
      <div class="social-links">
        <a href="#" class="btn btn-primary">Twitter (X)</a>
        <a href="#" class="btn btn-primary">Facebook</a>
      </div>
    </div>
  </div>
</body>
</html>