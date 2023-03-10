<?php
include "include/header.php"
?>

<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Training and Empowerment</p>
                                    <h5>Free Training and Empowerment for women and farmers in fish and poultry farming.</h5>
                                    <a href="about.php" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                <p>Make a Child Smile</p>
                                    <h5>One random act of kindness can change the world.
                                        be the reason why a child smile.
                                    </h5>
                                    <a href="about.php" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Unconditional Help</p>
                                    <h5>Give a Helping hand. We all need to come together.</h5>
                                    <a href="about.php" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>

            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <p>Unconditional Love</p>
                                    <h5>Needs for internally displaced persons in Borno State, Nigeria.</h5>
                                    <a href="about.php" class="btn btn-primary btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>

        </div>
    </div>
</section>
<!-- /main-slider -->
<!-- banner image bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="../../../../../../../www.w3.org/2000/svg.php">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor">
            </path>
        </svg>
    </div>
</div>
<!-- //banner image bottom shape -->
<!-- home page block1 -->
<section class="homeblock1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box-wrap">
                    <h4><a href="mission.php">View our Mission</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-sm-4 mt-3">
                <div class="box-wrap">
                    <h4><a href="vision.php">Read our Vision</a></h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-sm-4 mt-3">
                <div class="box-wrap">
                    <h4><a href="contact.php">View our Vision</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page block1 -->
<!-- middle -->

                        <?php
                            if(isset($_SESSION['msg'])){
                                echo($_SESSION['msg']);
                                unset($_SESSION['msg']);
                            }
                        ?>
	<div class="middle py-5" id="facts">
		<div class="container pt-lg-3">
			<div class="welcome-left text-center py-md-5 py-3">
                <h3 class="title-big">All Support and Donations go directly to all our Projects.</h3>
                <h4>Thank you for your continued Support </h4>
				<a href="donate.php" class="btn btn-style btn-primary mt-sm-5 mt-4"><span class="fa fa-heart mr-1"></span> Donate Now</a>
			</div>
		</div>
	</div>
	<!-- //middle -->

<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <img src="assets/images/donate.png" alt="">
                    <h4><a href="#feature" class="title-head">Give Donation.</a></h4>
                    <p class="mb-3">You can help support and empower one person with your donations.</p>
                    <a href="donate.php" class="btn btn-text">Donate Now </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                <div class="area-box">
                    <img src="assets/images/volunteer.png" alt="">
                    <h4><a href="#feature" class="title-head">Become a Super Volunteer.</a></h4>
                    <p class="mb-3">Voluteers are special creatures because they invest their resources make others better. Become a Voluteer today.</p>
                    <a href="contact.php" class="btn btn-text">Join Now </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5">
                <div class="area-box">
                    <img src="assets/images/child.png" alt="" width="52px"> 
                    <h4><a href="#feature" class="title-head">Empower a Child</a></h4>
                    <p class="mb-3">Be the reason why a child has a better future. Help empower one child today. Donate directly to our account</p>
                    <a href="donate.php" class="btn btn-text">Help Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->
<!-- stats -->
<section class="w3_stats py-5" id="stats">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center">
            <h3 class="title-big">Our mission is to help empower women and children through skills acquization and Farming.</h3>
        </div>
        <div class="w3-stats text-center">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-users"></span>
                        <div class="timer count-title count-number mt-3" data-to="1500" data-speed="1500"></div>
                        <p class="count-text ">Total Empowerment</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-cloud"></span>
                        <div class="timer count-title count-number mt-3" data-to="2256" data-speed="65"></div>
                        <p class="count-text ">Total Projects</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-male"></span>
                        <div class="timer count-title count-number mt-3" data-to="5000" data-speed="1500"></div>
                        <p class="count-text ">Total People reached</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <span class="fa fa-female"></span>
                        <div class="timer count-title count-number mt-3" data-to="260" data-speed="1500"></div>
                        <p class="count-text ">Total Voluteeres</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!-- bg -->
<div class="w3l-bg py-5" id="w3l-bg">
    <div class="container py-lg-5 py-md-4">
        <div class="welcome-left text-center py-lg-4">
            <span class="fa fa-heart-o"></span>
            <h3 class="title-big">Help the Homeless the Indigent and the Destitude.</h3>
            <a href="donate.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Donate Now</a>
        </div>
    </div>
