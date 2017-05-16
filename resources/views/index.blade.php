<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Favicons -->
    <link rel="shortcut icon" href="images/favico.ico">

    <title> VERNY :: Material Templates </title>    

    <!-- Materialize -->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawesom -->
    <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">

    <!-- popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- animation css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!--google font-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

    <!--custom. css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/colors/default.css" id="color-opt">

  </head>


  <body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
        <div class="loader">
            Loading...
        </div>
    </div> 
    <!-- End Preloader -->

    <div class="navbar navbar-inverse navbar-fixed-top navbar-trans" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="/"><span>M</span>ichael <span>N</span>ebelsick</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about-me">About</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li class="dropdown">
                        <a href="#blog" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu wow fadeInDown">
                                <li><a href="masonry.html" title="">masonry</a></li>
                                <li><a href="blogwithsidebar.html" title="">blogwithsidebar</a></li>
                                <li><a href="singleblog.html" title="">singleblog</a></li>
                            </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </div><!--navbar-default-->


    <!-- HOME
    ======================================================= -->
    <section class="carousel-section" id="home">
        <div class="overlay"></div>
        <div id="carousel-example-generic" class="carousel carousel-razon" data-ride="carousel" data-interval="5000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"> <!-- item-1 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDown wow carousel-title" data-wow-delay=".1s">Welcome to <span>Verny</span></h1>
                                        <p class="fadeInDown wow animated" data-wow-delay=".2s">
                                             Verny is a fully responsive Resume/Personal built using the latest Bootstrap framework. <br>It's designed for describing your app, agency or business. The clean and well <br>commented code allows easy customization of the theme. 
                                        </p>
                                        <a href="#" class="waves-effect waves-light btn btn-custom animated fadeInDown wow" data-wow-delay=".4s">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item"> <!-- item-2 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDown wow carousel-title" data-wow-delay=".1s">We Are <span> Creative </span></h1>
                                        <p class="animated fadeInDown wow sub-title" data-wow-delay=".2s"><span>D</span>esign,<span>D</span>evelope,<span>D</span>ream</p>
                                        <a href="#" class="waves-effect waves-light btn btn-custom animated fadeInDown wow" data-wow-delay=".4s">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item"> <!-- item-3 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDown wow carousel-title" data-wow-delay=".1s">personal <span> Template</span></h1>
                                        <p class="animated fadeInDown wow" data-wow-delay=".2s">
                                        Verny is a fully responsive Resume/Personal built using the latest Bootstrap framework. <br>It's designed for describing your app, agency or business. The clean and well <br>commented code allows easy customization of the theme.
                                        </p>
                                        <a href="#" class="waves-effect waves-light btn btn-custom animated fadeInDown wow" data-wow-delay=".4s">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- end HOME/SLIDER -->


    <!-- About-US
    ================================================== --> 

    <section class="about" id="about-me">
        <div class="container"> 

            <div class="row">
                <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                    <div class="header-title">
                        <h1>About</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br>eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div><!-- /End row -->


            <div class="row">

                <div class="col-md-8 col-sm-6 col-xs-12">

                    <div class="introduce">

                        <h2 class="title animated fadeInLeft wow" data-wow-delay=".2s">Personal Details</h2>
                        
                        <p class="animated fadeInLeft wow" data-wow-delay=".4s">Hye, I’m Johnathan Doe residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>

                        <div class="presonal-inform">
                            <ul>
                                <li class="animated fadeIn wow" data-wow-delay=".1s"><b>Name:</b>Jone Deo</li>
                                <li class="animated fadeIn wow" data-wow-delay=".2s"><b>Phone:</b>(123)_456_7890</li>
                                <li class="animated fadeIn wow" data-wow-delay=".3s"><b>Email:</b>Jondeo@email.com</li>
                                <li class="animated fadeIn wow" data-wow-delay=".4s"><b>Date of Birth:</b> 6 January 1987</li>
                                <li class="animated fadeIn wow" data-wow-delay=".1s"><b>Address:</b>Inox Box 1546, Sollins.</li>
                                <li class="animated fadeIn wow" data-wow-delay=".2s"><b>Nationality:</b>Australian</li>
                                <li class="animated fadeIn wow" data-wow-delay=".3s"><b>Job:</b>Frelancer</li>
                                <li class="animated fadeIn wow" data-wow-delay=".4s"><b>Languages:</b>English, Australian</li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-img animated fadeInRight wow animated" data-wow-delay=".5s">
                        <img src="images/mike.png" class="img-responsive" alt="About-image">
                    </div>
                </div>

            </div>
            

            <div class="row">

                <div class="col-md-6">

                    <div class="skill-title">
                        <h3>Skills</h3>
                    </div>

                    <div class="skills-progress animated fadeInLeft wow" data-wow-delay=".4s" id="skills">
                        <h4>Photoshop<span>75%</span></h4>
                        <div class="progress-solid meter">
                            <div class="progress-bar" role="progressbar" data-percent="75%" aria-valuenow="75" aria-valuemin="0">
                                <span class="sr-only">75% Complete</span>
                            </div>
                        </div>

                        <h4>CSS 3<span>70%</span></h4>
                        <div class="progress-solid meter">
                            <div class="progress-bar" role="progressbar" data-percent="70%" aria-valuemax="100" aria-valuemin="0">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                        <h4>Javascript<span>85%</span></h4>
                        <div class="progress-solid meter animated-skills">
                            <div class="progress-bar" role="progressbar" data-percent="85%" aria-valuemax="100" aria-valuemin="0">
                                <span class="sr-only">85% Complete</span>
                            </div>
                        </div>

                    </div>  
                </div> <!-- end colommen -->

                <div class="col-md-6">
                    <div class="skills-progress animated fadeInLeft wow" data-wow-delay=".6s" id="skills-progress">
                        <h4>HTML 5<span>96%</span></h4>
                            <div class="progress-solid meter animated-skills">
                                <div class="progress-bar" role="progressbar" data-percent="96%" aria-valuemax="100" aria-valuemin="0">
                                <span class="sr-only">96% Complete</span>
                            </div>
                        </div>

                        <h4>Web Development<span>68%</span></h4>
                            <div class="progress-solid meter animated-skills">
                                <div class="progress-bar" role="progressbar" data-percent="68%" aria-valuemax="100" aria-valuemin="0">
                                <span class="sr-only">68% Complete</span>
                            </div>
                        </div>

                        <h4>Logo Designer<span>85%</span></h4>
                            <div class="progress-solid meter animated-skills">
                                <div class="progress-bar" role="progressbar" data-percent="85%" aria-valuemax="100" aria-valuemin="0">
                                <span class="sr-only">85% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End row -->

        </div><!-- /container -->
    </section><!-- /section -->


    <section class="fun-facts bg-dark" id="fun-facts">
      <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".1s">
                <i class="icon-pencil"></i>
                <div class="counter">
                    <h1 class="counter-time">461</h1>
                    <h2>Clients Working</h2>
                </div>
            </div>

            <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".3s">
                <i class="icon-picture"></i>
                <div class="counter">
                    <h1 class="counter-time">351</h1>
                    <h2>Photo taken</h2>
                </div>
            </div> <!-- /facts-2 -->
            <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".5s">
                <i class="icon-trophy"></i>
                <div class="counter">
                    <h1 class="counter-time">245</h1>
                    <h2>Projects completed</h2>
                </div>
            </div> <!-- /facts-3 -->
            <div class="col-md-3 col-sm-3  col-xs-6 facts animated zoomIn wow" data-wow-delay=".7s">
                <i class="icon-cup"></i>
                <div class="counter">
                    <h1 class="counter-time">422</h1>
                    <h2>Cups of Coffee</h2>
                </div>
            </div> <!-- /facts-4 -->
        </div> <!-- / row -->
      </div>  <!--  /container -->
    </section>

    <section class="resume" id="resume">
        <div class="container">

        <div class="row">
            <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                <div class="header-title">
                    <h1>Resume</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="experience">
                    <h2 class="fadeIn animated wow" data-wow-delay=".1s">Experience</h2>
                </div>
            </div>
        </div>



        <div class="time-line"> 
            <!-- Right Services -->
            <div class="row">
                <div class="col-sm-6 pull-right rex-right">
                    <div class="colam">
                    <div class="rs-round">
                        <i class="icon-layers"></i>
                    </div>
                        <div class="rex-item animated fadeInLeft wow" data-wow-delay=".1s">
                            <h3>2012-2015</h3>
                            <h4>Senior Graphic Designer</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
                </div>
          
            <!-- Left Services -->
            <div class="row">
                <div class="col-sm-6 pull-left rex-left">
                    <div class="colam">
                        <div class="rs-round second">
                            <i class="icon-pin"></i>
                        </div>
                        <div class="rex-item animated fadeInLeft wow" data-wow-delay=".3s">
                            <h3>2010-2012</h3>
                            <h4>Web developer</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Right Services -->
            <div class="row">
                <div class="col-sm-6 pull-right rex-right">
                    <div class="colam-tird">
                        <div class="rs-round">
                            <i class="icon-magic-wand"></i>
                        </div>
                        <div class="rex-item animated fadeInRight wow" data-wow-delay=".5s">
                            <h3>2007-2010</h3>
                            <h4>Freelancer</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="education fadeIn animated wow animated" data-wow-delay=".1s">
                        <h3>Education</h3>
                    </div>
                </div>
            </div>

            <div class="time-line">
            <!-- Right Services -->
            <div class="row">
                <div class="col-sm-6 pull-left rex-left">
                    <div class="colam">
                        <div class="rs-round second">
                            <i class="icon-layers"></i>
                        </div>
                        <div class="rex-item animated fadeInLeft wow" data-wow-delay=".1s">
                            <h3>2005-2007</h3>
                            <h4>Degree of Design</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Left Services -->
            <div class="row">
                <div class="col-sm-6 pull-right rex-right">
                    <div class="colam">
                        <div class="rs-round edu-second">
                            <i class="icon-pin"></i>
                        </div>
                        <div class="rex-item animated fadeInRight wow" data-wow-delay=".3s">
                            <h3>2003-2005</h3>
                            <h4>Game art & Design</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Right Services -->
            <div class="row">
                <div class="col-sm-6 pull-left rex-left">
                    <div class="colam-tird">
                        <div class="rs-round second">
                            <i class="icon-magic-wand"></i>
                        </div>
                        <div class="rex-item animated fadeInLeft wow" data-wow-delay=".11s">
                            <h3>2001-2003</h3>
                            <h4>Computer Science College</h4>
                            <p>Believe it or not its just me. Texas tea. Come and knock on our door. We've been waiting for you where are herhers and his. Three's company too.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>


    <section class="portfolio" id="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                    <div class="header-title">
                        <h1>portfolio</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div><!-- /End row -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="portfolioFilter text-center">
                        <ul class="portfolio-category">
                            <li><a href="#" data-filter="*" class="current">ALL</a></li>
                            <li><a href="#" data-filter=".webdesign">Web Design</a></li>
                            <li><a href="#" data-filter=".graphicdesign">Graphic Design</a></li>
                            <li><a href="#" data-filter=".illustrator">Illustrator</a></li>
                            <li><a href="#" data-filter=".photography">Photography</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row port">
                <div class="portfolioContainer">
                    <div class="col-md-4 col-sm-6 webdesign illustrator">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInLeft wow animated" data-wow-delay=".1s"> 
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro1.jpg" class="thumb-img img-responsive" alt="work-thumbnail">

                                    <div class="portfolio-deatil">
                                        <a href="#popup-1" class="field-popup" title="Portfolio-1">
                                            View project
                                        </a>

                                        <div id="popup-1" class="popup-box zoom-anim-dialog mfp-hide">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <figure>
                                                    <img src="images/portfolio/pro1.jpg" alt="" class="field-popup img-responsive">
                                                </figure>
                                            </div>
                                        

                                            <div class="col-lg-6">
                                                <div class="popup-content">
                                                    <h2>Web Design</h2>

                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                </div>
                                            </div>
                                        </div><!-- End row -->

                                        </div>
                                    </div>

                                <div class="pf-overlay"></div>
                            </div>                          
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 graphicdesign illustrator photography">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInDown wow animated" data-wow-delay=".3s">
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro2.jpg" class="thumb-img img-responsive" alt="work-thumbnail">

                                    <div class="portfolio-deatil">
                                        <a href="#popup-2" class="field-popup" title="Portfolio-2">
                                            View project
                                        </a>

                                        <div id="popup-2" class="popup-box zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="images/portfolio/pro2.jpg" alt="" class="field-popup img-responsive">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="popup-content">
                                                        <h2>Web Design</h2>

                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean     commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>
                                            </div><!-- End row -->

                                        </div>

                                    </div>

                                <div class="pf-overlay"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 webdesign graphicdesign">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInRight wow animated" data-wow-delay=".5s">
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro3.jpg" class="thumb-img img-responsive" alt="work-thumbnail">
                                    <div class="portfolio-deatil">

                                        <a href="#popup-3" class="field-popup" title="Portfolio-3">
                                            View project
                                        </a>

                                        <div id="popup-3" class="popup-box zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="images/portfolio/pro3.jpg" alt="" class="field-popup img-responsive">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="popup-content">
                                                        <h2>Web Design</h2>

                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>

                                            </div><!-- End row -->
                                        </div>
                                    </div>

                                <div class="pf-overlay"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 illustrator photography">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInLeft wow animated" data-wow-delay=".1s">
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro4.jpg" class="thumb-img img-responsive" alt="work-thumbnail">

                                    <div class="portfolio-deatil">
                                        <a href="#popup-4" class="field-popup" title="Portfolio-4">
                                            View project
                                        </a>

                                        <div id="popup-4" class="popup-box zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="images/portfolio/pro4.jpg" alt="" class="field-popup img-responsive">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="popup-content">
                                                        <h2>Web Design</h2>

                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>

                                            </div><!-- End row -->
                                        </div>
                                    </div>

                                <div class="pf-overlay"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 graphicdesign photography">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInUp wow animated" data-wow-delay=".3s">
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro5.jpg" class="thumb-img img-responsive" alt="work-thumbnail">

                                    <div class="portfolio-deatil">
                                        <a href="#popup-5" class="field-popup" title="Portfolio-5">
                                            View project
                                        </a>

                                        <div id="popup-5" class="popup-box zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="images/portfolio/pro5.jpg" alt="" class="field-popup img-responsive">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="popup-content">
                                                        <h2>Web Design</h2>

                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>

                                            </div><!-- End row -->
                                        </div>
                                    </div>

                                <div class="pf-overlay"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 webdesign photography">
                        <div class="gal-detail thumb waves-effect waves-block waves-light animated fadeInRight wow animated" data-wow-delay=".5s">
                            <div class="portfolio-images">
                                <img src="images/portfolio/pro6.jpg" class="thumb-img img-responsive" alt="work-thumbnail">

                                    <div class="portfolio-deatil">
                                        <a href="#popup-6" class="field-popup" title="Portfolio-5">
                                            View project
                                        </a>

                                        <div id="popup-6" class="popup-box zoom-anim-dialog mfp-hide">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <figure>
                                                        <img src="images/portfolio/pro6.jpg" alt="" class="field-popup img-responsive">
                                                    </figure>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="popup-content">
                                                        <h2>Web Design</h2>

                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                                                    </div>
                                                </div>

                                            </div><!-- End row -->
                                        </div>
                                    </div>

                                <div class="pf-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- End row -->

        </div>
    </section>


    <!-- Testimonials -->
    <section class="testimonials parallax-container" id="testimonials" data-stellar-background-ratio="0.7">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="testi-title">
                        <h3>Testimonials</h3>
                        <hr>
                    </div>
                    <div id="testi-carousel" class="owl-carousel owl-spaced">
                        <div class="wow animated bounceInDown animation-delay-2">
                            <i class="zmdi zmdi-quote"></i>
                            <h4>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h4>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <i class="zmdi zmdi-quote"></i>
                            <h4>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h4>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <i class="zmdi zmdi-quote"></i>
                            <h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h4>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- / Testimonials -->


    <section class="blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                    <div class="header-title">
                        <h1>Blog post</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>

            

                <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
                    <div class="card  fadeIn animated wow" data-wow-delay=".3s">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/blog/blog1.jpg" alt="blog-images">
                          <span class="card-title post-ver-date">February 15, 2016</span>
                        </div>

                        <div class="post-content card-content">
                            <a href="#"><h2 class="post-title">Awesome Post Title</h2></a>
                            
                            <p class="post-subtitle">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero.</p>
                        </div>

                        <div class="clearfix card-action">
                            <a href="#" class="left blog-comment">5 COMMENTS</a>
                            <a href="#" class="right blog-social"><i class="zmdi zmdi-share"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
                    <div class="card fadeIn animated wow" data-wow-delay=".5s">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/blog/blog2.jpg" alt="blog-images">
                          <span class="card-title post-ver-date">February 15, 2016</span>
                        </div>

                        <div class="post-content card-content">
                            <a href="#"><h2 class="post-title">Image Post </h2></a>
                            <p class="post-subtitle">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero.</p>
                        </div>

                        <div class="clearfix card-action">
                            <a href="#" class="left blog-comment">5 COMMENTS</a>
                            <a href="#" class="right blog-social"><i class="zmdi zmdi-share"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 card-wrapper">
                    <div class="card  fadeIn animated wow" data-wow-delay=".9s">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/blog/blog3.jpg" alt="blog-images">
                          <span class="card-title post-ver-date">February 15, 2016</span>
                        </div>

                        <div class="post-content card-content">
                            <a href="#"><h2 class="post-title">Another Image Post </h2></a>
                            <p class="post-subtitle">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero.</p>
                        </div>

                        <div class="clearfix card-action">
                            <a href="#" class="left blog-comment">5 COMMENTS</a>
                            <a href="#" class="right blog-social"><i class="zmdi zmdi-share"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12">
                    <a href="#" class="waves-effect waves-light btn-large load fadeIn animated wow" data-wow-delay=".5s">See All</a>
                </div>

            </div><!-- End row -->

        </div><!--End container-->
    </section><!-- End section -->



    <!-- Contact Start -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 animated zoomIn wow" data-wow-delay=".5s">
                    <div class="header-title">
                        <h1>contact</h1>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="contact-inform">
                        <h2>Get in touch</h2>
                    </div>
                    <div class="contact-detial">
                        <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".1s"> 
                            <span class="ci-icons"><i class="zmdi zmdi-home"></i></span> 
                                <address>Inox Box 1546, Sollins Street West, Victoria 7001, Australia</address> 
                        </div>

                        <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".2s"> 
                            <span class="ci-icons"><i class="zmdi zmdi-email"></i></span> 
                                <address>Verny@gmail.com </address> 
                        </div>

                        <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".3s"> 
                            <span class="ci-icons"><i class="zmdi zmdi-phone"></i></span> 
                                <address>+123 654 657 1110</address> 
                        </div>

                        <div class="clearfix ci-items fadeIn animated wow" data-wow-delay=".4s"> 
                            <span class="ci-icons"><i class="zmdi zmdi-globe"></i></span> 
                                <address>www.vernytemplate.com</address> 
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="section-form">
                        <form class="contact-form" id="ajax-form" action="https://formsubmit.io/send/themesbykrish@gmail.com" method="post">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 input-field fadeIn animated wow" data-wow-delay=".1s">
                                    <div class="input-field">
                                      <input class="form-control input-box" id="name2" name="name" type="text" value="">
                                      <div class="error" id="err-name" style="display:none">Please enter name</div>
                                        <label for="name2" class="input-label">Name</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 input-field fadeIn animated wow" data-wow-delay=".2s">
                                    <div class="input-field">
                                      <input class="form-control input-box" id="email2" name="email" type="text" value="">
                                      <div class="error" id="err-emailvld" style="display:none">Email is not a valid format</div>
                                        <label for="email2" class="input-label">Email</label>
                                    </div>
                                </div>
 
                                <div class="col-sm-12 input-field fadeIn animated wow" data-wow-delay=".3s">
                                    <div class="input-field">
                                      <input class="form-control input-box" id="subject2" type="text" name="subject" value="">
                                      <div class="error" id="err-subject" style="display:none">Please enter subject</div>
                                        <label for="subject2" class="input-label">Subject</label>
                                    </div>
                                </div>

                                <div class="col-sm-12 input-field fadeIn animated wow" data-wow-delay=".4s">
                                    <div class="input-field textarea-input">
                                        <textarea class="form-control materialize-textarea" id="message2"  name="message"></textarea>
                                        <div class="error" id="err-message" style="display: none;">Please enter message</div>
                                        <label for="message2" class="input-label">Message</label>
                                    </div>  
 
                                </div>

                                <div class="col-sm-12 input-field-submit">
                                <div class="input-field-send submit-wrap clearfix fadeIn animated wow" data-wow-delay=".5s">
                                    <div id="ajaxsuccess">E-mail was successfully sent.</div>
                                    <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                    <button type="submit" id="send" class="left waves-effect waves-light btn-flat brand-text submit-btn">send</button>
                                </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div><!--End row -->

        </div>    
    </section>

    <!-- /Emd Contact Start -->


    <!-- Map And Contact Section start -->
    <section class="maps" id="maps">
        <div class="map-canvas" id="map" data-lat="39.7662195" data-lng="-86.441277" data-string="Inox Box 1546, Sollins Street West, Victoria 7001, Australia" data-marker="images/marker.png" data-zoom="10" data-style="style-1"></div>
    </section>
    <!-- Map And Contact Section end -->

    <!-- Footer -->
    <footer class="section-footer">
        <section class="footer-first">
            <div class="container">
                <div class="footer-title animated zoomIn wow animated" data-wow-delay=".5s">
                    <h2 class="center">Ve<span>r</span>ny</h2>
                </div>

                <div class="footer-social-area animated zoomIn wow animated" data-wow-delay=".9s">
                    <ul class="social footer-social">
                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="footer-second">
            <div class="container">
                <div class="bottom-footer">
                    <p>© 2016 VERNY. Theme by Zoyothemes</p>
                </div>
            </div>
        </section>
    </footer>
    <!-- /End Footer -->

    
    <!-- back to top button -->
    <a href="#" class="back-to-top mdl-button waves-effect waves-light  rotate"> <i class="zmdi zmdi-chevron-up"></i></a>


    <!-- Style switcher -->
    <div id="style-switcher" style="left: 0px;">
        <div>
            <h3>Select your color</h3>
            <ul class="pattern">
                <li><a class="color1 waves-effect waves-light" href="#"></a></li>
                <li><a class="color2 waves-effect waves-light" href="#"></a></li>
                <li><a class="color3 waves-effect waves-light" href="#"></a></li>
                <li><a class="color4 waves-effect waves-light" href="#"></a></li>
                <li><a class="color5 waves-effect waves-light" href="#"></a></li>
                <li><a class="color6 waves-effect waves-light" href="#"></a></li>
                <li><a class="color7 waves-effect waves-light" href="#"></a></li>
                <li><a class="color8 waves-effect waves-light" href="#"></a></li>
            </ul>
        </div>      
        <div class="bottom">
            <a href="#" class="settings waves-effect waves-light"><i class="zmdi-hc-li zmdi zmdi-refresh zmdi-hc-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->




    <!-- Script Javascript -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Materialize js -->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- Nicescroll -->
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>

    <!-- wow -->
    <script type="text/javascript" src="js/wow.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdHT1ECkNTi0hu24D60fSnP41M5rdFb-w"></script>

    <!--owl carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- magnific-popup -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

    <!-- counterup -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    <!-- main custom -->
    <script type="text/javascript" src="js/main.js"></script>


    <script type="text/javascript">
    /*========================================
            Counter-time
    =========================================*/
        jQuery(document).ready(function($) {
            $('.counter-time').counterUp({
                delay: 10,
                time: 1500
            });
        });


        /*Filter JavaScript*/
        $(document).ready(function(){
            $('ul.current').filter();
        });

    /*=========================================
            GOOGLE MAP
    ==========================================*/
    var obj = "map";
    
    function initialize(obj) {
        var stylesArray = {
        'style-1' : {
            'style': [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
            }
        }

        var lat = $('#'+obj).attr("data-lat");
        var lng = $('#'+obj).attr("data-lng");
        var contentString = $('#'+obj).attr("data-string");
        var myLatlng = new google.maps.LatLng(lat,lng);
        var map, marker, infowindow;
        var image = $('#'+obj).attr("data-marker");
        var zoomLevel = parseInt($('#'+obj).attr("data-zoom"),10);
        var styles = stylesArray[$('#' + obj).attr("data-style")]['style'];
        var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
        
        var mapOptions = {
            zoom: zoomLevel,
            disableDefaultUI: true,
            center: myLatlng,
            scrollwheel: false,
            mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        }
        
        map = new google.maps.Map(document.getElementById(obj), mapOptions);
    
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
    
        infowindow = new google.maps.InfoWindow({
            content: contentString
        });
      
        
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image
        });
    
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    
    }
    initialize(obj);

    /*=========================================
            Contact Form
    ==========================================*/
    /*global jQuery */
    jQuery(function ($) {
    'use strict';

    /**
     * Contact Form Application
     */
    var ContactFormApp = {
        $contactForm: $("#ajax-form"),
        $contactFormBtn: $("#send"),
        $contactFormName: $("#name2"),
        $contactFormSubject: $("#subject2"),
        $contactFormEmail: $("#email2"),
        $contactFormMessage: $("#message2"),
        $confirmMessage: $("#ajaxsuccess"),
        $errorMessages: $(".error"),
        $errorName: $("#err-name"),
        $errorSubject: $("#err-subject"),
        $errorEmail: $("#err-emailvld"),
        $errorMessage: $("#err-message"),
        $errorForm: $("#err-form"),
        $errorTimeout: $("#err-timedout"),
        $errorState: $("#err-state"),

        //Validate Contact Us Data
        validate: function () {
            var error = false; // we will set this true if the form isn't valid

            var name = this.$contactFormName.val(); // get the value of the input field
            if(name == "" || name == " " || name == "Name") {
                this.$errorName.show(500);
                this.$errorName.delay(4000);
                this.$errorName.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                }); 
                error = true; // change the error state to true
            }

            var subject = this.$contactFormSubject.val(); // get the value of the input field
            if(subject == "" || subject == " " || subject == "Subject") {
                this.$errorSubject.show(500);
                this.$errorSubject.delay(4000);
                this.$errorSubject.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                }); 
                error = true; // change the error state to true
            }


            var email_compare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
            var email = this.$contactFormEmail.val().toLowerCase(); // get the value of the input field

            if (email == "" || email == " " || email == "E-mail") { // check if the field is empty
                this.$errorEmail.show(500);
                this.$errorEmail.delay(4000);
                this.$errorEmail.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                });         
                error = true;
            }
            else if (!email_compare.test(email)) { // if it's not empty check the format against our email_compare variable
                this.$errorEmail.show(500);
                this.$errorEmail.delay(4000);
                this.$errorEmail.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                });         
                error = true;
            }

            var message = this.$contactFormMessage.val(); // get the value of the input field
            
            if(message == "" || message == " " || message == "Message") {              
                this.$errorMessage.show(500);
                this.$errorMessage.delay(4000);
                this.$errorMessage.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                });            
                error = true; // change the error state to true
            }

            if(error == true) {
                this.$errorForm.show(500);
                this.$errorForm.delay(4000);
                this.$errorForm.animate({
                    height: 'toggle'  
                }, 500, function() {
                    // Animation complete.
                }); 
            }

            return error;
        },
        //contact form submit handler
        contactFormSubmit: function (obj) {
            this.$errorMessages.fadeOut('slow'); // reset the error messages (hides them)

            if(this.validate() == false) {

                var data_string = $('#ajax-form').serialize(); // Collect data from form

                var $this = this;
                $.ajax({
                    type: "POST",
                    url: $this.$contactForm.attr('action'),
                    data: data_string,
                    timeout: 6000,
                    cache: false,
                    crossDomain: false,
                    error: function(request,error) {
                        if (error == "timeout") {
                            $this.$errorTimeout.slideDown('slow');
                        }
                        else {
                            $this.$errorState.slideDown('slow');
                            $this.$errorState.html('An error occurred: ' + error + '');
                        }
                    },
                    success: function() {
                        $this.$confirmMessage.show(500);
                        $this.$confirmMessage.delay(4000);
                        $this.$confirmMessage.animate({
                            height: 'toggle'  
                            }, 500, function() {
                        });    
                        
                        $this.$contactFormName.val('');
                        $this.$contactFormEmail.val('');
                        $this.$contactFormMessage.val('');
                        $this.$contactFormSubject.val('');
                    }
                });
            }
            return false;
        },
        bindEvents: function () {
            //binding submit event
            this.$contactFormBtn.on('click', this.contactFormSubmit.bind(this));
        },
        init: function () {
            //initializing the contact form
            console.log('Contact form is initialized');
            this.bindEvents();
            return this;
        }
    };


    //Initializing the app
    ContactFormApp.init({});

});


    </script>


    <script type="text/javascript" src="js/switcher.js"></script>
<!-- End Script Javascript -->


    </body>
</html>