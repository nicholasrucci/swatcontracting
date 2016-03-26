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
                    <li><a class="icon icon-md icon-secondary fa-pinterest" href="#"></a></li>
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
              <h2 class="text-md-left">commercial services</h2>
                <div class="row text-md-left flow-offset">
                    <div class="col-md-6 col-sm-6 ">
                        <img src="images/commercialbbb.jpg" alt=""/><br /><br />
                    </div>
                    <div class="col-md-6 col-sm-6 ">
                      <ul class="marked-list offset-0 text-left">
                          <h5><strong>S.W.A.T. Roofing &amp; Contracting</strong> provides complete roofing services and repair, such as:</h5><br />
                          <li>Industrial</li>
                          <li>Municipal</li>
                          <li>Churches</li>
                          <li>Sheet Metal</li>
                          <li>TPO</li>
                          <li>PVC</li>
                          <li>EPDM</li>
                          <li>Green Roofs</li>
                      </ul>
                    </div>
                </div>
              <h3 class="text-md-left">Details</h3> 
              <div class="row flow-offset">
                    <div class="col-md-6 col-sm-6">
                      <ul class="marked-list offset-0 text-left">
                        <li><strong>TPO</strong> membranes are single-ply roof membranes constructed from ethylene propylene rubber. They are designed to combine the durability of EPDM rubber with the proven performance of hot-air weldable seams. They have been tested as having excellent resistance to ozone, are algae-resistant, environmentally friendly and safe to install.</li>
                        <li><strong>PVC</strong> roofing is highly reliable, and the reinforced PVC roofing membrane has even more attributes than regular PVC and other forms of roof sheathing. A PVC roofing membrane is a layer of sheathing that provides additional insulation, protection, and sound-deadening features, and is placed over an existing flat or shingled roof.</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                         <ul class="marked-list offset-0 text-left">
                        <li><strong>EPDM</strong> is classified as a Thermoset material which means it is either fully-cured prior to being installed or that it cures during natural weathering after installation. EPDM roofs are single-ply membranes meaning there is only one ply of roofing material, not multiple plies laminated together.</li>
                        <li><strong>Green roof</strong> systems are an extension of the existing roof which involves a high quality water proofing and root repellant system, a drainage system, filter cloth, a lightweight growing medium and plants.</li>
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
