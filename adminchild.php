<?php
include_once('connects.php');
include_once('functions.php');


session_start();

$id = $_GET['id'];
$get_user_informaion_sql = "SELECT * FROM children WHERE child_id = '" . $child_id . "'";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="parents.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Vaccination Records</title>
</head>

<body>
  <!-- This card display child details -->
  <div class="container-fluid">
    <h2 style="text-align: center;">Child Info</h2>
    <div class="card bg-light">
      <div class="card-body text-left">
        <div class="card">
          <div class="card-body">
            <table class="table bg-light table-bordered table-responsive">
              <?php
              if (isset($_GET['id'])) {
                $child_id = $_GET['id'];
                $child_id = "SELECT * FROM children where child_id = '" . $id . "'";
                $result = $mysqli->query($child_id);
              }

              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
              ?>
                  <td><b>child id: </b><?php echo $rows['child_id']; ?></td>
                  <td><b>Name:</b> <?php echo $rows['Name']; ?></td><br>
                  <td><b>Gender: </b><?php echo $rows["Gender"]; ?></td>
                  <td><b>DOB: </b><?php echo $rows["DOB"]; ?></td>
                  <td><b>Address: </b><?php echo $rows['Address']; ?></td>
                  <td><b> Age: </b><?php
                                    $dob = $rows['DOB'];
                                    $dob = new DateTime($dob);
                                    $now = new DateTime();

                                    $diff = $now->diff($dob);

                                    echo   $diff->y . ' Years, ' . $diff->m . ' Months, ' . $diff->d . ' Days';

                                    ?>
                  </td>
          </div>
        </div>
        </table>
        <div class="card">
          <h3 style="text-align: center;" class="mt-3">Update Immunization Records</h3>
          <div class="card-body">
            <form action="immunization.php" method="POST">
              <div class="form-group">
                <p><b>Assign Vaccines</b></p>
                <hr>
                <input type="hidden" name="child_id" value="<?php echo $rows['child_id']; ?>">
                <div class="registration">
                  <form method="post" action="immunization.php">
                    <b>Name:</b> <input type="text" name="Name" value="">
                    <b>Date: </b> <input type="date" name="date" value="Date">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
                <br>
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tr class="bg-dark text-white">
                      <th>child_id</th>
                      <th>Vaccine Name</th>
                      <th>Administered On</th>

                    </tr>
                    <?php

                    $sql = "SELECT * FROM child_vaccines where child_id = '" . $id . "'";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                      while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr>
                          <td><?php echo $rows['child_id']; ?></td>
                          <td><?php echo $rows['Name']; ?></td>
                          <td><?php echo $rows['Date']; ?></td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </table>
                  <hr>
                </div>
            </form>
          </div>
        </div>

    <?php
                }
              }




    ?>
    </p>
      </div>
    </div>
  </div>
  </div>

</body>


</html>