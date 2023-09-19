console.log("# Javascript está carregado...");

// Jquery
$(function(){
    console.log("# jQuery(v3.1.1) está carregado também...");
})


// Código para ativar o slide
$('').slick({
    dots: false,
    arrows:true,
    speed:1000,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 3000,
    pauseOnHover:true,
    responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        },
                    },
                    {
                        breakpoint: 568,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        },
                    }
                ],
});$('.slick-arrow:nth-of-type(1)').html("<");$('.slick-arrow:nth-of-type(2)').html(">");