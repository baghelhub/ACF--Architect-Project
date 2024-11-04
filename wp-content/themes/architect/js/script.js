// navigation script //
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1024;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
// navigation script //

// awards-slider script //
      $(document).ready(function () {
      $(".awards-slider").owlCarousel({
      items: 6,
      loop: true,
      pagination:true,
      autoplay: true,
      margin: 20,
      dots: true,
      nav:true, 
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      loop:true,
    margin:10,
    autoHeight:true,
    navText: ["<img src='http://localhost/wp_architects/wp-content/themes/architect/img/arrow-left.svg' alt='left-arrow'>", "<img src='http://localhost/wp_architects/wp-content/themes/architect/img/arrow-right.svg' alt='right-arrow'>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true,
            autoHeight:true
        },
        600:{
            items:3,
            nav:false,
            autoHeight:true
        },
        1000:{
            items:5,
            nav:true,
            loop:true,
            autoHeight:true
        }
    }
      });
      });
// awards-slider script // 



// slider script //
      $(document).ready(function () {
      $(".slider-tr").owlCarousel({
      items: 6,
      loop: true,
      pagination:true,
      autoplay: true,
      margin: 30,
      dots: true,
      nav:true, 
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      loop:true,
    autoHeight:true,
    navText: ["<img src='http://localhost/wp_architects/wp-content/themes/architect/img/arrow-left.svg' alt='left-arrow'>", "<img src='http://localhost/wp_architects/wp-content/themes/architect/img/arrow-right.svg' alt='right-arrow'>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            autoHeight:true
        },
        600:{
            items:3,
            nav:false,
            autoHeight:true
        },
        1000:{
            items:1.4,
            nav:true,
            loop:true,
            autoHeight:true
            }
          }
        });
      });
// slider script // 

// ins slider //
 $(document).ready(function () {
      $(".our-silder").owlCarousel({
         
      items: 6,
      loop: true,
      pagination:true,
      autoplay: true,
      margin: 0,
      dots: true,
      nav:false, 
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      loop:true,
    autoHeight:true,
    responsiveClass:true,
    responsive:{
        0:{
             stagePadding:0,
            items:1,
            nav:true,
            autoHeight:true
        },
        600:{
            items:3,
            nav:false,
            autoHeight:true
        },
        1000:{
            stagePadding:150,
            items:4,
            nav:true,
            loop:true,
            autoHeight:true
        }
    }
      });
      });
//ins slider //
 

 // slider section //
 $(document).ready(function () {
      $(".silder-m").owlCarousel({
         
      items: 6,
      loop: true,
      pagination:true,
      autoplay: true,
      margin: 0,
      dots: true,
      nav:true, 
      autoplayTimeout: 4000,
      autoplaySpeed: 1000,
      loop:true,
    autoHeight:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            autoHeight:true
        },
        600:{
            items:1,
            nav:false,
            autoHeight:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true,
            autoHeight:true
          }
        }
      });
      });
 // slider section //

// tabs script //
// var tabLabels = document.querySelectorAll("#tabs li");
// var tabPanes = document.getElementsByClassName("tab-contents");

// function activateTab(e) {
//   e.preventDefault();
  
//   // Deactivate all tabs
//   tabLabels.forEach(function(label, index){
//     label.classList.remove("active");
//   });
//   [].forEach.call(tabPanes, function(pane, index){
//     pane.classList.remove("active");
//   });
  
//   // Activate current tab
//   e.target.parentNode.classList.add("active");
//   var clickedTab = e.target.getAttribute("href");
//   document.querySelector(clickedTab).classList.add("active");
// }

// // Apply event listeners
// tabLabels.forEach(function(label, index){
//   label.addEventListener("click", activateTab);
// });

$(document).ready(function() {
  var tabLabels = $("#tabs li");
  var tabPanes = $(".tab-contents");

  function activateTab(e) {
    e.preventDefault();

    tabLabels.removeClass("active");
    tabPanes.removeClass("active");

    var target = $(e.target); 
    if (!target.is("a")) {
      target = target.closest("a"); 
    }

    target.parent().addClass("active");
    var clickedTab = target.attr("href");
    $(clickedTab).addClass("active");
  }

  
  tabLabels.find("a").on("click", activateTab);
});




//Portfolio tabs script //
var tabLabels = document.querySelectorAll("#portfolio-tabs li");
var tabPanes = document.getElementsByClassName("portfolio-tab-contents");

function activateTab(e) {
  e.preventDefault();
  
  // Deactivate all tabs
  tabLabels.forEach(function(label, index){
    label.classList.remove("active");
  });
  [].forEach.call(tabPanes, function(pane, index){
    pane.classList.remove("active");
  });
  
  // Activate current tab
  e.target.parentNode.classList.add("active");
  var clickedTab = e.target.getAttribute("href");
  document.querySelector(clickedTab).classList.add("active");
}

// Apply event listeners
tabLabels.forEach(function(label, index){
  label.addEventListener("click", activateTab);
});
//Portfolio tabs script //



$(document).ready(function(){
    $(window).scroll(function(){
      let scr = $(window).scrollTop();
      //console.log(scr);
      if(scr >= 100){
        $('.logo-nav-strip').addClass('sticky-header');
      }else{
        $('.logo-nav-strip').removeClass('sticky-header');
      }
    });
  });