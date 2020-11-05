function openNav() {
    document.getElementById("side-navbar").style.width = "250px";
    document.getElementById("nav-click").style.marginLeft = "250px";
}
        
function closeNav() {
    document.getElementById("side-navbar").style.width = "0";
    document.getElementById("nav-click").style.marginLeft= "0";
}

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}