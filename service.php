<!doctype html>
<html lang="en">
<?php include "layouts/header.php";
include "serviceb.php";
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- <link rel="stylesheet" href="./style.scss"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      /* background-color: aliceblue; */
      background-color:#D3D4D9;
      padding: 0;
      margin: 0;
    }

    /* fgffgd */
    .navbar-brand {
      font-weight: bold;
      font-size: 24px;

    }

    .navbar-toggler-icon {
      background-color: #343a40;

    }

    .nav-link.active:hover {
      color: blue !important;
      /* Change the color to your desired hover color */
      transition: color 0.3s ease;
      /* Add a smooth transition effect */
    }

    .nav-link:hover {
      font-size: 110%;
      /* You can adjust the size as needed */
      transition: font-size 0.2s;
      /* Add a smooth transition effect */
    }

    .divclass1 {
      margin-left: 90px;
    }

    .btn-primary {
      background-color: #343a40;
      border: none;
    }

    .btn-primary:hover {
      background-color: #212529;
    }


    .service1 {
      margin-left: 90px;
      margin-top: 50px;
    }

    .card {
      margin-top: 15px;
      /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); */
    }

    .rating {
      margin-top: 15px;
      margin-left: 90px;
    }

    bg-image {

      filter: blur(8px);
      -webkit-filter: blur(8px);

    }

    .checked {
      color: orange;
    }

    .card-text {
      color: #6c757d;
    }

    .bg-image {
      /* The image used */
      /* background-image: url("images/hh.jpg"); */
      background-color: aliceblue;
      /* Full height */
      height: 100%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .service1 {
      /* text-align: center; */
      margin-top: 40px;
      margin-left: 35%;
    }

    .service1 h1 {
      font-size: 36px;
      font-weight: bold;
      color: #343a40;
    }

    .service1 a {
      font-size: 18px;
      color: #343a40;
      text-decoration: none;
    }

    .service1 a:hover {
      text-decoration: underline;
    }

    .service2 {
      margin-left: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      /* margin: 10px; */
    }

    .card-body1 {
      border-radius: 26px;
      background-color:#DEDFE4;
    }

    .card-body {
      padding: 20px;
      background-color:#DEDFE4;
    }

    .card-title1 {
      font-weight: bold;
      font-size: 16px;
      margin-top: 20px;
      ;
      background-color:#DEDFE4;
      margin-bottom: 40px;
      margin-left: auto;
    }

    .service {

      margin-left: 7%;
    }

    .service h1 {
      font-size: 50px;
      font-weight: bold;
      color: #343a40;
    }

    .service a {
      font-size: 18px;
      color: #343a40;
      text-decoration: none;
    }

    .service a:hover {
      text-decoration: underline;
    }

    .nav-link {
      color: #343a40 !important;
      font-weight: bold;
    }
  </style>
</head>

<body class="bg-image">
  <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <b>Students Project</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      </div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Service</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
  <!-- <button class="btn btn-outline-success" type="submit">Submit</button>
      </form>
    </div> -->
  <!-- </nav> -->
  <br>
  <div class="service">
    <h1>All Services</h1>
  </div>
  <div class="divclass1">
    <div class="row">
      <?php while ($a = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card" style="width: 25rem;">
          <img src="event_image/<?=$a["image"]?>" class="card-img-top" alt="" style="height: 400px; width: 400px;">
          <div class="card-body">
            <h5 class="card-title"><?=$a["name"]?></h5>
            <p class="card-text"><?=$a["description"]?></p>
            <a href="addevent_form.php" class="btn btn-primary" 
                                    class="btn btn-danger"  title="Change Team Status"
                                  onclick="window.open('participate_form.php?id=<?=$a['id']?>', 'newwindow', 'width=500,height=500'); return false;"><i
                                    class='fa fa-gg-circle' aria-hidden='true'></i></a>
                                
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="service1">
      <h1>What Our Students Say ?</h1>
      <a> Here What our Clients Say about us </a>
    </div>
    <div class="service2">
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card" style="width: 35rem; border:aliceblue;">
            <div class="card-body">
              <!-- <h2>Star Rating</h2> -->
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <h5 class="card-title">Kabaddi</h5>
              <p class="card-text">Giving feedback in kabaddi is crucial for shaping players' performance and development. When providing feedback, be specific about areas needing improvement, such as raiding skills, defense tactics, fitness, or teamwork. Keep feedback positive and constructive, even when addressing weaknesses. Use examples and demonstrations to reinforce feedback. Regular feedback sessions are essential for keeping players updated on their progress. 
              </p>

              <div class="card mb-12" style="max-width:250px; border: hidden;">
                <div class="row g-0">

                  <div class="col-md-4">
                    <img src="images/hh.jpg" class="img-fluid border-radius"
                      style="border-radius:100%; align-items: center;  height: 60PX; width: 70PX;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body1">
                      <div class="card-title1"> <b>AISHWARYA SINGH </b></div>
                      <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" style="width: 35rem; border:aliceblue;">
            <div class="card-body">
              <!-- <h2>Star Rating</h2> -->
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <h5 class="card-title">Cricket</h5>
              <p class="card-text">
To provide effective feedback in cricket, it's essential to be specific, constructive, and positive. Target particular areas such as batting technique, bowling accuracy, or fielding skills, and offer practical suggestions for improvement. It's crucial to maintain a positive and encouraging tone, focusing on players' strengths while addressing areas for development . Delivering feedback in a private setting ensures that players are more receptive and avoids undermining their confidence in public. 
              </p>
              <div class="card mb-12" style="max-width:250px; border: hidden;">
                <div class="row g-0">

                  <div class="col-md-4">
                    <img src="images/hh.jpg" class="img-fluid border-radius"
                      style="border-radius:100%; align-items: center;  height: 60PX; width: 70PX;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body1">
                      <div class="card-title1"> <b>Somya Singh </b></div>
                      <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" style="width: 35rem; border:aliceblue;">
            <div class="card-body">
              <!-- <h2>Star Rating</h2> -->
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <h5 class="card-title">Football</h5>
              <p class="card-text">
Effective feedback in football involves targeting specific areas such as passing, dribbling, or defensive positioning and providing constructive suggestions for improvement. It's crucial to maintain a positive and encouraging tone, acknowledging players' strengths while addressing areas that need development. Delivering feedback in a private setting preserves players' confidence and allows for more focused discussions

              </p>
              <div class="card mb-12" style="max-width:250px; border: hidden;">
                <div class="row g-0">

                  <div class="col-md-4">
                    <img src="images/hh.jpg" class="img-fluid border-radius"
                      style="border-radius:100%; align-items: center;  height: 60PX; width: 70PX;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body1">
                      <div class="card-title1"> <b>kajal Yadav</b></div>
                      <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="width: 35rem; border:aliceblue;">
            <div class="card-body">
              <!-- <h2>Star Rating</h2> -->
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <h5 class="card-title">Hockey</h5>
              <p class="card-text">
Feedback in hockey follows a similar framework to other sports. It begins with specific observation, honing in on aspects like passing accuracy, shooting technique, or defensive positioning. Constructive criticism plays a key role, offering actionable steps for improvement, whether it's refining skills or enhancing teamwork.
              </p>
              <div class="card mb-12" style="max-width:250px; border: hidden;">
                <div class="row g-0">

                  <div class="col-md-4">
                    <img src="images/hh.jpg" class="img-fluid border-radius"
                      style="border-radius:100%; align-items: center;  height: 60PX; width: 70PX;">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body1">
                      <div class="card-title1"> <b>Rohit Singh</b></div>
                      <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br>
</body>


</html>
<?php include("layouts/footer.php"); ?>