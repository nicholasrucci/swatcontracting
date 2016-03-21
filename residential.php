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
                    <li><a class="icon icon-md icon-secondary fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-linkedin" href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="rd-navbar-brand">
                <span class="bsh"></span>
                <h1 class="rd-navbar-brand_name">
                    <a href="./">S.W.A.T.</a>
                </h1>
                <p class="rd-navbar-brand_slogan">Roofing &amp; Contracting</p>
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
                        <li >
                            <a href="./">Home</a>
                        </li>
                        <li >
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
                            <a href="projects.php">Projects</a>
                        </li>
                        <li>
                            <a href="contact.php">Contacts</a>
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
        <!--Residential projects-->
        <section class="well-xl">
            <div class="container">
                <h2 class="text-md-left">residential services</h2>
                <div class="row flow-offset">
                    <div class="col-md-4 col-sm-6">
                        <ul class="marked-list offset-0 text-left">
                            <li><a href="#">Pilings Pinned to Ledge</a></li>
                            <li><a href="#">Pier with Steel Pilings</a></li>
                            <li><a href="#">Steel Framed Pier</a></li>
                            <li><a href="#">Aluminum Pier</a></li>
                            <li><a href="#">Community Pier</a></li>
                            <li><a href="#">Project With No Fixed Pier</a></li>
                            <li><a href="#">Exposed Island Project</a></li>
                            <li><a href="#">Rebuild of Concrete Floats</a></li>
                            <li><a href="#">One of Five Piers Built in Tucker's Cove</a></li>
                            <li><a href="#">Arched Ramp</a></li>
                            <li><a href="#">Several Piers Built on the Cocheco River</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/page4_img-01.jpg" alt=""/>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <img src="images/page4_img-02.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!--End residential projects-->
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
