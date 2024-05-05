<?php
include_once('connects.php');
include_once('functions.php');


session_start();
if (!isset($_SESSION['fname'])) {
  header('location:login.php');
}


$id = $_GET['id'];
$get_user_informaion_sql = "SELECT * FROM children WHERE child_id = '" . $child_id . "'";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="parents.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Details</title>
</head>

<body>
  <div class="container">
    <h2 style="text-align: center;">Details</h2>
    <a type="button" class="btn btn-light float-sm-start" href="dashboard.php">Back</a>
    <br>
    <div class="row row-cols-1 mt-3 mx-1 row-cols-md-2 g-4">
      <div class="card">
        <h5 class="card-header">Child Info</h5>
        <div class="card-body">
          <p class="card-text">
            <?php
            $sql = "SELECT * FROM children where child_id = '" . $id . "'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
              while ($rows = $result->fetch_assoc()) {
            ?>
          <div>
            <!-- <td><b> Child id: </b><?php echo $rows['child_id']; ?></td><br> -->
            <b> Name:</b> <?php echo $rows['Name']; ?><br>
            <hr>
            <b> DOB:</b> <?php echo $rows['DOB']; ?><br>
            <hr>
            <b> Gender: </b><?php echo $rows["Gender"]; ?>
            <hr>
            <b>Address: </b> <?php echo $rows['Address']; ?>
            <hr>
            <?php
                $dob = $rows['DOB'];
                $dob = new DateTime($dob);
                $now = new DateTime();
                $diff = $now->diff($dob);
                echo '<b>Age: </b>' . $diff->y . ' Years, ' . $diff->m . ' Months, ' . $diff->d . ' Days';
            ?>
          <?php } ?>
          </div>
          </p>
        </div>
      </div>
      <br>
      <div class="card">
        <h5 class="card-header">Mandatory Vaccines</h5>
        <div class="card-body">
          <p class="card-text">
          <div class="table-responsive rounded-3">
            <table class="table table-bordered">
              <tr class="bg-dark text-white">
                <th hidden>id</th>
                <th>Vaccine Name</th>
              </tr>
              <?php
              $sql = "SELECT * FROM vaccines";
              $result = $mysqli->query($sql);

              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
              ?>
                  <tr>
                    <td hidden><?php echo $rows['vaccine_id']; ?></td>
                    <td><?php echo $rows['Name']; ?></td>
                  </tr>
              <?php
                }
              }
              ?>
            </table>
          </div>
          </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="card">
      <h5 class="card-header">
        <figure>
          <blockquote class="blockquote">
            <h5>Immunization Records</h5>
          </blockquote>
          <figcaption class="blockquote-footer">
            Administered Vaccines & Date
          </figcaption>
        </figure>
      </h5>

      <div class="card-body">
        <p class="card-text">
          <?php
              $sql = "SELECT * FROM child_vaccines where child_id = '" . $id . "'";
              $result = $mysqli->query($sql);

              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
          ?>
              <!-- <td><?php echo $rows['child_id']; ?></td> -->
              <hr>
              <b>Vaccine: </b><?php echo $rows['Name']; ?>
              <br>
              <b>Administered On: </b><?php echo $rows['Date']; ?>
          <?php
                }
              } else {
                echo "No Data Yet!";
              }
          ?>
        </p>
      </div>
    </div>
  <?php
  }
  ?>
  </div>
</body>

</html>