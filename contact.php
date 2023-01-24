<?php

  include "include/title.php";
?>

<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $title; ?></title>

    <link href="../../../../../../../fonts.googleapis.com/css29cf4.css?family=DM+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
  </head>
  <body>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>

    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

    <?php
        include "include/header.php"
    ?>

<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="../../../../../../../www.w3.org/2000/svg.php">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>

                        <?php
                            if(isset($_SESSION['message'])){
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                            }
                        ?>
                        <form action="form/process.php" method="POST" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="name" id="Name" placeholder="Name*" required="">
                                <input type="email" name="email" id="email" placeholder="Email*" required="">
                                <input type="text" name="pnumber" id="Phone" placeholder="Phone number*"
                                    required="">
                                <input type="text" name="subject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="message" id="w3lMessage" placeholder="Message"></textarea>
                            <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-style mt-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>235 Terry, 10001 20C Trolley Square, DE 19806 U.S.A. </p>
                            <p> <a href="mailto:info@example.com"><span
                                        class="fa fa-envelope"></span>info@example.com</a></p>
                            <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +44-000-888-999</a></p>
                            <a href="donate.php" class="btn btn-style btn-outline-primary mt-4">
                                <span class="fa fa-heart mr-1"></span> Make Donation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
        frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>
<!-- footer 14 -->
<div class="w3l-footer-main">
  <div class="w3l-sub-footer-content">
      <section class="_form-3">
          <div class="form-main">
              <div class="container">
                  <div class="middle-section grid-column top-bottom">
                      <div class="image grid-three-column">
                          <img src="assets/images/subscribe.png" alt="" class="img-fluid radius-image-full">
                      </div>
                      <div class="text-grid grid-three-column">
                          <h2>Subscribe our Newsletter to receive latest updates from us</h2>
                          <p>We won’t give you spam mails.</p>
                      </div>
                      <div class="form-text grid-three-column">
                          <form action="https://demo.w3layouts.com/" method="GET">
                              <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                              <button type="submit" class="btn btn-style btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Footers-14 -->
               <?php
                        include "include/footer.php";
                    ?>
                  </div>
              </div>
          </div>
          <!-- move top -->
          <button onclick="topFunction()" id="movetop" title="Go to top">
              &uarr;
          </button>
          <script>
              // When the user scrolls down 20px from the top of the document, show the button
              window.onscroll = function () {
                  scrollFunction()
              };

              function scrollFunction() {
                  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                      document.getElementById("movetop").style.display = "block";
                  } else {
                      document.getElementById("movetop").style.display = "none";
                  }
              }

              // When the user clicks on the button, scroll to the top of the document
              function topFunction() {
                  document.body.scrollTop = 0;
                  document.documentElement.scrollTop = 0;
              }
          </script>
          <!-- /move top -->

      </footer>
      <!-- Footers-14 -->
  </div>
</div>
<!-- //footer 14 -->

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      dots: false,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        736: {
          items: 1
        },
        1000: {
          items: 2,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/counter.js"></script>

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->

</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/01-09-2020/savepoor-liberty-demo_Free/1012221799/web/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 21:25:42 GMT -->
</html>