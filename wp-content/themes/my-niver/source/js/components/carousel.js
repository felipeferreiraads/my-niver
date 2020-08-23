import 'owl.carousel'

$('.carousel-partners .carousel').owlCarousel({
    nav : false,
    loop: true,
    responsive:{
        320:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3
        }
    }
})

$('.carousel-partners .prev').click(function () {
    $('.carousel-partners .carousel').trigger('prev.owl.carousel', [300])
})

$('.carousel-partners .next').click(function () {
    $('.carousel-partners .carousel').trigger('next.owl.carousel')
})

$('.carousel-testmonies .carousel').owlCarousel({
    nav : false,
    loop: true,
    margin: 40,
    responsive:{
        320:{
            items:1,
        },
        1024:{
            items:2
        }
    }
})

$('.carousel-testmonies .prev').click(function () {
    $('.carousel-testmonies .carousel').trigger('prev.owl.carousel', [300])
})

$('.carousel-testmonies .next').click(function () {
    $('.carousel-testmonies .carousel').trigger('next.owl.carousel')
})