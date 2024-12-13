jQuery(document).ready(function($) {
    // Optional jQuery for adding 'scrolled' class on scroll
    $(window).on('scroll', function() {
        const $navbar = $('.navbar');
        if ($(window).scrollTop() > 50) {
            $navbar.addClass('scrolled');
        } else {
            $navbar.removeClass('scrolled');
        }
    });
});


jQuery(document).ready(function(e) {
    e('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 1500
    })

});

document.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    
    if (window.scrollY > 50) { // You can adjust this value
        navbar.style.backgroundColor = '#c41130';
    } else {
        navbar.style.backgroundColor = 'transparent'; // or your default color
    }
});

document.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    
    if (window.scrollY > 50) { // Adjust threshold value as needed
        navbar.classList.add('shrink');
    } else {
        navbar.classList.remove('shrink');
    }
});


// Back-to-top button visibility and scroll-to-top action
jQuery(document).ready(function ($) {
    var backToTopBtn = $("#back-to-top-btn");

    // Show/hide the back-to-top button on scroll
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 20) {
            backToTopBtn.fadeIn(); // Smoothly show the button
        } else {
            backToTopBtn.fadeOut(); // Smoothly hide the button
        }
    });

    // Smooth scroll to top on button click
    backToTopBtn.on("click", function (e) {
        e.preventDefault(); // Prevent default action
        $("html, body").animate({ scrollTop: 0 }, "fast");
    });
});





jQuery(document).ready(function($) {
    $("body").scrollspy({
        target: "#navbarNav",
        offset: 50 // Adjust based on your layout
    });
});
