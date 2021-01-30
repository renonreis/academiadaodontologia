console.log('rodou');




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
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("app-mobile-sidebar").style.width = "250px";
    document.getElementById("app-content").style.marginRight = "250px";
    document.getElementById("app-content-overlayer").classList.add('good');;
}



/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("app-mobile-sidebar").style.width = "0";
    document.getElementById("app-content").style.marginRight = "0";
    document.getElementById("app-content-overlayer").classList.remove('good');
}


/* ---------------------------- */




/*
Animate On Scroll Library
========================= */
AOS.init();

/* ---------------------------- */




