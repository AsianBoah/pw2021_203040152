<?php
session_start();

      include("connection.php");
      include("functions.php");

      $user_data = check_login($con);

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <!-- my own CSS -->
      <link rel="stylesheet" type="text/css" href="materialize/css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Octavius Industries</title>
    </head>

    <body id="home" class="scrollspy"> 

      <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="indigo darken -2">
      <div class="nav-wrapper">
        <div class="container">
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo"><img src="materialize/img/logos/Octavius_industries_logo.png" width="100" height="auto"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#About">About Us</a></li>
          <li><a href="#clients">Clients</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#About">About Us</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="materialize/img/slider/1.jpg">
        <div class="caption left-align">
          <h3>Changing the World for the Better!</h3>
          <h5>Small tagline</h5>
        </div>    
      </li>
      <li>
        <img src="materialize/img/slider/2.jpg">
        <div class="caption right-align">
          <h3>Changing the World for the Better!</h3>
          <h5>Greatness from small beginnings</h5>
        </div>
      </li>
      <li>
        <img src="materialize/img/slider/3.jpg">
        <div class="caption center-align">
          <h3>Changing the World for the Better!</h3>
          <h5>Small tagline</h5>
        </div>    
      </li>
    </ul>
  </div>

  <!-- About Us -->
  <section id="about" class="about scrollspy" >
    <div class="container">
      <div class="row">
        <h3 class="center light">About Us</h3>
        <div class="col m6 light">
          <h5>Sic Parvis Magna</h5>
          <p>Here at Octavius Industries - we specializes on neuroprosthetics, which is a discipline related to neuroscience and biomedical engineering concerned with developing neural prostheses. This maybe the best option for limb replacement. As of July 2018, we're on the  verge of perfecting advanced prosthetic limb technology. We are hoping to provide replacement limbs that could interface with a human being's nervous system just like any natural limb does.</p>
        </div>
          <div class="col m6 light">
            <p>Work Stuff 1</p>
            <div class="progress">
              <div class="determinate blue" style="width: 70%"></div>
            </div>
            <p>Work Stuff 2</p>
            <div class="progress">
              <div class="determinate blue" style="width: 70%"></div>
            </div>
            <p>Work Stuff 3</p>
            <div class="progress">
              <div class="determinate blue" style="width: 70%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"></div>

    <div class="container clients ">
      <h3 class="center light">Our Benefactor</h3>
        <div class="col m4 s12 center">
          <img src="materialize/img/logos/oscorp_industries_logo.png">
        </div>
        <div class="col m4  center">
          <img src="materialize/img/logos/aim-removebg-preview.png">
        </div>

    </div>
  </div>

  <!-- services -->
  <section id="services" class="services grey lighten-3 scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Our Products</h3>
        <div class="col m4 s12">
          <div class="card-panel">
            <img src="materialize/img/services/bionic.jpg" width="250" height="auto">
            <h5>Prosthetics</h5>
            <p>Our first volunteer subject - Lance Corporal Texidor. Lost his arm overseas, and now just wants to hug his daughter again.</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel">
            <img src="materialize/img/services/prosthetic_test.png" width="250" height="auto">
            <h5>Neural Interface</h5>
            <p>Dr. Octavius testing the capabilities of the neural interface. It seems that there are many ways to improve the ways of limb replacement.</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel">
            <img src="materialize/img/services/prototype.jpg" width="250" height="auto">
            <h5>Prostheses</h5>
            <p>Dr. Octavius and his lab assistant Peter Parker has made a quite tremendous achivement for the prostheses they're working on.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- portfolio -->
  <section id="portfolio" class="portfolio scrollspy">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Portfolio</h3>
      <div class="row">
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/parker.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/otto.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/otto and parker.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/clink.jpg" class="responsive-img materialboxed">
        </div>
      </div>
      <div class="row">
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/5.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/1.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/6.png" class="responsive-img materialboxed">
        </div>
        <div class="col m3 s12">
          <img src="materialize/img/portfolio/3.png" class="responsive-img materialboxed">
        </div>
      </div>
    </div>
  </section>

  <!-- LiveSearch and horizontal carousel -->
  <div class="section search">
          <h2 class="center-align section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>

  <!-- Contact Us -->
  <section id="contact" class="contact scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel indigo darken-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact Us</h5>
            <p>If there's something on your mind for the betterment of our small but growing company, please contact us.</p>
          </div>
          <ul class="collection width-header">
            <li class="collection-header"><h4>Our Office</h4></li>
            <li class="collection-item">Octavius Industries, 6th floor, room #03 </li>
            <li class="collection-item">Greenwich Village, 38th st.,  Building</li>
            <li class="collection-item">Manhattan, New York City</li>
          </ul>  
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Please fill out this form</h5>
              <div class="input-field">
              <input type="text" name="name" id="name" required="">
              <label for="name">Name</label>
              </div>
              <div class="input-field">
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
              </div>
              <div class="input-field">
              <input type="text" name="phone" id="phone">
              <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
              <textarea name="message" id="message" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
              </div>
              <btn type:"submit" class="btn indigo darken-2">Send</btn>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="indigo darken-2 white-text center">
    <p>Octavius Industries c.2018</p>
  </footer>





      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {scrollOffset: 50});


      </script>
    </body>
  </html>