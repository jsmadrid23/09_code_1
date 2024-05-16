<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cisco</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
      .poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
} 
      
      .merriweather-regular {
  font-family: "Merriweather", serif;
  font-weight: 400;
  font-style: normal;
}
      
      * {
    font-family: "Poetsen One", sans-serif;
    margin: 0;
    padding : 0;
    box-sizing: border-box;
          }
          .login-btn {
            background-color: #FFFF00;
            color: #FF0000;
            border: none;
            border-radius: 30px;
            padding: 12px 24px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #FF0000;
            color: #FFFF00;
        }
        .book-now {
          background-color: #FFFF00; 
          margin-right: 5px;
            color: #FF0000;
            border: none;
            border-radius: 15px;
            padding: 10px 15px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            
        }
        .book-now:hover {
            background-color: #FF0000;
            color: #FFFF00;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #eaddcf;">
  <div class="container-fluid">
  <a class="navbar-brand" href="main.php">
      <img src="cisco_logo.png" alt="Logo" width="120" height="75" class="d-inline-block align-text-top rounded">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="main.php" style="font-size: 20px;">Home</a>
        <a class="nav-link" href="#" style="font-size: 20px; margin-left: 20px;">Booking</a>
        <a class="nav-link" href="#" style="font-size: 20px; margin-left: 20px;">Routes</a>
        <a class="nav-link" href="#" style="font-size: 20px; margin-left: 20px;">Contact Us</a>
      </div>
    </div>
    <div class="me-5">
    <a href="login.php" class="login-btn ml-auto"> <i class="bi bi-person-circle me-2"></i>Login</a>
      </div>
  </div>
</nav>
<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tarlac.jpg" class="d-block w-100" alt="Tarlac" style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Monasterio de Tarlac</h5>
        <p>Catholic monastery on top of Mount Resurrection</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="manaoag-2.jpg" class="d-block w-100" alt="Manaoag" style="height: 500px; object-fit: cover; object-position: center -300px;">
      <div class="carousel-caption d-none d-md-block" >
        <h5>Garden in Manaoag Church</h5>
        <p>Where the miraculous image of Our Lady of the Rosary of Manaoag is enshrined</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="sanfabian-2.jpg" class="d-block w-100" alt="San Fabian" style="height: 500px; object-fit: cover; object-position: center -350px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>San Fabian Beach</h5>
        <p>Elevation in a beach resort in San Fabian</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="arayat-1.jpg" class="d-block w-100" alt="Urdaneta" style="height: 500px; object-fit: cover; object-position: center -475px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mount Arayat</h5>
        <p>An extinct volcano in the island of Luzon with no recorded historical eruption</p>
      </div>
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
<hr style="border-width: 5px; border-color: #FF0000;">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-4 ">
      <img src="cisco bus.jpg" class="rounded-circle d-block mx-auto"  style="width:500px; height: 450px; margin-top: 50px;">
    </div>
    <div class="col-8">
      <div class="container m-2 p-3 d-block mx-auto" style="background-color: #fef6e4; width: 90%; border-radius: 20px; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.7);">
      <h1 class="merriweather-regular text-danger"><center style="font-size: 55px;"> About Us</center></h1>
      <p class="poppins-regular fs-5" style="text-align: justify;">For passengers looking to go to different points in Northern Luzon, try the CISCO experience! CISCO Bus Co. plies routes to Pangasinan, Nueva Ecija, Tarlac and Zambales. Established in 2007, CISCO has built a name for itself as a reliable, convenient, affordable, and an accommodating bus company. It is a smaller bus company, but it ranks high up in terms of cleanliness, safety and efficiency. 
        CISCO staff is known to be the kindest and friendliest in the business!</p>
        <br>
        <p class="poppins-regular fs-5" style="text-align: justify;"> CISCO Bus Co. is a David in the Goliath transportation industry, which is why it puts premium in quality service at an affordable price. For locals going back to their homes, CISCO is a favourite! Passengers who have had the CISCO experience can attest to the smooth travel,
           accompanied by a warm and approachable crew. CISCO doesn’t just get you to your destination safely, but it does so with an impeccable work ethic unmatched in the industry.</p>
      </div>
    </div>
  </div>
</div>
<hr style="border-width: 5px; border-color: #FFFF00;">
<h1 class="mb-3 text-danger" style="font-size: 55px;"><center>Famous Bookings</center></h1>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-4">
    <div class="card">
  <img src="zambales.jpg" class="card-img-top" alt="Zambales" style="width: 415px; height:280px;">
  <div class="card-body">
    <h5 class="card-title poppins-regular">Zambales</h5>
    <p class="card-text poppins-regular">Escape to the idyllic shores of Zambales! Bask in the sun on pristine white sand beaches, swim in crystal-clear turquoise waters, and soak up the breathtaking coastal scenery. Book your convenient and affordable bus ride today and start your beachside bliss!</p>
    <a href="#" class="book-now mb-3">Book Now!</a>
</div>
      </div>
      </div>
      <div class="col-md-4">
    <div class="card">
  <img src="100islands.jpg" class="card-img-top" alt="Hundered Islands" style="width: 415px; height:280px;">
  <div class="card-body">
    <h5 class="card-title poppins-regular">Pangasinan</h5>
    <p class="card-text poppins-regular">Discover the magic of Hundred Islands National Park in Pangasinan. Explore crystal-clear waters, pristine beaches, and unique rock formations. Book your comfortable and affordable bus ride today and start your island adventure!</p>
    <a href="#" class="book-now">Book Now!</a>
</div>
      </div>
      </div>
      <div class="col-md-4">
    <div class="card">
  <img src="tarlac-1.jpg" class="card-img-top" alt="Tarlac" style="width: 415px; height:280px;">
  <div class="card-body">
    <h5 class="card-title poppins-regular">Tarlac</h5>
    <p class="card-text poppins-regular">Unveil the rich heritage of Tarlac at the majestic Monasterio de Tarlac. This centuries-old Augustinian monastery boasts stunning architecture, religious artifacts, and a peaceful atmosphere. Book your comfortable bus ride today and embark on a historical adventure!</p>
    <a href="#" class="book-now">Book Now!</a>
</div>
      </div>
      </div>
      </div>
</div>

        <footer class="pt-5 pb-4 " style="background-color: #eaddcf;">
          <div class="container text-left text-md-left">
            <div class="row text-left text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="mb-2 font-weight-bold text-danger">Cisco Bus Company</h5>
                <p class="poppins-regular">CISCO Bus Co. is your reliable and friendly transportation partner for exploring the wonders of Northern Luzon. 
                  Established in 2007, we've built a reputation for comfortable, affordable, and hassle-free bus travel.</p>

              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-2 font-weight-bold text-danger">Connect with Us</h5>
                <p class="poppins-regular">
                  <a href="" class="poppins-regular" style="color:inherit; text-decoration:none;"><i class="bi bi-facebook"></i> Facebook</a>
              </p>
                <p class="poppins-regular">
                  <a href="" class="poppins-regular" style="color:inherit; text-decoration:none;"><i class="bi bi-twitter-x"></i> Twitter</a>
              </p>
                <p>
                  <a href="" class="poppins-regular" style="color:inherit; text-decoration:none;"><i class="bi bi-instagram"></i> Instagram</a>
              </p class="poppins-regular">
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="mb-4 font-weight-bold text-warning"></h5>
              </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
              <div class="col-md-7 col-lg-8">
                <p>© 2024 CISCO Bus Co. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>