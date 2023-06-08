//toggle class active
const navbarNav = document.querySelector(".navbar-nav");

//ketika humbergur menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar side bar untuk menghilangkan nav

const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

function validateForm() {
  if (document.forms["formperkenalan"]["ig"].value != "ssetiani63") {
    alert("Akun IG yang di input salah");
    document.forms["formperkenalan"]["ig"].focus();
    return false;
  }
  if (document.forms["formperkenalan"]["phone"].value != "085781107694") {
    alert("No Handphone Yang diinput salah");
    document.forms["formperkenalan"]["phone"].focus();
    return false;
  }
  if (document.forms["formperkenalan"]["angkatan"].value != "athariq") {
    alert("Nama Angkatan Yang diinput salah");
    document.forms["formperkenalan"]["angkatan"].focus();
    return false;
  }
}

function validateForm() {
  if (document.forms["formperkenalan"]["calonsuami"].value != "BELUM") {
    alert(
      "Karna Status Kamu Sudah ada calon, maka tidak bisa lanjut ke form selanjutnya "
    );
    document.forms["formperkenalan"]["calonsuami"].focus();
    return false;
  }
  if (document.forms["formperkenalan"]["calonsuami1"].value != "BELUM") {
    alert(
      "Karna Status Kamu Sudah ada ada yang mendekati serius, maka tidak bisa lanjut ke form selanjutnya? "
    );
    document.forms["formperkenalan"]["calonsuami1"].focus();
    return false;
  }
}
