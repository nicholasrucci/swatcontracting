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
        <section class="well-sm well-sm--inset-1 text-md-left bg-image-1">
            <div class="container">
              <h2>Become a Member of S.W.A.T Roofing &amp; Contracting</h2>
                <div class="row flow-offset">
                    <div class="col-md-8 text-center text-md-left">
                      <img src="images/employment.jpg" alt="Employment" />
                      <p>Great companies are built with great people. <strong>S.W.A.T. Roofing &amp; Contracting</strong> is no different. We've built a great roofing and contracting company with a solid business reputation and it's our people that make the difference. If this sounds like the kind of place you're looking for, S.W.A.T. Roofing & Contracting is confident we have a place for you. As a member of our team, one of the nation's fastest growing roofing and construction companies, you'll experience a positive, inclusive work environment with competitive pay and benefits.</p>
                      <p><strong>S.W.A.T. Roofing &amp; Contracting</strong> is committed to attracting and developing the best and brightest people from diverse backgrounds, and we give our associates the tools, training, and resources they need to succeed.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h3 class="text-md-left">contact form</h3>
                        <p class="small uppercase brdr text-md-left offset-2 text-secondary">Contact us and we will get back to you with employment opportunities ASAP</p>
                        <form class='mailform' method="post" action="bat/rd-mailform.php">
                            <input type="hidden" name="form-type" value="contact"/>
                            <fieldset>
                                <div class="row flow-offset">
                                    <div class="col-md-12 col-sm-12 inset-12 offset">
                                        <label data-add-placeholder="">
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Name*"
                                                   data-constraints="@LettersOnly @NotEmpty"/>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 inset-12 offset">
                                        <label data-add-placeholder="">
                                            <input type="text"
                                                   name="email"
                                                   placeholder="E-mail*"
                                                   data-constraints="@Email @NotEmpty"/>
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 inset-12 offset">
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

        <section class="well-md bg-default-variant-1 text-md-left">
            <div class="container">
              <div class="col-sm-6 col-md-8">
                <h3>Contact us for a free estimate!</h3>
              </div>
              <div class="col-sm-6 col-md-4">
               <a href="contact.php"><button class="btn btn-primary btn-md mfProgress">Get your free estimate now!</button></a>
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
