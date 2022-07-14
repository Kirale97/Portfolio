var moveName = document.getElementById('moveName');
var subTitle = document.getElementById('subtitle');
var value = 0;
var clicked = false;
var cont = 0;
var conta = 0;
var elements = [];
var CheckMenu = true;
var currentPage = 0; // 0: index - 1: about - 2: projects - 3: contact
var precPage = 0;
var resized = 0; //0: undefined, 1:width >= 1164, 2: < 1164, 3: < 770
var navElements = [document.getElementById("elementsAbout"), document.getElementById("elementsProjects"), document.getElementById("elementsContacts")];
var navElementsMobile = [document.getElementById("elementsAboutMobile"), document.getElementById("elementsProjectsMobile"), document.getElementById("elementsContactsMobile")];

window.addEventListener("resize", ResizeWindow);
var p = document.getElementById("calcPage2").offsetHeight;
document.getElementById("page2Parent").style.height = document.getElementById("calcPage2").offsetHeight + "px";
if (window.innerWidth>=768)
document.getElementById("photoAbout").style.height=p+"px";
document.getElementById("calcPage2").style.display = "none";
document.getElementById("calcPage2").remove();

document.getElementById("buttonContact").addEventListener('onsubmit', (e) => doFetch(e));
document.form_send.addEventListener('onsubmit', (e) => doFetch(e));

navElements[0].addEventListener('click', (e) => ChangeNav(1, true, e));
navElements[1].addEventListener('click', (e) => ChangeNav(2, true, e));
navElements[2].addEventListener('click', (e) => ChangeNav(3, true, e));

navElementsMobile[0].addEventListener('click', (e) => ChangeNavMobile(1, true, e));
navElementsMobile[1].addEventListener('click', (e) => ChangeNavMobile(2, true, e));
navElementsMobile[2].addEventListener('click', (e) => ChangeNavMobile(3, true, e));
moveName.addEventListener('click', (e) => ClickName(e));
ResizeWindow();

function AboutWindow() {

  switch (resized) {
    case 1:
      var divIcon = document.getElementsByClassName("divIcon");
      for (var i = 0; i < divIcon.length; i++) {
        divIcon[i].classList.remove("col-md-4");
        divIcon[i].classList.add("col-md-6");
      }
      document.getElementById("aboutText").classList.remove("col-md-12");
      document.getElementById("aboutText").classList.add("col-md-6");
      document.getElementById("aboutIcons").classList.remove("col-md-12");
      document.getElementById("aboutIcons").classList.add("col-md-6");
      document.getElementById("space1").classList.add("col-md-12");
      document.getElementById("space2").classList.add("col-md-12");
      document.getElementById("space1").classList.add("col-sm-12");
      document.getElementById("space2").classList.add("col-sm-12");
      document.getElementById("space1").classList.add("col-12");
      document.getElementById("space2").classList.add("col-12");
      document.getElementById("space3").classList.remove("col-md-12");
      document.getElementById("space3").classList.remove("col-sm-12");
      document.getElementById("space3").classList.remove("col-12");
      CheckMenu = false;
      break;

    case 2: //<1164
      var space1 = document.getElementById("space1");
      var space2 = document.getElementById("space2");
      var space3 = document.getElementById("space3");
      document.getElementById("aboutText").classList.remove("col-md-6");
      document.getElementById("aboutText").classList.add("col-md-12");
      document.getElementById("aboutIcons").classList.remove("col-md-6");
      document.getElementById("aboutIcons").classList.add("col-md-12");
      space1.classList.remove("col-md-12");
      space2.classList.remove("col-md-12");
      space1.classList.remove("col-sm-12");
      space2.classList.remove("col-sm-12");
      space1.classList.remove("col-12");
      space2.classList.remove("col-12");
      space3.classList.add("col-md-12");
      space3.classList.add("col-sm-12");
      space3.classList.add("col-12");
      var divIcon = document.getElementsByClassName("divIcon");
      for (var i = 0; i < divIcon.length; i++) {
        divIcon[i].classList.remove("col-md-6");
        divIcon[i].classList.add("col-md-4");
      }
      break;

    case 3:
      CheckMenu = true;
      document.getElementById("space3").classList.add("col-sm-12");
      document.getElementById("space3").classList.add("col-12");
      break;
  }

}

function ClickName(event) {
  if (nameFixed) {
    ChangeNav(5);
  }
}
async function ResizeWindow() {
  if (window.innerWidth >= 1164) {
    if (resized == 1) 
      return;
    resized = 1;
    
  } else if (window.innerWidth < 1164) {
    if (resized == 2) 
      return;
    resized = 2;
    
  } else {
    if (resized == 3) 
      return;
    resized = 3;
    
  }
  AboutWindow();
}

var exit = true;
$(function () { 
  $(navElements[0]).hover(function () {
    if (currentPage != 1 && !clicked) {
      exit = false;
      cont = 0;
      conta = 0;
      elements = document.getElementsByClassName("elNav0");
      p = setInterval(overNav, 50);
    }
  }, function () {
   
    if (currentPage != 1 && !clicked) {
      cont = 0;
      conta = 0;
      exit = true;
      ExitNav();
    }
  });
});

