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

    <title> <?php echo $title ?> </title>

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
<!-- //header -->
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"><?php echo $title; ?></h2>
        </div>
    </section>
</div>

<section class="w3l-aboutblock2" id="story">
    <div class="py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="cwp4-two">
                <div class="cwp4-text">
                    <h3 class="title-big">Our Mission</h3>
                    <ul class="cont-4 mt-4">
                        <li><span class="fa fa-check"></span>We are committed to improving human lives through our rehabilitation.</li>
                        <li><span class="fa fa-check"></span> We are committed to ending hunger through empowerment with a farming skill</li>
                        <li><span class="fa fa-check"></span>We ar committed to reducing malnutrition in women and children</li>
                        <li><span class="fa fa-check"></span>We are committed to decreasing the numbers of out of school children</li>
                        <li><span class="fa fa-check"></span>We are committed to reuniting children and their parents</li>
                    </ul>
                </div>
                <div class="cwp4-text mt-md-5 mt-4">
                    <h3 class="title-big">How you can Help</h3>
                    <ul class="cont-4 mt-4">
                        <li><span class="fa fa-check"></span>We want to do more and you can help. By committing a small
                            fraction of your income to protect children in need, you can help save a child and
                            contribute to humanity.</li>
                        <li><span class="fa fa-check"></span>You can help us empower more women and bring them out of poverty.</li>
                    </ul>
                    <a href="donate.php" class="btn btn-style btn-primary mt-md-4 mt-2"> I Want to donate</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                  <div class="footers14-bottom d-flex">
                      <div class="copyright">
                          <p>© 2020 Save Poor. All rights reserved. Design by <a href="../../../../../../../w3layouts.com/index.php"
                                  target="_blank">W3Layouts</a></p>
                      </div>
                      
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/01-09-2020/savepoor-liberty-demo_Free/1012221799/web/causes.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 21:25:41 GMT -->
</html>