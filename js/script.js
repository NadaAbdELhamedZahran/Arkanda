// effect the page
// ===============
(function($) { 
$.fn.visible = function(partial) {
      
      var   $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
};
      
})(jQuery);

var win = $(window);

var allMods = $(".module");

allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
            el.addClass("already-visible"); 
      } 
});

win.scroll(function(event) {
      allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                  el.addClass("come-in"); 
            } 
      });
});
// ========================================================================================
// slide on our creative page
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
      showSlides(slideIndex += n);
}
    
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
        slideIndex = 1;
      }    
  if (n < 1) {
        slideIndex = slides.length;
      }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}

// ================================================================
// chat button
function openForm() {
      document.getElementById("myForm").style.display = "block";
}
    
function closeForm() {
      document.getElementById("myForm").style.display = "none";
}

// =======================================================================
// top button & nav
//Get the button
var mybutton = document.getElementById("myBtn");

// nav
var mynav = document.getElementById("navbar");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            mynav.style.backgroundColor = "lavenderblush";
            mynav.style.width = "60%";
      } 
      else {
            mybutton.style.display = "none";
            mynav.style.backgroundColor= "white";
            mynav.style.width = "60%";
      }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// =============================================================================================
