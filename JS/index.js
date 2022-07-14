function delay(time) {
  return new Promise(resolve => setTimeout(resolve, time));
}
var func;
FirstScroll();

function FirstScroll() {
  window.scrollTo(0, 0);
  if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
  } else {
    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }
  }
}
var i2 = 0;
var percAbout = 34;
var animAbout = false;
var eventput = false;
var precScrollPercent = -1;
var animationAboutRunning = false;
var fixed = false;
var nameFixed = false;


$(window).on('scroll', function () {
  var s = $(window).scrollTop(),
    d = $(document).height(),
    c = $(window).height();

  var scrollPercent = (s / (d - c)) * 100;
  var calcolo = 0;
  precPage = currentPage;

  calcolo = d - (2*document.getElementById("page3").offsetHeight);

  if (s < (c * 0.8)) {
    currentPage = 0;
    clearNavbar();
  } else if (s > (c * 0.8) && s <= ((c * 0.8) + (document.getElementById("page2Parent").offsetHeight))) {
    currentPage = 1;
  } else if (s > ((c * 0.8) + (document.getElementById("page2Parent").offsetHeight)) && s <= (((c * 0.8) + (document.getElementById("page2Parent").offsetHeight))) + document.getElementById("page3").offsetHeight) {
    currentPage = 2;
  } else {
    currentPage = 3;


    if (s <= calcolo) {
      document.getElementById("contactSubtitle").style.marginTop = "-10vh";
      document.getElementById("contactSubtitle").style.fontSize = "calc(2.5vw + 2.5vh)";
    } else if (s > (calcolo + (0.1 * c) + document.getElementById("contactTitle").offsetHeight)) {

      document.getElementById("contactSubtitle").style.marginTop = "0";
      document.getElementById("contactSubtitle").style.fontSize = "";

    } else {

      var calc = 0;

      calc = (0 - 10) + (0.1 * c / 10) * ((s - calcolo) / 100);
      document.getElementById("contactSubtitle").style.marginTop = (calc) + "vh";

      calc = 2.5 - ((1.5 / (0.2 * c)) * (s - calcolo));
      var calc2 = 2.5 - ((0.5 / (0.2 * c)) * (s - calcolo));
      if (calc < 1) {
        calc = 1;
      }
      if (calc2 < 2) {
        calc2 = 2;
      }
      document.getElementById("contactSubtitle").style.fontSize = "calc(" + calc + "vw + " + calc2 + "vh)";
    }
  }

  if (precPage != currentPage) {
    if (currentPage == 0)
      clearNavbar();
    else
      silverNav();
  }

  if (!animAbout && s > (c / 2)) {
    AboutAnimation();

  }

  if (s >= (c * 0.95)) {
    if (!fixed && animAbout ) {

      fixed = true;
      var offHeight = document.getElementById("page2").offsetHeight;
      document.getElementById("page2Parent").style.height = offHeight + "px";
     document.getElementById("photoAbout").style.height="";
      document.getElementById("page2").style.position = "fixed";
      document.getElementById("page2").style.height = "";
      document.getElementById("page2").style.top = "0px";
    }

    var con = ((s - (c * 0.95)) / document.getElementById("page2").offsetHeight) * 200;
    document.getElementById("page2").style.marginTop = "calc(" + (0 - con) + "px)";

  } else  if (fixed && animAbout) { 
   
      fixed = false;
      document.getElementById("photoAbout").style.height="";
      document.getElementById("page2").style.top = "0px";
      document.getElementById("page2").style.height = "auto";
      document.getElementById("page2Parent").style.height = "auto";
      document.getElementById("page2").style.position = "relative";
      document.getElementById("page2").style.marginTop = "0vh";
    
  }

  if (scrollPercent < 19) {
    moveName.style.position = "absolute";
    nameFixed = false;
    moveName.style.cursor = "";
    document.getElementById("photoName").style.opacity = (0.75 - calcolo);
    if (window.innerWidth <= 770) {
      moveName.style.fontSize = 50 - ((30 / 19) * scrollPercent) + "px";
    } else {
      moveName.style.fontSize = 80 - ((60 / 19) * scrollPercent) + "px";
    }

    var h = (window.innerHeight - moveName.clientHeight) / 2;
    var z = ((19 / 100) * (d - c));
    var p = z - h;
    calcolo = z;
    calcolo = (h) + ((p + h) / 19) * scrollPercent;
    calcolo = h + ((p / 19) * scrollPercent)
    moveName.style.top = calcolo + "px";

    var l = (window.innerWidth - moveName.clientWidth) / 2;
    calcolo = (l) - ((l / 19) * scrollPercent)
    calcolo = 50 - ((50 / 19) * scrollPercent);

    moveName.style.left = calcolo + "%";
    moveName.style.transform = "translate(-" + calcolo + "%, -" + calcolo + "%)"
  } else {
    moveName.style.position = "fixed";
    nameFixed = true;
    moveName.style.fontSize = "24px";
    moveName.style.top = "5px";
    moveName.style.left = "8px";
    moveName.style.transform = "translate(0%,0%)";
    moveName.style.cursor = "pointer";

  }
  precScrollPercent = scrollPercent;

});

function silverNav() {
  clearNavbar();
  if (currentPage > 0 && !clicked) {
    navElements[currentPage - 1].style.color = "#FF802C";
    var el = document.getElementsByClassName("elNav" + (currentPage - 1));
    for (var i = 0; i < el.length; i++) {
      el[i].classList.add("charSelected");
    }
  }
}

function clearNavbar() {
  var el;
  for (var d = 0; d < 3; d++) {
    navElements[d].style.color = "black";
    el = document.getElementsByClassName("elNav" + (d));
    for (var i = 0; i < el.length; i++) {
      el[i].classList.remove("charChanged");
      el[i].classList.remove("charSelected");
    }
  }

}

async function AboutAnimation() {
  i2++;
  document.getElementById("aboutTitle").style.marginLeft = "0px";
  if (i2 == 1) {
    await delay(1000);

    menu();
  }
  await delay(1500);
  var icon = document.getElementsByClassName("divIcon");

  for (var c = 0; c < icon.length; c++) {
    icon[c].style.display = "";
    await delay(300);
    icon[c].style.marginTop = "0";
  }
  await delay(300);
  animAbout = true;
  animationAboutRunning = false;

}