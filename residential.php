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
                    <div class="col-md-7 col-sm-6">
                      <img src="images/neighborhood.jpg" alt=""/><br /><br />
                    </div>
                    <div class="col-md-5 col-sm-6">
                       <p style="text-align:left;"><strong>S.W.A.T. Roofing &amp;Contracting</strong> offers an extensive list of roofing and contracting services to our residential clients. We specialize in roof construction, roof replacement, roof repairs due to hail/wind/storm damage restoration for roofing, or old roof replacements due to simple wear and tear. We are focused on providing professional storm damage repair and roof restoration services for residential homeowners affected by natural disasters in the Dallas/Fort Worth Metroplex as well as Nationwide.</p> 
                    </div>
                </div>
                <div class="row flow-offset">
                    <div class="col-md-4 col-sm-6">
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
                    <div class="col-md-6 col-sm-6">
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
