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
                            <li class="col-xs"><a href="index.php?played=true&contact=true">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /container -->
        <div class="brdr-box"></div>
    </header>

    <main class="content">
    <section class="portfolio">
        <div class="wrap container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <h1>My work Portfolio:</h1>
            </div>
            <!-- /.col-sm-12 col-md-10 col-md-offset-1 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                 <article class="portfolio-entry">
                     <img src="http://lorempixel.com/360/440" />
                     <div class="entry-info">
                         <h3>Rumble Films</h3>
                         <p>
                             A custom wordpress site with ajax video gallery, and preloaded GIF rollovers.
                         </p>
                         <a href="http://www.werumble.com/"></a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 col-md-offset-1 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                 <article class="portfolio-entry">
                     <img src="http://lorempixel.com/360/440" />
                     <div class="entry-info">
                         <h3>Left Luggage</h3>
                         <p>
                             At enim sequor utilitatem. Sed erat aequius Triarium aliquid de dissensione nostra iudicare.  
                         </p>
                         <a href="#"></a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                 <article class="portfolio-entry">
                     <img src="http://lorempixel.com/360/440" />
                     <div class="entry-info">
                         <h3>Rumble Films</h3>
                         <p>
                             A custom wordpress site with ajax video gallery, and preloaded GIF rollovers.
                         </p>
                         <a href="http://www.werumble.com/"></a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 col-md-offset-1 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                 <article class="portfolio-entry">
                     <img src="http://lorempixel.com/360/440" />
                     <div class="entry-info">
                         <h3>Left Luggage</h3>
                         <p>
                             At enim sequor utilitatem. Sed erat aequius Triarium aliquid de dissensione nostra iudicare.  
                         </p>
                         <a href="#"></a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 -->
        </div><!-- /row -->
        </div> <!-- /wrap container-fluid -->
        </article>
    </main>

<?php include "partials/footer.php"; ?>

   
    <!-- Scripts Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="javascripts/ie10.js"></script>
    <script src="javascripts/main.js"></script>
</body>

</html>
