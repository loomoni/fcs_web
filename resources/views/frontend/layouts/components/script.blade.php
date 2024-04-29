  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="{{ url('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ url('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
 
  <!-- Template Main JS File -->
  <script src="{{ url('frontend/assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: 'true',
            includedLanguages: 'hi,en,bn,id,fr,sw',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');

        }

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:4,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            // items:1,
            // margin:30,
            // stagePadding:30,
            // smartSpeed:450
        })
    </script>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "300px";
          document.getElementById("menu-icon").style.display = "none";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("menu-icon").style.display = "block";
        }
    </script>
    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>

    
  <script>
    function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(39.2083,6.7924),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    /**
    * Scroll management
    */
    $(document).ready(function () {

      $('#subscribeModal').appendTo("body") 
      $('#subscribeModal').modal('show');

      // Define the menu we are working with
      var menu = $('.navbar');

      // Get the menus current offset
      var origOffsetY = menu.offset().top;

      /**
      * scroll
      * Perform our menu mod
      */
      function scroll() {

          // Check the menus offset. 
          if ($(window).scrollTop() >= origOffsetY) {

              //If it is indeed beyond the offset, affix it to the top.
              $(menu).addClass('fixed-top');

          } else {

              // Otherwise, un affix it.
              $(menu).removeClass('fixed-top');

          }
      }

      // Anytime the document is scrolled act on it
      document.onscroll = scroll;

    });

    // document.addEventListener("DOMContentLoaded", function() {
    //   const menuToggle = document.querySelector('.menu-toggle-icon');
    //   const menu = document.querySelector('.menu');

    //   menuToggle.addEventListener('click', function() {
    //     menu.classList.toggle('active');
    //   });
    // });
    </script>
    <script>
		$('.owl-carousel').owlCarousel({
			items:1,
			loop:true,
			margin:20,
			nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
		})

      
	</script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAChJNvE8x9PwAl3-TozmGp1mDCy9anvjI&callback=myMap"></script>