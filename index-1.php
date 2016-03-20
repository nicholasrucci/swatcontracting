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
                <p class="rd-navbar-brand_slogan">Roofing &amp; Contruction</p>
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
                        <li class="active">
                            <a href="index-1.php">About</a>
                        </li>
                        <li>
                            <a href="index-2.php">Services</a>
                            <ul>
                              <li><a href="residential.php">Residential</a></li>
                              <li><a href="commercial.php">Commercial</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-3.php">Projects</a>
                        </li>
                        <li>
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
        <!--Who we are-->
       <section class="well-sm well-sm--inset-1 bg-image-1">
           <div class="container">
               <div class="row flow-offset text-md-left">
                   <div class="col-md-6 col-sm-6 text-sm-left">
                       <img src="images/aboutPic.jpg" alt=""/>
                   </div>
                   <div class="col-md-4 col-sm-12">
                      <h2>Who We Are</h2>
                       <p><strong>S.W.A.T. Roofing &amp; Contracting</strong> is a nationally recognized storm restoration company and continues to set many of the standards in the industry. We are abreast of the latest technologies in the restoration industry and our members have been trained by the manufacturers to learn the most up to date installation procedures the industry has to offer.</p>
                       <p>Our team will gladly provide you proof of our certifications with the manufacturers. The owner of <strong>S.W.A.T. Roofing &amp; Contracting</strong> has the distinguished honor of being part of the <i>Professional Roofers Advisory Council</i>. This organization is comprised of the leaders in the roofing industry.</p>
                   </div>
               </div>
           </div>
       </section>
        <!--End who we are-->
        <!--Start advantages-->
        <section class="well-md">
            <div class="container">
              <h3>Testimonials</h3>
                <div class="row text-md-left flow-offset">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="quote">
                            <p><q>"I am writing to express my heartfelt gratitude for the salesman, staff, and crew of SWAT Contracting. was bombarded by roofing companies to fix my roof & SWAT stood out above all the rest. Gabe Cortez was the first to contact me from SWAT. He was very courteous and understanding of my needs. He was also very professional - his uniform and presentation were the top of the line. Thank you for all the time you put into making this process so easy. The crew that installed my beautiful, new roof were prompt, courteous &amp; VERY professional as well. When they were finished, all trash debris was gone - no nails were left in my yard."</q>
                            </p>
                            <p><cite class="uppercase small">Mrs. J.W.G</cite><br>Fort Worth, TX</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="quote">
                          <p><q>I was watching the local news station after the bad weather came came through and I watched Andrew Dumas with SWAT Contracting on a featured story about how to hire a trustworthy and legitimate contractor. I have been watching this local news station for years now and I know if they trust SWAT Contracting enough to do a story with them then, that is who I need to use. I emailed them immediately and they showed up to my home that same day. They were instrumental in working with my insurance company directly to get my property restored to it's original condition. These guys are the best. I will definitely continue to refer SWAT Contracting to all my family and friends.</q>
                          </p>
                          <p><cite class="uppercase small">Jamie W.</cite><br>Plano, TX</p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="quote">
                            <p><q>Thank you very much for all the effort you put into repairing the damage done to my home. I met you along with several of your crew and sales team & everyone proved that they had my best interest at heart. All of you were professional & very kind. The fact that the younger ones on your staff called me Sir was impressive. Young people don't seem to do that anymore. Although my home is somewhat small, each of you treated it as if it were a mansion. Again, thank you very much for all that you did to take care of my home.</q>
                            </p>
                            <p><cite class="uppercase small">Joseph H.</cite><br>Plano, TX</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End advantages-->
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
  <?php require_once('includes/footer.php'); ?>
</div>
<script src="js/script.js"></script>
</body>
</html>
