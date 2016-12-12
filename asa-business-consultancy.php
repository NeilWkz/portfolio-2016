<?php include "partials/head.php"; ?>

<body class="brdr-black">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class=" col-xs-12 col-sm-4 bottom">
                    <div id="logo" class="marquee">
                        <h1><a href="index.php?played=true">
                        <!-- words span wrapped for control -->
                            <span class="n">Neil</span>
                            <span class="r">Ross</span>
                            <span class="f">Frontend</span>
                            <span class="d">Dev.</span>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-2 co middle">
                    <nav>
                        <ul class="row between-xs">
                            <li class="col-xs"><a href="portfolio.php">Portfolio</a></li>
                            <li class="col-xs"><a href="cv.php">Curriculum Vitae</a></li>
                            <li class="col-xs"><a href="index.php?played=1&contact=1">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /container -->
        <div class="brdr-box"></div>
    </header>

    <main class="content with-hero">
    <section class="case-study">
    <div class="hero">
    <picture>

  <source media="(min-width: 48em)"
          srcset="/images/portfolio/asa-business/asa-home-md.jpg">
        <img src="/images/portfolio/asa-business/asa-home.jpg" alt="The Asa Business Consultancy Website on Macbook Pro, Ipad and Iphone">
    </picture>
    </div>
        <div class="wrap container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 ">
                <h1>Asa Business Consultancy</h1>
                <p>A responsive site to promote Asa Business Consultancy.</p>
                <a href="http://www.asabusiness.co.uk/" class="button sml-arrow">View Site</a>
              
                
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <img src="images/portfolio/left-baggage/left-luggage-stores.jpg">
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 ">
                <h4>Summary:</h4>
                <p>Our ongoing client the Excess Baggage company needed to refresh their booking process, with a responsive refresh. Built to the design specification of their in-house team, I built a front end atop of a Symfony2 booking system, using the Kunstmann CMS bundle.</p>
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <h4>Features:</h4>
                <ul>
                    <li>Responsive Booking Process</li>
                    <li>Responsive Store Locator</li>
                   
                </ul>
                
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 ">
              <h4>Frontend built with help from:</h4>
                <ul>
                    <li>Jquery StoreLocator</li>
                    <li>Bootstrap</li>
                    
                </ul>
               
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
              <img src="images/portfolio/left-baggage/left-luggage-concierge.jpg" alt="">
                
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
        </div> <!-- /wrap container-fluid -->
        </section>
    </main>

<?php include "partials/footer.php"; ?>

   
    <!-- Scripts Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="javascripts/ie10.js"></script>
    <script src="javascripts/main.js"></script>
</body>

</html>
