$(document).ready(function(){

    var lastScrollTop = 0;
    var lastWindowWidth = window.innerWidth;
    
    //when scroll the page, the header fixed on the top.// 

    // $(window).scroll(function(){

    //     var st = $(this).scrollTop();
        
    //     if(window.innerWidth>=1200){
    //         if(st>140){
    //             $('header').addClass('scroll');
    //         }

    //         else{
    //             $('header').removeClass('scroll');
    //         }
    //     }
    //     else{
    //         if(st>0){
    //             $('header').addClass('scroll');
    //         }else{
    //             $('header').removeClass('scroll');
    //         }
    //     }

    //     lastScrollTop = st;
  
    // }); 

    //below is the nav menu slidedown function in pc_size

    // $('ul.nav_mainpage>li').mouseenter(function(){

    //     if(window.innerWidth>=1040){
    //         $(this).find('ul').stop(true,true).slideDown('fast');
    //     }
    // }).mouseleave(function(){
    //     if(window.innerWidth>=1040){
    //         $(this).find('ul').stop(true,true).fadeOut('fast');
    //     }
    // });

    //below is the nav menu when click itself and preventdefault function in pc_size

    // $('ul.nav_mainpage>li>a').click(function(e){

    //     e.preventDefault();
    // });

    //below is for the change of the width of the screen function//

    // var lastWindowWidth = window.innerWidth;

    // $(window).resize(function(){
    //     var _window_width=window.innerWidth;   
    //     if(lastWindowWidth != _window_width){
            
    //         if(_window_width>=1040){
    //         $('body').removeClass('open');
    //         $('.main_menu_hamburger').removeClass('active');
    //         //$('.nav_mainpage').show();
    //         $('.nav_mainpage').removeClass('active');
    //         $('.nav_mainpage').perfectScrollbar('destroy');

    //         }else{
    //         $('body').removeClass('open');
    //         $('.main_menu_hamburger').removeClass('active');
    //         //$('.nav_mainpage').hide();
    //         $('.nav_mainpage').removeClass('active');
    //         $('.nav_mainpage').perfectScrollbar('destroy');
    //         }
            
    //         lastWindowWidth = _window_width;
    //     }
    // });

    //below is the menu display function in the phone type

    // $('.main_menu_hamburger').click(function(e){
    //     e.preventDefault();
    //     var el = $(this);

    //     if(el.hasClass('active')){
            
    //         el.removeClass('active');
    //         $('body').removeClass('open');
    //         $('.nav_mainpage').removeClass('active');
    //         $('.nav_mainpage').perfectScrollbar('destroy');
          
    //     }else{
    //         el.addClass('active');
    //         $('body').addClass('open');
    //         $('.nav_mainpage').addClass('active');
    //         setTimeout(function(){
    //         $('.nav_mainpage').perfectScrollbar({suppressScrollX:true,includePadding:true});
    //         },300); 
    //     }
    // });

        //below is for the change of the width of the screen function//

    var lastWindowWidth = window.innerWidth;

    $(window).resize(function(){
        var _window_width=window.innerWidth;   
        if(lastWindowWidth != _window_width){
            
            if(_window_width>=1024){
            $('body').removeClass('open');
            $('.main_menu_hamburger').removeClass('active');
            //$('.nav_mainpage').show();
            $('.nav_mainpage').removeClass('active');
            $('.nav_mainpage').perfectScrollbar('destroy');

            }else{
            $('body').removeClass('open');
            $('.main_menu_hamburger').removeClass('active');
            //$('.nav_mainpage').hide();
            $('.nav_mainpage').removeClass('active');
            $('.nav_mainpage').perfectScrollbar('destroy');
            }
            
            lastWindowWidth = _window_width;
        }
    });
    
        //below is the menu display function in the phone type
    
        $('.main_menu_hamburger').click(function(e){
            e.preventDefault();
            var el = $(this);
    
            if(el.hasClass('active')){
                
                el.removeClass('active');
                $('body').removeClass('open');
                $('.nav_mainpage').removeClass('active');
                $('.nav_mainpage').perfectScrollbar('destroy');
              
            }else{
                el.addClass('active');
                $('body').addClass('open');
                $('.nav_mainpage').addClass('active');
                setTimeout(function(){
                $('.nav_mainpage').perfectScrollbar({suppressScrollX:true,includePadding:true});
                },300); 
            }
        });

        //below is the nav_mainpage click function in hamburger style

        $('.nav_mainpage>li>a').click(function(e){

            if($('.nav_mainpage').hasClass('active')){

            $('body').removeClass('open');
            $('.main_menu_hamburger').removeClass('active');
            //$('.nav_mainpage').show();
            $('.nav_mainpage').removeClass('active');
            //$('.nav_mainpage').perfectScrollbar('destroy');

            }
        });


    //below is the click and add active_class function of the button in the left side
    
    // $('.user_leftside>ul>li>button').click(function(e){
    //     e.preventDefault();
    //     var el = $(this);
    //     el.addClass('active');
    //     $(this).closest('li').siblings('li').find('button').removeClass('active');
    // });

    // //below is the color change function of the system in pc_size

    // $('.color_block').mouseenter(function(e){

    //     e.preventDefault();
        
    //     $(this).find('ul').stop(true,true).slideDown('fast');

    // });

    // $('.color_block').mouseleave(function(e){

    //     e.preventDefault();
        
    //     $(this).find('ul').stop(true,true).fadeOut('fast');
    // });

});