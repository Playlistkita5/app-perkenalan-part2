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
      <h2><span>Selamat !!! Kamu Hebat ! Jawaban kamu Benar, Kamu masih inget dengan jawabannya dan kamu tervalidasi </span></h2> <br/>
      <p>
        Hai Sheila Sebelum masuk pertanyaan yang lain,  aku perkenalankan dulu sebagian identitas aku yah...<br/>
        Namaku masih di rahasiakan, aku pria kelahiran 199X, berasal dari pulau jawa, Aku Lulusan S1 Fakultas Teknik tahun 2017 di kampus swasta di jakarta, sekarang bekerja di perusahaan swasta penyedia jasa telekomunikasi dan teknologi informasi. 
        Aku bekerja setiap hari senin – jumat, hari hariku bekerja dibagian complain pengguna jasa. <br/>
        <br/>
        <p>
          Saya suka sekali memasak, Traveling, Running, swimming. Dalam seminggu pasti ada beberapa hari saya melakukan sebagian hobby tersebut, tapi sayangnya karna statusnya masih single, sering melakukannya sendirian, berharap ada yang mau kenal dekat denganku dan berjalan bersama :)
        </p><br/>
        <p>
          Baik, cukup segitu perkenalan diri saya, Skrang aku mau bertanya boleh? Minta di jawab dengan jujur yah, di mohon dengan sangat pleasee <br/>
        </p><br/>
        <p>
          Sebelum masuk pertanyaan yang lain, dan ga banyak basa basi lagi, kita masuk ke pertanyaan inti yah.. 
       </p><br/> 

       <iframe align-center
    src="https://forms.office.com/r/5vXTzJxRGf"
    width="450"
    height="640"
    frameborder="0"
    marginheight="0"
    marginwidth="0"
    >Memuat…</iframe
  >
        
      
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
