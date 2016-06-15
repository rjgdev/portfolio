<html>
<head>
    <title>My Portfolio</title>

    <!-- CSS -->
    <?php include("supports/header.php"); ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#header">Robin Gelilio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#about">About me</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#resume">Resume</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header id="header" class="header">
        <div class="text-vertical-center">
            <div class="intro-heading">HELLO, I AM ROBIN GELILIO</div>
            <div class="intro-lead-in">Designer, Developer, Dreamer</div>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Read More</a>
        </div>
    </header>


    <!-- Portfolio -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">My works!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="assets/image/rptas.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Real Property Tax Assessment</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="assets/image/rpcoll.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Real Property Collection</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="assets/image/hrmis.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Human Resource Management & Information System</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Contact Me</h2>
                        <h3 class="section-subheading text-muted">Ready to work with you</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="name" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl" style="margin-top:25px;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © Robin Gelilio 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.twitter.com/RobinGelilio"><i class="fa fa-twitter" style="padding-top: 10px;"></i></a>
                        </li>
                        <li><a href="https://wwww.facebook.com/gelilio.robin"><i class="fa fa-facebook" style="padding-top: 10px;"></i></a>
                        </li>
                        <li><a href="https://plus.google.com/u/0/118215558281475068621/posts"><i class="fa fa-google-plus" style="padding-top: 10px;"></i></a>
                        </li>
                        <li><a href="https://ph.linkedin.com/in/robinjamin-gelilio-736294119"><i class="fa fa-linkedin" style="padding-top: 10px;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

   <?php include("supports/footer.php") ?>
      
    <!-- Menu Toggle Script -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });


        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 800);
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>