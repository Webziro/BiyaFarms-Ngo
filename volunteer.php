
    <?php
        include "include/header.php"
    ?>

<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Volunteer</h2>
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
                        <h3 class="title-big">Become a Voluteer</h3>
                        <p class="mb-4 mt-lg-0 mt-2">You can make a diffrence by becoming one of our voluteers *</p>

                        <?php
                            if(isset($_SESSION['message'])){
                              echo $_SESSION['message'];
                              unset($_SESSION['message']);
                            }
                        ?>
                        <form action="form/volunteer-process.php" method="POST" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="name" id="Name" placeholder="Name*" required="">
                                <input type="email" name="email" id="email" placeholder="Email*" required="">
                                <input type="text" name="pnumber" id="Phone" placeholder="Phone number*" required="">
                                <input type="image" name="image" src="assets/images/" placeholder="Phone number" required="">
                                
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-style mt-3">Become a Volunteer </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->

<!-- footer 14 -->
<div class="w3l-footer-main">
  <div class="w3l-sub-footer-content">
     
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