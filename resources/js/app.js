// Default Laravel bootstrapper, installs axios
import './bootstrap';

// Added: Actual Bootstrap JavaScript dependency
import 'bootstrap';

// Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';

import jQuery from 'jquery';
window.$ = jQuery;

if ($("#header-lang-toggle").length > 0) {
    window.addEventListener('click', function(e) {
        if (document.getElementById('header-lang-toggle').contains(e.target)) {
            $(".header-lang ul").toggleClass("lang-list-open");
            $(".header-lang-toggle").toggleClass("rotate-up");
        } else {
            $(".header-lang ul").removeClass("lang-list-open");
        }
    });
}

if ($("#header-currency-toggle").length > 0) {
    window.addEventListener('click', function(e) {
        if (document.getElementById('header-currency-toggle').contains(e.target)) {
            $(".header-currency ul").toggleClass("currency-list-open");
            $(".header-currency-toggle").toggleClass("rotate-up");
        } else {
            $(".header-currency ul").removeClass("currency-list-open");
        }
    });
}

$(".category-menu-toggle").on("click", function () {
    $(".category-menu > nav > ul").slideToggle();
    $(this).toggleClass("rotate-up");
});
