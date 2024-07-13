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

$(".offcanvas-open-btn").on("click", function () {
    $(".offcanvas__area").addClass("offcanvas-opened");
    $(".body-overlay").addClass("opened");
});
$(".offcanvas-close-btn").on("click", function () {
    $(".offcanvas__area").removeClass("offcanvas-opened");
    $(".body-overlay").removeClass("opened");
});


if($('.category-menu-content').length && $('.category-mobile-menu').length){
    let navContent = document.querySelector(".category-menu-content").outerHTML;
    let mobileNavContainer = document.querySelector(".category-mobile-menu");
    mobileNavContainer.innerHTML = navContent;

    $('.offcanvas-category-toggle').on('click', function(){
        $(this).siblings().find('nav').slideToggle();
    });


    let arrow = $(".category-mobile-menu .has-dropdown > a");

    arrow.each(function () {
        let self = $(this);
        let arrowBtn = document.createElement("BUTTON");
        arrowBtn.classList.add("dropdown-toggle-btn");
        arrowBtn.innerHTML = "<i class='ti ti-chevron-right'></i>";

        self.append(function () {
            return arrowBtn;
        });

        self.find("button").on("click", function (e) {
            e.preventDefault();
            let self = $(this);
            self.toggleClass("dropdown-opened");
            self.parent().toggleClass("expanded");
            self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
            self.parent().parent().children(".submenu").slideToggle();


        });

    });
}

if($('.main-menu-content').length && $('.main-menu-mobile').length){
    let navContent = document.querySelector(".main-menu-content").outerHTML;
    let mobileNavContainer = document.querySelector(".main-menu-mobile");
    mobileNavContainer.innerHTML = navContent;


    let arrow = $(".main-menu-mobile .has-dropdown > a");

    arrow.each(function () {
        let self = $(this);
        let arrowBtn = document.createElement("BUTTON");
        arrowBtn.classList.add("dropdown-toggle-btn");
        arrowBtn.innerHTML = "<i class='ti ti-chevron-right'></i>";

        self.append(function () {
            return arrowBtn;
        });

        self.find("button").on("click", function (e) {
            e.preventDefault();
            let self = $(this);
            self.toggleClass("dropdown-opened");
            self.parent().toggleClass("expanded");
            self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
            self.parent().parent().children(".submenu").slideToggle();
        });

    });
}

