<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PerkenalanApp</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin&family=Pacifico&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto:ital,wght@0,500;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">PerkenalanApp.</a>

      <div class="navbar-nav">
        <a href="index.html">Home</a>
        <a href="index.html/about">Maksud dan Tujuan</a>
        <a href="#menu">Penjelasan</a>
        <a href="#contact">Perkenalan</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Menu Section end -->
    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Terima Kasih sudah mau menjawab dengan jujur ya sheila</span></h2> <br/>
      <p>
       Jujur aku mau ngomong apalagi, aku bingung sekaligus malu. tpi aku coba aja mengalir apa adanya <br/>
        <br/>
        <p>
         biar sedikit rileks tidak kaku dan enjoy lagi, bisa dengerkan lagu favoritku :), diputer sampe akhir yah setelah itu bisa di close..he..he..
        </p><br/>
      
        <p>
        <iframe width="450" height="315" src="https://www.youtube.com/embed/ThCgfFllbQ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
           <br/>
        </p><br/>
        <p>
           
        </p><br/>
        
      
    </section>
    <!-- Navbar End -->
    <!-- Hero Section start -->

    <!-- Contact Section end -->
    <!-- Footer Start -->

    <!-- Footer end -->

    <!-- Fetaher Icons -->
    <script>
      feather.replace();
    </script>
    <!-- my Javascript -->
    <script src="js/script.js"></script>

    <script>
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

function validateForm() {
  if (document.forms["form1"]["status-pasangan"].value = "SUDAH") {
    alert("Terima kasih sudah menjawab jujur :( :( :(");
    document.forms["form1"]["status-pasangan"].focus();
    return false;
  }
  
}
document.getElementById("form1").addEventListener("submit", myFunction);

function myFunction() {
  alert("terima kasih sudah menjawab dengan jujur yahhh ");
}
        </script>
  </body>
</html>
