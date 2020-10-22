(function ( $ ) { 
    'use-strict'
 
        
 //    menu mobile
    $('#toggle').on('click',function(){
     $('.menu-mobile').toggleClass('menu-mobile-active');
     $('body').toggleClass('active-body');
     $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay-active');
     $('.menu-mobile li').toggleClass('active');
     })  
 
     $('.mobile-menu-overlay').on('click',function(){
         $('.menu-mobile').toggleClass('menu-mobile-active');
         $('body').toggleClass('active-body');
         $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay-active');
         $('.menu-mobile li').toggleClass('active');
     })
 
     $('.menu-mobile .icon-clear-button').on('click',function(){
         $('.menu-mobile').toggleClass('menu-mobile-active');
         $('body').toggleClass('active-body');
         $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay-active');
         $('.menu-mobile li').toggleClass('active');
     })




    


    var slider = $('.slider');
    slider.owlCarousel({
       margin:30,
       smartSpeed:450,
       loop:true,
       autoplay:false,
       autoplayTimeout:4000,
       nav: true,
       dots:false,
       rtl:true,
       mouseDrag:false,
       responsive:{
         0:{
             items:1,
            
         },
         600:{
             items:1,
            
         },
         1000:{
             items:1,
           
          
         }
     }
   });  

   $('.owl-nav').addClass('container')
   

   var slider_client = $('.slider-2');
    slider_client.owlCarousel({
    
       margin:30,
       smartSpeed:450,
       loop:true,
       autoplay:true,
       autoplayTimeout:4000,
       slideTransition: 'linear',
       nav: true,
       dots:false,
       rtl:true,
       mouseDrag:false,
       responsive:{
         0:{
             items:1,
            
         },
         600:{
             items:2,
            
         },
         1000:{
             items:4,
           
          
         }
     }
   }); 
   


// validate form /login
   $('.formContact').validate({
    rules:{
        email:{
            required:true,
            email:true
        },
        username:{
            required:true,
        },
        message:{
            required:true,
        },
  
    },
    messages:{
        email:{
            required:'',
            email:'',
        },
        username:{
            required:''
        },
        message:{
            required:''
        },

    }
})
// validate form/Contact
$('.marquee').marquee({
    duration: 15000,
    gap: 0,
    direction: 'right',
    duplicated: false,
    pauseOnHover: true
});



$('[data-fancybox]').fancybox({
    youtube : {
        controls : 1,
        showinfo : 0
    },
    vimeo : {
        color : 'f00'
    }
});



const player = new Plyr('#player')


}( jQuery ));

