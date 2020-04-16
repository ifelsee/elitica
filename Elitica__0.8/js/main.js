//navbar fixed code


if (jQuery("div").hasClass("sidebar-nav")) {
    
height = jQuery('.ads-area').height();
window.addEventListener('scroll', () => {
    if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
        document.getElementById("Navbar-b").classList.add("fixed");
        document.getElementById("Navbar-b").classList.remove("relative");
        document.getElementById("ads-area").classList.add("m55");

    }
    else {
        document.getElementById("Navbar-b").classList.add("relative");
        document.getElementById("Navbar-b").classList.remove("fixed");
        document.getElementById("ads-area").classList.remove("m55");
    }
});


}
