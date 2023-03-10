

    <?php
        include "include/header.php"
    ?>

<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">About Us</h2>
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
<section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-6">
            <h3 class="title mt-4">"We have Over 5 Years of Accomplishments and empowering people”</h3> <br><br>
                <h5 class="title-small">Get to know about us</h5>
                <h3 class="title-big">Welcome to Biyafarms Initiative for the Less Privileged </h3>
                <p class="mt-3">BFILP is an NGO based in Nigeria, we are committed to improving human lives through rehabilitation, empowerment and education</p>
                <p class="mt-3">We have helped to empower women and reunite a lot of children back to their parents.</p>
                
                <a href="#MoreAboutUs" class="btn btn-primary btn-style mt-lg-5 mt-4">Learn More about Us</a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <img src="assets/images/about.jpeg" alt="" class="radius-image img-fluid">
            </div>
        </div>
    </div>
</section>
 <!-- forms -->
 <section class="w3l-forms-9 py-5" id="">
     <div class="main-w3 py-lg-5 py-md-3">
         <div class="container">
             <div class="row align-items-center">
                 <div class="main-midd col-lg-9">
                     <h3 class="title-big">Facts about BFILP</h3>
                     <p class="mt-3">We are the only NGO in Northern Nigeria, commited to the plight of Almajiri children and commited to 
                        improving and empowering the plight of women in IDP camps all accross the northern states.</p>
                 </div>
                 <div class="main-midd-2 col-lg-3 mt-lg-0 mt-4 text-lg-right">
                     <a class="btn btn-style btn-primary" href="donate.php"><span class="fa fa-heart mr-1"></span> Donate
                         Now </a>
                 </div>
             </div>

             <div class="donar-img  mt-5" id="donor-img">
              
            </div>
         </div>
     </div>
 </section>
<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-big">Happy Volunteers</h3>
            </div>
            <div class="team-row mt-md-5 mt-4">
                <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/volun2.jpeg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Luke Gdjson</a>
                        <p>Volunteer</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="assets/images/volun5girl.jpeg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Aisha Muhammed</a>
                        <p>Volunteer</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/volun3.jpeg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Ngozi Joy </a>
                        <p>Volunteer</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="team-wrap">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/volun4.jpeg" alt="" class="radius-image img-fluid">
                        </div>
                        <a href="#url" class="team-title">Sara Peace</a>
                        <p>Volunteer</p>
                    </div>
                </div>
                <!-- end team member -->
            

                <div class="team-apply">
                    <a href="volunteer.php" class="team-title m-0"><span class="fa fa-plus-circle d-block mb-3"></span> Apply for Volunteer</a>
                </div>

            </div>
        </div>
</section>
<!--//team-sec-->

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/01-09-2020/savepoor-liberty-demo_Free/1012221799/web/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 21:25:39 GMT -->
</html>