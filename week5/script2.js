var carousel = document.querySelectorAll("#carousel img");
var bigimg = document.querySelector("#bigImage img");

for (var i = 0; i < carousel.length; i++) {
    carousel[i].addEventListener('click', f);
}
function f() {
    bigimg.setAttribute("src", this.getAttribute("src"));
}