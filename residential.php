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
        <!--Residential Employment-->
        <section class="well-xl bg-image-1">
            <div class="container">
              <h2 class="text-md-left">residential services</h2>
              <div class="row flow-offset">
                    <div class="col-md-6 col-sm-6">
                        <img src="images/neighborhood.jpg" alt=""/><br /><br />
                        <ul class="marked-list offset-0 text-left">
                            <h5>Painting</h5>
                            <li>Painting and/or stained by professionals</li><br />
                            <h5>Interior</h5>
                            <li>Water-damaged patch work on walls and ceilings</li>
                            <li>Acoustic Texture (such as popcorn)</li>
                            <li>Crown Molding Replacement</li>
                            <li>Applying Anti-Microbial Agent</li>
                            <li>Hanging Drywall - ready for painting and/or texture</li><br />
                            <h5>Siding</h5>
                            <li>James Hardie</li>
                            <li>Vinyl</li>
                            <li>Wood</li>
                        </ul>
                   </div>
                    <div class="col-md-6 col-sm-6">
                         <ul class="marked-list offset-0 text-left">
                            <h5>Roofing</h5>
                            <li>Composition Shingles, Metal, Woodshake, Tile, Copper, Living Roofs, Cool Coatings, Impact Resistant Roofs, TPO, Single Ply, Multi-Ply, Metal Shake, Green Roofs, Synthetic Roofs, Foam Roofs</li>
                            <li>High Roofs</li>
                            <li>Steep Slope</li>
                            <li>Low Slope</li>
                            <li>Flat Applications</li><br />
                            <h5>Windows</h5>
                            <li>Vinyl Bead Gazing</li>
                            <li>Replace Window Screens</li><br />
                            <h5>Emergency Services</h5>
                            <li>24 Hour</li>
                            <li>Temporary Cover ups</li><br />
                            <h5>Gutters</h5>
                            <li>Standard &amp; Oversized</li><br />
                            <h5>Radiant Barrier Insulation</h5>
                            <li>Reduces your air conditioning-related electric bills by 10-15% or more annually</li>
                            <li>Keeps your home cooler in summer and warmer in winter, and equalizes rooms that are always hotter or colder than the rest of your house</li>
                            <li>Increases the lifespan and effectiveness of your air conditioning unit </li>
                            <li>Makes your existing insulation work more effectively</li>
                            <li>Increases your home's resale value</li><br />
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <!--End residential Employment-->

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
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