</div>
<!-- //bg -->
<section class="w3l-index5 py-5" id="causes">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="header-section">
                    <h3 class="title-big">Our Humanitarian Projects </h3>
                    <h4>Do you need to talk to us or become a voluteer? <a href="volunteer.php">Send your details to us.</a></h4>
                    <p class="mt-3 mb-lg-5 mb-4"> Everyday, people like you join us to make a diffrence. You can become part of us today.</p>
                </div>
                <a href="contact.php" class="btn btn-outline-primary btn-style">Contact Us</a>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                <div class="img-block">
                    <a href="donate.php">
                        <img src="assets/images/Idpvisit.jpeg" class="img-fluid radius-image-full" alt="image" />
                        <span class="title">Assessment of needs for IDP in MMC, Konduga, Bama,Damboa in Borno State Nigeria.</span>
                    </a>
                </div>

                <div class="img-block">
                    <a href="about.php">
                        <img src="assets/images/empower5.jpeg" class="img-fluid radius-image-full" alt="image" />
                        <span class="title">Empowerment of the IPD community</span>
                    </a>
                </div>
                <div class="img-block mt-4">
                    <a href="donate.php"> <img src="assets/images/empower4.jpeg" class="img-fluid radius-image-full"
                            alt="image" />
                        <span class="title">Assessment of needs for (IDP) in MMC, Konduga, Bama, Gwoza, Mafa, Dikwa, Damboa in Borno State Nigeria.</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4">
                <div class="img-block">
                    <a href="donate.php"> <img src="assets/images/empower.jpeg" class="img-fluid radius-image-full"
                            alt="image" />
                        <span class="title">Empowerment of freshly trained farmers.</span>
                    </a>
                </div>
                <div class="img-block mt-4">
                    <a href="donate.php">
                        <img src="assets/images/empower2.jpeg" class="img-fluid radius-image-full" alt="image" />
                        <span class="title">Empowerment of women in the rural areas</span>
                    </a>
                </div>

                <div class="img-block">
                    <a href="contact.php">
                        <img src="assets/images/womenempower.jpeg" class="img-fluid radius-image-full" alt="image" />
                        <span class="title">Empowerment of women in IDP camps community</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="w3-services-ab py-5" id="mission">
    <div class="container py-lg-5 py-md-4">
        <h3 class="title-big text-center mb-5">Our Mission and Goals</h3>
        <div class="w3-services-grids">
            <div class="fea-gd-vv row">
                <div class="col-lg-4 col-md-6">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="assets/images/home.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Rehabilitation</h5>
                            <p> To rehablitate and train indigent persons in our society  </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="float-mid feature-gd">
                        <div class="icon">
                            <img src="assets/images/education.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Empowerment</h5>
                            <p> To help empower as much person with a farming skill </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="float-rt feature-gd">
                        <div class="icon">
                            <img src="assets/images/health.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Education</h5>
                            <p> To help reduce the number of out of school children through provision of litracy classes for children in the IDP camps  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="assets/images/icon1.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Advocacy</h5>
                            <p>Help Advocate for the needs of persons needing special intervention. </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="assets/images/home.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Awearness</h5>
                            <p> Help call the attention of government and other relevant agencies to the plight of people in disadvantaged areas</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                    <div class="float-lt feature-gd">
                        <div class="icon">
                            <img src="assets/images/eco.png" alt="" class="img-fluid">
                        </div>
                        <div class="icon-info">
                            <h5>Rescue</h5>
                            <p> To help rescue and reunite people back to their families </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 
<section class="w3l-clients py-5" id="clients">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
            <h3 class="title-big text-center">Our Partners</h3>
            <div class="company-logos text-center mt-5">
                <div class="row logos">
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="assets/images/brand2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 mt-md-0 mt-4">
                        <img src="assets/images/brand4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 mt-lg-0 mt-4">
                        <img src="assets/images/brand6.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
                          <p>We will send you updates of our future programs</p>
                      </div>
                      <div class="form-text grid-three-column">
                          <form action="form/newsletter.php" method="POST">
                              <input type="email" name="semail" placeholder="Enter Your Email" required="">
                              <button type="submit" name="submit"  class="btn btn-style btn-primary">Submit</button>
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
//   $(window).on("scroll", function () {
//     var scroll = $(window).scrollTop();

//     if (scroll >= 80) {
//       $("#site-header").addClass("nav-fixed");
//     } else {
//       $("#site-header").removeClass("nav-fixed");
//     }
//   });

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/01-09-2020/savepoor-liberty-demo_Free/1012221799/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 21:25:21 GMT -->
</html>