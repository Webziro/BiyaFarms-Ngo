<?php
    session_start();

?>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      <h1><a class="navbar-brand mr-lg-5" href="index.php">
        <img src="assets/images/logo.png" alt="Your logo" title="Your logo" />Save Poor
        </a></h1>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown @@pages__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@causes__active" href="causes.php">Causes</a>
              <a class="dropdown-item @@causes__active" href="mission.php">Mission</a>
              <a class="dropdown-item @@donate__active" href="donate.php">Donate Now</a>
              <a class="dropdown-item @@error__active" href="error.php">404 Error page</a>
              <a class="dropdown-item" href="landing-single.php">Landing page</a>
            </div>
          </li>
          <li class="nav-item dropdown @@blog__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Blog<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@b__active" href="blog.php">Blog posts</a>
              <a class="dropdown-item @@bs__active" href="blog-single.php">Blog single</a>
            </div>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="ml-lg-auto mr-lg-0 m-auto">
            <!--/search-right-->
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                  <div class="popup">
                      <h4 class="mb-3">Search here</h4>
                      <form action="https://demo.w3layouts.com/demos_new/template_demo/01-09-2020/savepoor-liberty-demo_Free/1012221799/web/error.php" method="GET" class="search-box">
                          <input type="search" placeholder="Enter Keyword" name="search" required="required"
                              autofocus="">
                          <button type="submit" class="btn btn-style btn-primary">Search</button>
                      </form>

                  </div>
                  <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
          </div>
          <!--//search-right-->
          </li>
          <li class="align-self">
            <a href="donate.php" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa fa-heart mr-1"></span> Donate</a>
          </li>
        </ul>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!-- //header -->
