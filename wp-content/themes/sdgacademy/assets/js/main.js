// Change Navbar background on scroll
$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      $(".nav-link, .navBrand ").removeClass("colorWhite").addClass("colorBlack"); 
    });
  });

// LOGO CODE
  var nav6 = $('#change').children('.holder').each(function(i) {
    TweenLite.set(this, {rotation:21*i});
    }).end();
    
    var tl = new TimelineLite({paused:true});
    var nav = document.getElementById('change')
    
    var gorilla = gsap.to(nav, 60, {rotation:"360", ease:Linear.easeNone, repeat:-1});
    
     
    
  $(document).on("mouseenter", ".holder img", function() {
      tl.pause();
  }).on("mouseleave", ".holder a", function(){
      tl.play();
  });
  
  
  const draggable = Draggable.create("#change", {
    type: "rotation",
    inertia: true,
    onDrag: function() {
    gorilla.pause
    }
  });