$(function () {
  $(navElements[1]).hover(function () {
    if (currentPage != 2 && !clicked) {
      exit = false;
      cont = 1;
      conta = 0;
      elements = document.getElementsByClassName("elNav1");
      p = setInterval(overNav, 50);
    }
  }, function () {
    if (currentPage != 2 && !clicked) {
      exit = true;
      ExitNav();
    }
  });
});

$(function () {
  $(navElements[2]).hover(function () {
    if (currentPage != 3 && !clicked) {
      exit = false;
      cont = 2;
      conta = 0;
      elements = document.getElementsByClassName("elNav2");
      p = setInterval(overNav, 50);
    }
  }, function () {
    if (currentPage != 3 && !clicked) {
      exit = true;
      ExitNav();
    }
  });
});
async function overNav() {

  var c = 0;
  for (var i = 0; i < 3; i++) {
    if (c == cont) {
      c++;
      if (c > 2) {
        c = 0;
      }
    }
    elements = document.getElementsByClassName("elNav" + c);
    for (var d = 0; d < elements.length; d++) {
      elements[i].classList.remove("charChanged");
    }
    c++;
  }
  elements = document.getElementsByClassName("elNav" + cont);
  elements[conta].classList.add("charChanged");

  conta++;
  if (conta == elements.length) {
    clearInterval(p);
  }

}
async function ExitNav() {
  clearInterval(p);
  silverNav();
}

async function ChangeNav(val, bool, event) { 
  clicked = true;

  var el;
  var valore = val - 1;
  for (var i = 0; i < 3; i++) {
    if (i != valore) {
      el = document.getElementsByClassName("elNav" + i);
      for (var d = 0; d < el.length; d++) {
        el[d].classList.remove("charChanged");
        el[d].classList.remove("charSelected");
      }
    }
  }
  el = document.getElementsByClassName("elNav" + valore);
  
  for (var i = 0; i < el.length; i++) {
    el[i].classList.add("charSelected");
  }
  switch (valore) {
    case 0:
      window.scrollTo(0, ($(window).height() * 0.9));
      break;
    case 1:
      window.scrollTo(0, (($(window).height() * 0.85) + document.getElementById("page2Parent").offsetHeight));
      break;
    case 2:
      window.scrollTo(0, (($(document).height()) - (document.getElementById("page4").offsetHeight)));
      break;
    case 4:
      window.scrollTo(0, 0);
      break;
  }
  clicked = false;
}

for (var i = 0; i < navElements.length; i++) {
  navElements[i].style.cursor = "pointer";
}

document.getElementById("boxNav").addEventListener('click', (e) => MenuMobile());


async function MenuMobile() {

  if (CheckMenu) { 
    htmlTags = document.getElementsByTagName("html")
    for (var i = 0; i < htmlTags.length; i++) {
      htmlTags[i].style.overflowY = "hidden";
    }

    document.getElementById("menuNavbarMobile").style.marginLeft = "0";
    CheckMenu = false;
    if (nameFixed) {
      moveName.style.zIndex = "100";
    } else {
      moveName.style.zIndex = "10";
    }
  } else { 
    htmlTags = document.getElementsByTagName("html")
    for (var i = 0; i < htmlTags.length; i++) {
      htmlTags[i].style.overflowY = "visible";

    }
    document.getElementById("menuNavbarMobile").style.marginLeft = "100%";
    CheckMenu = true;
    moveName.style.zIndex = "100";
  }
}
async function ChangeNavMobile(val, bool, event) {

  document.getElementById("ham").classList.toggle("active");
  document.getElementById("navbar").style.background = "white";
  MenuMobile();
  ChangeNav(val, bool, event);
}
document.getElementById("arrowDown").addEventListener('click', (e) => IconFlag(e));
document.getElementById("arrowDown").addEventListener('click', (e) => ShowArrow(e));
var CheckFlag = true;
var CheckArrow = true;

function ShowArrow() {
  if (CheckArrow) {
    document.getElementById("arrowDown").innerHTML = "▲";
    CheckArrow = false;
  } else {
    document.getElementById("arrowDown").innerHTML = "▼";
    CheckArrow = true;
  }
}

function IconFlag() {
  LanguageIcon("content");
}
 
function LanguageIcon(name){
  if (CheckFlag) {
    document.getElementById(name).style.display = "flex";
    CheckFlag = false;
  } else {
    document.getElementById(name).style.display = "none";
    CheckFlag = true;
  }
}
document.getElementById("showContentMobile").addEventListener('click', (e) => LingueMobile(e));

function LingueMobile() {
  LanguageIcon("contentMobile");
}

// Example POST method implementation:
async function postData(url = '', data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript objects
}

function doFetch() {
  postData('https://portfolioalessio.com/sender.php', {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      message: document.getElementById("message").value
    })
    .then(data => {
      if(data==0 || data=="0"){
        document.getElementById("colMessage").style.background="green";
        document.getElementById("colMessage").style.animation="";
        document.getElementById("colMessage").innerHTML="Message sent with success";
        document.getElementById("colMessage").style.animation="anMessage 5s linear";
        
      }else {
        document.getElementById("colMessage").style.background="red";
        document.getElementById("colMessage").style.animation="";
        document.getElementById("colMessage").innerHTML="Error. Try later";
        document.getElementById("colMessage").style.animation="anMessage 5s linear";
      }
    });
}