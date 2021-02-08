/* vanilla scroll
-- Verifica se o header está na posição 0 caso não esteja adiciona background;
*/
let scrollpos = window.scrollY
const header = document.querySelector("header.navbar")
const header_height = header.offsetHeight

const add_class_on_scroll = () => header.classList.add("bg-dark")
const remove_class_on_scroll = () => header.classList.remove("bg-dark")

window.addEventListener('scroll', function () {
  scrollpos = window.scrollY;
  if (scrollpos >= header_height) { add_class_on_scroll() }
  else { remove_class_on_scroll() }

  // console.log(scrollpos);
});
// end vanilla scroll
/*
Menu mobile
========================= */
function openNav() {
  document.getElementById("app-mobile-sidebar").classList.add('is-open');
  document.getElementById("app-content-overlayer").classList.add('is-show');
  document.body.classList.add('overflow-hidden');
}

function closeNav() {
  document.getElementById("app-mobile-sidebar").classList.remove('is-open');
  document.getElementById("app-content-overlayer").classList.remove('is-show');
  document.body.classList.remove('overflow-hidden');
}
/* ---------------------------- */
/*
Animate On Scroll Library
Precisa ser o ultimo do código
========================= */
AOS.init();
/* ---------------------------- */
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("list-courses");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

if(window.location.pathname == '/cursos/') {
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("filters");
  var btns = btnContainer.getElementsByClassName("filters__btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
}












