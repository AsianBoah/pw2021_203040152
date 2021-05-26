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
  <div id="clients" class="parallax scrollspy">
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

  <!-- LiveSearch 
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>--->
        <!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <h2 class="light center grey-text text-darken-3">Which country will we be operating?</h2>
    <input id="myInput" type="text" name="myCountry" placeholder="Where do you want us?">
  </div>
  <input type="submit">
</form>

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
        function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

      </script>
    </body>
  </html>