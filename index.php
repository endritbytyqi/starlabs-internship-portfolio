<?php
require_once("./src/contact.php");
$cookiename = "user";
$cookievalue = "Name LastName";
setcookie($cookiename, $cookievalue, time() + (86400 * 30 * 30)); //30days
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Endrit Bytyqi | Portfolio</title>
    <link rel="icon" href="icon_path" type="img/eb.png">
    <link rel="stylesheet" href="style.css">
    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Lexo me shume"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Lexo me pak"; 
    moreText.style.display = "inline";
  }
}
</script>
    </head>
<body>
    <header>
    <div class="banner">
        <div class="textBx">
            <h2>Hello, I'm<br><span>Endrit Bytyqi.</span></h2>
            <h3>I'm a Developer!</h3>
            <a href="#about-info"><button type="button" class="btn btn-info" id="about-button">About me</button></a>
        </div>
        <div class="sm-menu">
            <li><a href="https://www.facebook.com/eendritbytyqi/" target="_blank"><img src="./img/fblogo.png" width="50px" height="50px"></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><img src="./img/iglogo.png" width="40px" height="40px"></a></li>
            <li><a href="https://www.github.com/endritbytyqi/" target="_blank"><img src="./img/gitlogo.png" width="40px" height="40px"></a></li>
            <li><a href="https://www.linkedin.com/" target="_blank"><img src="./img/licon.png" width="40px" height="40px"></a></li>
            </div>
    </div>
    
</header>
    <section class="main-info">
        <div class="main-content">
            <h2 id="about-info" style="margin-right: 100px">ABOUT ME</h2>
            <hr>
        </div>
        <div class="personal-container">
        <div class="card" style="width: 18rem;">
  <img src="./img/avatarm.png" class="card-img-top" alt="avatar" height="200px" width="200px">
  <div class="card-body">
    <h5 class="card-title"><legend>Personale</legend></h5>
    <p class="card-text">Jam Endrit Bytyqi, nga komuna e Ferizajt. Jam i apasionuar pas teknologjise ne pergjithesi si dhe gjithcka qe lidhet rreth saj.
    Hobi kryesisht kam leximin, video games si dhe filmat apo serialet me te cilat zakonisht e kaloj kohen e lire.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./img/student.png" class="card-img-top" alt="student" height="200px" width="200px">
  <div class="card-body">
    <h5 class="card-title"><legend>Arsimimi</legend></h5>
    <p class="card-text">Kam perfunduar Gjimnazin "Kuvendi i Arberit" ne Ferizaj, drejtimi "Shkenca natyrore".<span id="dots">...</span><span id="more"> Pastaj kam filluar studimet
    ne Fakultetin e Inxhinierise Elektrike dhe Kompjuterike. Kam punuar ne disa projekte te ndryshme me gjuhe te ndryshme ne fakultet si dhe Jam
    i pergaditur per te punuar nen presion dhe me afate kohore(deadlines).</span></p>
    <button onclick="myFunction()" id="myBtn">Lexo me shume</button>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Krijimi i nje website interaktiv me teknologjite <b>HTML, CSS, JS, PHP, MySQL</b></li>
    <li class="list-group-item">Krijimi i nje aplikacioni per enkriptim te te dhenave dhe te cerfitikatave dixhitale <b>Java</b></li>
    <li class="list-group-item">Krijimi i nje rrjete lokale me disa paisje qe komunikojne mes vete me ane te vegles<b> Cisco Packet Tracer</b></li>
    <li class="list-group-item">Krijimi i nje aplikacioni per enkriptim te te dhenave me algoritmin AES me GUI <b>Python</b></li>
  </ul>
</div>
<div class="card" style="width: 18rem;">
  <img src="./img/ciscologo.png" class="card-img-top" alt="cisco" width="200px" height="200px">
  <div class="card-body">
    <h5 class="card-title"><legend>Cisco Certified Network Associate</legend></h5>
    <p class="card-text">Kam perfunduar 3 modulet e nevojshme dhe jam certifikuar si Cisco Certified Network Associate.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">CCNA 1: Introduction to Networks. </li>
    <li class="list-group-item">CCNA 2: Routing and Switching Essentials.</li>
    <li class="list-group-item">CCNA 3: Scaling Networks.</li>
  </ul>
</div>
        </div>
    </section>
    </body>
    <footer class="page-footer font-small blue pt-4">

    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase">Kontaktoni</h5>
          <form action="./src/contact.php" method="POST">
        <p>Name</p> <input type="text" name="name" required>
        <p>Email</p> <input type="text" name="email" required>
        <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
        <input class="btn btn-primary" type="submit" value="Submit" id="submit-button">
        <input class="btn btn-primary" type="reset" value="Reset" id="reset-button">
        

        </form>

        </div>

        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

            <h5 class="text-uppercase">Adresa</h5>

            <ul class="list-unstyled">
              <li>
                <address>Starlabs Co. Ltd.
                Prishtine,
                10000
                Republika e Kosoves
                </address>

              </li>
            </ul>

          </div>
          <div class="col-md-3 mb-md-0 mb-3">

            <h5 class="text-uppercase">MAP</h5>

            <ul class="list-unstyled">
            <div style="width: 100%"><iframe width="80%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Prishtina+(Starlabs)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
            </ul>

          </div>

      </div>

    </div>

  </footer>
    </html>