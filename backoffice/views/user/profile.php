<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="../../assets/css/profile.css">
<title>Profile</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"> <img src="../../assets/img/logo-ecovelo.png" alt="" > </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../frontofiice/views/page/apropos.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Event</a>
          </li> 
             <!-- Dropdown -->
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                 Service
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Location vélo</a>
                <a class="dropdown-item" href="#">velo en visite guidée</a>
              </div>
            </li>
  
          <li class="nav-item">
            <a class="nav-link" href="../../frontofiice/views/page/contact.html">Contact</a>
          </li> 
          <li class="nav-item">
            <a class="btn" href="../../controllers/userController.php?event=logout">
              lougout</a>
          </li> 
        </ul>
      </div>
    </nav>

  <div class="container my-4">
  <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=tunis%20lac1+()&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
      <a href='http://maps-generator.com/fr'>Maps-Generator.com/fr</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=696f7753ba41c09479ae2e7c86d1033c0d1608c4'></script>
  </div>
    

   
       
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 segment-one ">
            <h3>Ecovelo</h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.  asperiores eveniet reprehenderit optio? <br> 
              Accusantium non exercitationem ducimus ipsum!</p>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-tow p-3">
          <h3>Ecovelo</h3>
            <ul>
              <li><a href=""></a>Home</li>
              <li><a href=""></a>About</li>
              <li><a href=""></a>Event</li>
              <li><a href=""></a>Service</li>
              <li><a href=""></a>Contact</li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 segment-three p-3">
          <h2>Follow Us</h2>
          <p>social media frofile</p>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-linkedin-in"></i></a>

          <p class="my-2">Contact</p>
          <span style="font-weight:600">Phone :</span> <p>+216 71 456 784</p>
          <span style="font-weight:600">Email :</span> <p>Ecovelo@gmail.com</p>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12 segment-four p-3">
            <h2>our newsletter</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
               Tenetur accusamus et deleniti rerum labore doloremque iure reprehenderit saepe?
            </p>
            <form action="">
              <input type="email">  <input type="submit" value="subscribe">
            </form>
        </div>
      </div>
    </div>
  </div>
  <p class="footer-text">All right Reserved &copy;ecovelo</p>
</footer>
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>