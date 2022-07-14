function showIcon(text) {
  if (window.innerWidth > 770)
    document.getElementById(text).style.display = "";
}

function hideIcon(text) {
  document.getElementById(text).style.display = "none";

}

function menu() {
  var del = 0;
  for (var c = 1; c < 39; c++) {
    var text = document.getElementById('text' + c);
    text.style.display = "";
    var newDom = '';
    var animationDelay = 6;

    for (let i = 0; i < text.innerText.length; i++) {
      newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i]) + '</span>';
    }

    text.innerHTML = newDom;
    var length = text.children.length;

    for (let i = 0; i < length; i++) {
      text.children[i].style['animation-delay'] = (del + (animationDelay * i)) + 'ms';
    }
    del += animationDelay * length;
  }
}