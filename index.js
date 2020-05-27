$(document).ready(function(){

    // banner owl-carrosel


    $('#banner-area .owl-carousel').owlCarousel({
        dots:true,
        items:1,
        autoplay:true,
        loop:true
    })

    // top sale

    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })


    // isotope filter

    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    })

    // filter itens on button click

    $(".button-group").on("click","button", function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({
            filter:filterValue
        })
    })


    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    

})



