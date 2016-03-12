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
                    <li><a href="#">sitemap</a></li>
                    <li><a href="#">faq</a></li>
                </ul>
                <ul class="inline-list text-right">
                    <li><a class="icon icon-md icon-secondary fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-rss" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-pinterest" href="#"></a></li>
                    <li><a class="icon icon-md icon-secondary fa-linkedin" href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="rd-navbar-brand">
                <span class="bsh"></span>
                <h1 class="rd-navbar-brand_name">
                    <a href="./">mariner</a>
                </h1>
                <p class="rd-navbar-brand_slogan">marine construction</p>
            </div>
            <section class="well-sm text-sm-right">
                <dl>
                    <dt>Free phone:</dt>
                    <dd><a class="bold" href="callto:#">+ 8 800 757 43 92</a></dd>
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
                            <a href="index-1.php">About</a>
                            <ul>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                    <ul>
                                        <li>
                                            <a href="#">History</a>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
                                        </li>
                                        <li>
                                            <a href="#">Testimolials</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.php">Services</a>
                        </li>
                        <li >
                            <a href="index-3.php">Projects</a>
                        </li>
                        <li class="active">
                            <a href="index-4.php">Contacts</a>
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
        <!--Map-->
        <section class="well-xl well-xl--inset-1">
            <div class="container">
                <div class="map">
                    <div id="google-map" class="map_model map_model--1"></div>
                    <ul class="map_locations">
                        <li data-x="-73.9874068" data-y="40.643180">
                            <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End map-->

        <!--How we can help-->
        <section class="well-md bg-default-variant-1">
            <div class="container">
                <div class="row flow-offset">
                    <div class="col-md-4 text-center text-md-left">
                        <h3>addresses</h3>
                        <p class="small uppercase brdr offset-2 text-secondary">exercitationem ullam corporis</p>
                        <div class="contact-info">
                            <address>
                                <dl>
                                    <dt class="heading-5 text-secondary uppercase">address 1:</dt>
                                    <dd>The Company Name Inc.</dd>
                                    <dd>8901 Marmora Road, Glasgow, D04 89GR.</dd>
                                    <dt class="heading-5 text-secondary uppercase">Telephones:</dt>
                                    <dd> <a href="callto:#">+1 800 559 6580</a></dd>
                                    <dd> <a href="callto:#">+1 800 603 6035</a></dd>
                                    <dt class="heading-5 text-secondary uppercase">address 2:</dt>
                                    <dd>The Company Name Inc.</dd>
                                    <dd>9863 - 9867 Mill Road, Cambridge, MG09 99HT.</dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-8 text-center">
                        <h3 class="text-md-left">contact form</h3>
                        <p class="small uppercase brdr text-md-left offset-2 text-secondary">exercitationem ullam corporis</p>
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

    </main>
    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
