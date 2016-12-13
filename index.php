
<?php include "partials/head.php"; ?>

<?php
 /*Check cookie for intro */
if (isset($_COOKIE["noNeilsIntro"])|| isset($_GET['cv']) ) {
  $class ="brdr-black";
}
/*Check parameters played*/
if (isset($_GET['played']) && isset($_GET['contact']))  {
  $class ="brdr-black contact-go";
}
?>
<body class="<?php echo $class;?>">

<!-- Hi There, welcome to my CV page
I'm available for Hire!
       _..._
      .'     '.      _
     /    .-""-\   _/ \
   .-|   /:.   |  |   |
   |  \  |:.   /.-'-./
   | .-'-;:__.'    =/
   .'=  *=|     _.='
  /   _.  |    ;
 ;-.-'|    \   |
/   | \    _\  _\
\__/'._;.  ==' ==\
         \    \   |
         /    /   /
         /-._/-._/
         \   `\  \
          `-._/._/

Thanks for checking out my source code, this page is pretty simple, a couple of things to note:
* I used a flexbox grid, just for fun. This is not the kind of code I would run on a commercial site, I'd likely import a float-based grid like bootstrap or foundation (at least until CSS Grid is supported in 2017)
* At launch I'm supporting IE Edge only, I've dropped support for IE10 back, I could have added all the polyfills for SVG and modernized out the VP unit but since I whipped this site up in my spare time I figured ¯\_(ツ)_/¯ I'll add better support going forward.

Check out my CV and if you're hiring Frontend developer's Contact Me.

 -->
<?php include "partials/intro.php"; ?>

<header>
<div class="container-fluid">
    <div class="row">
<div class=" col-xs-12 col-sm-4 bottom">
    <div id="logo" class="marquee">
        <h1><a href="/">
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
            <li class="col-xs"><a id="contact-link" href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>
    </div>
</div> <!-- /container -->
<div class="brdr-box"></div>
</header>
<section class="masthead">

<picture>

  <source media="(min-width: 48em)"
          srcset="images/portrait.jpg">

  <img src="images/portrait-mobile.jpg"
      alt="">

</picture>

<div class="holder">
     <a id="who" href="#about" class="button who">Who?</a>     
</div>

<div class="socials">
  <ul class="row between-xs">
    <li class="col-xs"><a class="twit" href="https://twitter.com/MendTheFrontend">Twitter</a></li>
    <li class="col-xs"><a class="ghub" href="https://github.com/NeilWkz">Github</a></li>
    <li class="col-xs"><a class="codepen" href="http://codepen.io/NeilWkz/">Codepen</a></li>
    <li class="col-xs"><a class="stack-overflow" href="http://stackoverflow.com/users/2970095/neilwkz">Stack Overflow</a></li>
  </ul>
</div>  
        

</section>
<main class="with-mast content">
    <div class="wrap container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6">
            <h2 id="about" class="like-h3 anim-me">About <span class="trail">Me</span></h2>
            <p><em>Hi, I'm Neil Ross</em>
            I'm a London Based Frontend Developer &amp; Designer with 10 years industry experience, I'm obsessed with CSS, and using it to create beautiful web experiences on any screen you can imagine.</p>
            <p>I love challenging designs, and working to create unique performant interfaces that serve my client's user needs.</p>
            <p><em>Want to know more?</em>
            <a href="cv.php">Check out my CV</a>, or get in touch via the contact form</p>



            </div>
            <!-- /.col-xs-8 -->
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1">
                <form id="contact-form" action="https://formspree.io/neilross.wkzdesign@gmail.com"
      method="POST" novalidate>
      <h3 id="contact" class="contact-head anim-me">Contact <span class="trail">Me</span></h3>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-6">
                        <div class="form-wrap">
                            <input class="floatlabel input_label" minlength="2"  name="name" type="text" required>
                            <label class="contact_label" for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                        <div class="form-wrap">
                            <input class="floatlabel input_label" type="email" name="email" required>
                            <label class="contact_label" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12">
                        <div class="form-wrap textarea-wrap">
                            <textarea class="floatlabel input_label" name="message" id="" minlength="2" required></textarea>
                            <label class="contact_label" for="message">Message</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12">
                        <div class="form-wrap submit-wrap">
                        <button class="button form-submit" type="submit">Send</button>
                       
                        </div>
                    </div>
                    </div>
                    <input type="text" name="_gotcha" style="display:none" />
                    </form>
            </div>
            <!-- /.col-xs-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrap container-fluid -->
</main>
 <section id="cookies">
 <div class="container-fluid wrap">
     <div class="row">
         <div class="col-sm-6 col-xs-12">
             <h3>Cookies?</h3>
         <p> If you want, I'll give you a cookie, and then you won't have to see my animated intro again.</p>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
         <a href="#" id="yes-cookie" class="button"><span class="top-line">Yes</span> never again</a>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
           <a href="" class="button" id="no-cookie"><span class="top-line">No</span> I LIKE that intro</a>
         </div>
     </div>
 </div>
     
     
     
 </section>
               
<?php include "partials/footer.php"; ?>
   
   

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="javascripts/jquery.validate.min.js"></script>
   
    <!--  TODO select Greensock plugins for only animation functions used before deployment -->    <script src="javascripts/TweenMax.min.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="javascripts/ie10.js"></script>
    <script src="javascripts/main.js"></script>
</body>

</html>
