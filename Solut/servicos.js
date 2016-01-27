window.onload = function() {
var buttons = document.getElementsByClassName('plus');
var x;
var paragraphs;
for (var i=0; i<buttons.length; i++) {
  buttons[i].addEventListener("click", function () {
    x = (this.id);
    paragraphs = document.getElementsByClassName(x);
    for (var b=0; b<paragraphs.length; b++) {
      if (paragraphs[b].style.display === "none") {
        paragraphs[b].style.display="block";
      } else {
        paragraphs[b].style.display ="none";
      }
    }
  });
}
}
