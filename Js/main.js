$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');

    });

     $(window).on('scoll load', function(){

        $('#menu').toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');

        if($(window).scrollTop() > 68){
            $('header .header-2').addClass('header-active');
        }else{
            $('header .header-2').removeClass('header-active');
        }


        $('section').each(function(){

            let height = $(this).height();
            let offset = $(this).offset().top - 200;
            let top = $(window).scrollTop();
            let id = $(this).attr('id');

            if(top >= offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find('[href="#${id}"]').addClass('active');
            }
        });


     });

     $('.home-slider').owlCarousel({
         items:1,
         nav:true,
         dots:false,
         autoplay:true,
         autoplayTimeout:8000,
         loop: true
     });


     $('.small-image img').click(function(){

         $(this).addClass('image-active').siblings().removeClass('image-active');

          let image = $(this).attr('src');

          $('.big-image img').attr('src', image);
          
     });


     $('.Quartier .btn').click(function(){

        let filter = $(this).attr('data-filter');
        if(filter == 'Tous'){
            $('.Quartier .box').show(400);
        }else{
            $('.Quartier .box').not('.'+filter).hide(200);
            $('.Quartier .box').filter('.'+filter).show(400);
        }

        $(this).addClass('button-active').siblings().removeClass('button-active');

     })


});