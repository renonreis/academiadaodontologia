console.log('fala tu');




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

// end vanilla scrol





/*
offcanvas
========================= */
function openNav() {
    document.getElementById("app-mobile-sidebar").classList.add('is-open');
    document.getElementById("app-content-overlayer").classList.add('is-show');

}

function closeNav() {
    document.getElementById("app-mobile-sidebar").classList.remove('is-open');
    document.getElementById("app-content-overlayer").classList.remove('is-show');
}
/* ---------------------------- */


/*
Animate On Scroll Library
========================= */
AOS.init();

/* ---------------------------- */




