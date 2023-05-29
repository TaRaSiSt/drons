/* Sidebar */

/* Set the width of the side navigation to 170px and the left margin of the page content to 250px*/
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    // document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0*/
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

/* Button location */
function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}

var openBtn = document.getElementById("openBtn");
var popup = document.getElementById("popup");
var closeButton = document.querySelector(".close");

function openPopup() {
    popup.style.display = "block";
}

function closePopup() {
    popup.style.display = "none";
}

openBtn.addEventListener("click", openPopup);
closeButton.addEventListener("click", closePopup);