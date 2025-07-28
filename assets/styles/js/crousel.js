import 'owl.carousel'
const $ = require('jquery');
window.$ = global.$ = global.jQuery = $;
$(document).ready(function () {
    $("#resi_proj,#comm_proj, #milestone, #award, #regi_proj_list, .comm_proj_list, .regi_proj_list, .delivered_project").owlCarousel({
        loop: true, // Infinite loop
        margin: 15, // Space between items
        nav: true, // Navigation arrows
        dots: false, // Pagination dots
        autoplay: true, // Auto scroll
        autoplayTimeout: 3000, // 3 sec delay
        autoplayHoverPause: true, // Pause on hover
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});