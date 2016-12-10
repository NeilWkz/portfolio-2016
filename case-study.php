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

    <main class="content">
    <section class="case-study">
        <div class="wrap container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <h1>Rumble</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mollis pharetra venenatis. Nulla vulputate, mauris ut euismod elementum, odio massa fermentum justo</p>
                <h4>Video Showcase</h4>
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                <img src="http://lorempixel.com/1000/700">
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <h4>Summary</h4>
                <p>Donec ut lacinia tellus. Aliquam id ante commodo, bibendum lectus id, gravida diam. Curabitur egestas orci mi, eu congue eros venenatis a. Nullam eget purus sed ipsum luctus vestibulum ac eu mauris.</p>
                <p>Pellentesque porta nisi a magna posuere, sed tincidunt erat mollis. Nunc in dapibus velit. Praesent pretium sit amet dui sed vehicula.</p>
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                <h4>Features</h4>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
                
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
