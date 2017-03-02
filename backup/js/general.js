//________________________________________________________________________________________________//
//------------------------------------ [ SEO MARKETING PERU ] -------------------------------------//

$( document ).ready(function() {
    $('header nav ul li.active').hover(function(){
            $('header nav ul li ul').toggleClass('efecto-seo');
        });
        $('#active-menu').on('click',function(){
            $('body').toggleClass('hidden-scroll');
            $('nav').toggleClass('show');
            $('reset').addClass('show');
            $('header div div.btn-menu i').eq(0).toggleClass('primero');
            $('header div div.btn-menu i').eq(1).toggleClass('segundo');
            $('header div div.btn-menu i').eq(2).toggleClass('tercero'); 

        }); 
  
    //-------------- [ Slider] --------------//
    jQuery(function(){
      jQuery('#camera_wrap_1').camera({
        alignment: 'center',
        thumbnails: false, //MiniFoto
        time: 2500, //Tiempo
        loader: 'bar', //pie, bar tipo de cargador
        loaderColor: 'green', //ColorLoader
        loaderBgColor: '#0000000', //ColorBackGroundLoader
        fx: 'mosaicSpiral', //Efecto
        mobileFx: 'mosaicSpiral', //Efecto Mobile
        hover: false, //Stop Hover
        height: '35%', //Altura
        minHeight: 'auto', //Altura Minima
        autoAdvance: true, //autoplay
        navigation: false, //arrows
        pagination: true, //dots
        playPause: false, //play pause hiden
        loaderPadding: 0, //loder bar
        loaderOpacity:0.5, //Opacidar Bar Loader
        barDirection: 'leftToRight', //direccion Bar Loader
        barPosition: 'top', //'bottom', 'left', 'top', 'right'
      });
    });
    //-------------- [ Fin Slider ] --------------//
     //-------------- [Scroll] --------------//
    var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
    var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;
    var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf('opera/') > -1;
    var is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if (isMobile.any()) {
    } else {
        /* NiceScroll proys */
    $("html").niceScroll({
        touchbehavior:false,
        cursorcolor:"#CAB555",
        cursoropacitymax:16,
        cursorborder:"0px dashed #ffffff",
        cursorwidth:15,
        cursorborderradius:"7.5px",
        background:"#fff",
        zindex:9999
       });
        switch (true) {
            case (is_chrome):
                break;
            case (is_firefox):
                break;
            case (is_safari):
                break;
            case (is_opera):
                break;
            default:
                $('body').addClass('iexplorer');
                break;
        }
    }
    //-------------- [Fin Scroll] --------------//
     
     var owl = $("#owl-demo");
     
      owl.owlCarousel({
          autoPlay: 3000, 
          items : 4, //10 items above 1000px browser width
          itemsDesktop : [1000,3], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [800,2], //2 items between 600 and 0
          itemsMobile : [400,1] // itemsMobile disabled - inherit from itemsTablet option
      });
    
    $('#owl-gics').owlCarousel({
        loop: true,
        autoplay: true,
        items:1,
        nav:true,
        animateOut: 'rollOut',
        autoplayTimeout:3000,
        autoplayHoverPause:true
    })    
      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.stop');
        owl.trigger('owl.next');
        
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
        owl.trigger('owl.stop');
      })

       new WOW().init();
       $(".fancybox").fancybox();

});
    $(document).on("scroll",function(){
                    if($(document).scrollTop()>91 ){ 
                         
                        $("header nav").addClass("cont-menu-top2"); 
                      
                    } else{
                        $("header nav").removeClass("cont-menu-top2"); 
                        
                    }

    });
//--------------------------------- [ SEO MARKETING PERU - FIN ] ---------------------------------//
//______________________________________________________________________________________//

