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
                    <li><a href="contact.php">Call now for a FREE inspection toll free 888.884.9380</a></li>
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
                        <li>
                            <a href="services.php">Services</a>
                            <ul>
                              <li><a href="residential.php">Residential</a></li>
                              <li><a href="commercial.php">Commercial</a></li>
                            </ul>
                        </li>
                        <li >
                            <a href="employment.php">Employment</a>
                        </li>
                        <li class="active">
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


        <!--How we can help-->
        <section class="well-xl well-xl--inset-1">
            <div class="container">
                <div class="row flow-offset">
                    <div class="col-md-4 text-center text-md-left">
                        <h3>addresses</h3>
                        <p class="small uppercase brdr offset-2 text-secondary">Come visit us!</p>
                        <div class="contact-info">
                            <address>
                                <dl>
                                    <dt class="heading-5 text-secondary uppercase">Dallas Location:</dt>
                                    <dd>4500 Mercantile Plaza</dd>
                                    <dd>Fort Worth, TX 76137</dd>
                                    <dt class="heading-5 text-secondary uppercase">Telephones:</dt>
                                    <dd><strong>Toll Free: </strong><br /><a href="callto:#">888.884.9380</a></dd>
                                    <dd><strong>Fort Worth: </strong><br /><a href="callto:#">817.756.6666</a></dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-8 text-center">
                        <h3 class="text-md-left">contact form</h3>
                        <p class="small uppercase brdr text-md-left offset-2 text-secondary">Contact us and we will get back to you ASAP</p>
                        <form class='mailform' method="post" action="bat/rd-mailform.php">
                            <input type="hidden" name="form-type" value="contact"/>
                            <fieldset>
                                <div class="row flow-offset">
                                    <div class="col-md-4 col-sm-4 inset-3 offset">
                                        <label data-add-placeholder="">
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Name*"
                                                   data-constraints="@LettersOnly @NotEmpty"/>
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-4 inset-4 offset">
                                        <label data-add-placeholder="">
                                            <input type="text"
                                                   name="email"
                                                   placeholder="E-mail*"
                                                   data-constraints="@Email @NotEmpty"/>
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-4 inset-5 offset">
                                        <label data-add-placeholder="">
                                            <input type="text"
                                                   name="email"
                                                   placeholder="Phone"
                                                   data-constraints="@Phone"/>
                                        </label>
                                    </div>
                                </div>

                                <label class="offset" data-add-placeholder="">
                                        <textarea name="message" placeholder="Message*"
                                                  data-constraints="@NotEmpty"></textarea>
                                </label>

                                <div class="mfControls">
                                    <button class="btn btn-primary btn-md" type="submit">Submit</button>
                                    <p>*required fields</p>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End how we can help-->

        <!--Map-->
        <section class="well-sm bg-default-variant-1">
            <div class="container">
                <div class="map">
                    <div id="google-map" class="map_model map_model--1"></div>
                    <ul class="map_locations">
                      <li data-x="-97.3118676" data-y="32.8225778">
                        <p>4500 Mercantile Plaza Fort Worth, TX 76137 <span>888-884-9380</span></p>
                      </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End map-->

      </main>
    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
