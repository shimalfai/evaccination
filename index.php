<?php
include("include/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="styles1.css">
  <title>Home</title>
</head>

<body>
  <div>
    <div id="fb-root">
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="zjgb97Gh"></script>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="zjgb97Gh"></script>
  </div>
  <div class="container-fluid bg-light">
    <h2 style="text-align: center;">INFORMATIONS</h2>
  </div>
  <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="height: 70vh;" src="slider/child.png" class="d-block w-100" alt="Child">
        </div>
        <div class="carousel-item">
          <img style="height: 70vh;" src="slider/sliderimg1.jpg" class="d-block w-100" alt="Antiviral">
        </div>
        <div class="carousel-item">
          <img style="height: 70vh;" src="slider/sliderimg4.png" class="d-block w-100" alt="baby">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <hr>
  <div class="container-fluid bg-light">
    <h2 style="text-align: center;">SERVICES</h2>
    <br>
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Child Vaccination</h3>
            <hr>
            <p class="card-text"><b>Required Documents</b><br>
            <ol>
              <li>Child NID or Birth Certificate</li>
              <li>Child under 5 years, present vaccine book</li>
              <li>If for optional vaccine, must bring the vaccine</li>
            </ol>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Growth Monitoring</h3>
            <hr>
            <p class="card-text">This service is provided to monitor the growth of children under the age of 5 years.</p>
            <p class="card-text"><b>Required Documents</b>
            <ol>
              <li>Vaccine book of the child</li>
            </ol>
            </p>
          </div>
        </div>
      </div>
    </div>
    <button type="button" style="float: inline-end; height:50px" class="btn btn-info"><a style="text-decoration: none;" href="services.php">More Services</a></button>
    <br>
    <br>
</body>
<br>
<?php include('include/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fbb67e98f4.js" crossorigin="anonymous"></script>

</html>