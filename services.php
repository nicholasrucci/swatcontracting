<?php require_once('includes/head.php'); ?>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header class="bg-image-1">
        <div class="top-part">
            <div class="container">
                <ul class="inline-list top-menu">
                    <li><a href="#">Call now for a FREE estimate</a></li>
                </ul>
                <ul class="inline-list text-right">
                  <li><a class="icon icon-md icon-secondary fa-facebook" href="https://www.facebook.com/pages/SWAT-Contracting/229951837082509" target="_blank"></a></li>
                  <!-- li><a class="icon icon-md icon-secondary fa-google-plus" href="#"></a></li -->
                  <li><a class="icon icon-md icon-secondary fa-twitter" href="https://twitter.com/SWATCONTRACTING" target="_blank"></a></li>
                  <li><a class="icon icon-md icon-secondary fa-youtube" href="https://www.youtube.com/user/SWATContracting" target="_blank"></a></li>
                  <li><a class="icon icon-md icon-secondary fa-linkedin" href="https://www.linkedin.com/in/andrew-dumas-872a3940" target="_blank"></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="rd-navbar-brand">
                <span class="bsh"></span>

                <h1 class="rd-navbar-brand_name">
                  <a href="./"><img src="images/Swat_Logo.jpg" alt="Swat Contracting Logo" /></a>
                </h1>
                <!-- <p class="rd-navbar-brand_slogan">Roofing &amp; Contracting</p> -->
            </div>
            <section class="well-sm text-sm-right">
                <dl>
                    <dt>Toll Free:</dt>
                    <dd><a class="bold" href="callto:#">888.884.9380</a></dd>
                </dl>
            </section>
        </div>
        <section class="well-lg bg-image bg-image-2">

        </section>
        <div id="stuck_container" class="stuck_container">
            <div class="container relative">
                <nav class="nav">
                    <ul class="sf-menu" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li class="active">
                            <a href="services.php">Services</a>
                            <ul>
                              <li><a href="residential.php">Residential</a></li>
                              <li><a href="commercial.php">Commercial</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="employment.php">Employment</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label">
                            <input class="search-form_input" type="text" name="s" autocomplete="off"/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button class="search-form_submit" type="submit"></button>
                    </form>
                </nav>
            </div>
        </div>


    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="text-center">
        <!--Our services-->
        <section class="well-sm well-sm--inset-1 bg-image-1 text-md-left">
            <div class="container">
                <h2>our services</h2>
                <div class="row flow-offset ">
                    <div class="col-sm-6 col-md-6 ">
                        <div class="product product--1">
                            <img src="images/bbbroof.jpg" alt=""/>
                            <div class="product__cnt">
                                <h5><a href="#">Residential</a></h5>
                                <p class="text-primary uppercase small"><strong>S.W.A.T. Roofing &amp; Contracting</strong> offers an extensive list of roofing and contracting services to our residential clients. </p>
                                <span class="icon icon-default-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 ">
                        <div class="product product--1">
                            <img src="images/commercialbbb.jpg" alt=""/>
                            <div class="product__cnt">
                                <h5><a href="#">Commercial</a></h5>
                                <p class="text-primary uppercase small"><strong>S.W.A.T. Roofing &amp; Contracting</strong> offers comple roofing services and repair including commercial, industrial, municipal and more! </p>
                                <span class="icon icon-default-sm"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End our services-->

        <!--Best proposals-->
        <section class="well-md bg-default-variant-1 text-md-left">
            <div class="container">
              <div class="col-sm-6 col-md-8">
                <h3>Contact us for a free estimate!</h3>
              </div>
              <div class="col-sm-6 col-md-4">
                <button class="btn btn-primary btn-md mfProgress">Get your free estimate now!</button>
              </div>
            </div>
        </section>
        <!--End best proposals-->

    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
