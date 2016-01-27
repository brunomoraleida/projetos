var classList = ["bread", "pizza", "kitchen", "bolo", "bakery"]

var i=0; // bread
var myTimer = setInterval(function() {
  if (i<classList.length) {
    document.getElementById('pictures').className=classList[i];
    i++
  } else { // pizza
    i=0;
    document.getElementById('pictures').className=classList[0];
    i++;
  }
}, 3000);
