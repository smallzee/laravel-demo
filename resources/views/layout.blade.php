<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Epic-Themes">
    <meta name="keywords" content="landing page, click-through, lead gen, marketing campaign, mobile app launch, one page template, product launch, products, responsive, saas, startup, html template, html5, css3, bootstrap, creative, designer, freelancer">
    <meta name="description" content="Landing Page Template for Creative Agencies, Apps, Portfolio Websites and Small Businesses">
    <title>Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Loading Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style-magnific-popup.css" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>

    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin logo -->
                <a class="navbar-brand" href="#">GetLeads</a>
                <!--end logo -->

                <!--begin navbar-toggler -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <!--end navbar-toggler -->

                <!--begin navbar-collapse -->
                <div class="navbar-collapse collapse" id="navbarCollapse" style="">

                    <!--begin navbar-nav -->
                    <ul class="navbar-nav ml-auto">

                        <li><a href="#home">Home</a></li>

                        <li><a href="#about">About</a></li>

                        <li><a href="#team">Team</a></li>

                        <li><a href="#testimonials">Testimonials</a></li>

                        <li><a href="#portfolio">Work</a></li>

                        <li><a href="#features">Features</a></li>

                        <li><a href="#pricing">Pricing</a></li>

                        <li><a href="#blog">Blog</a></li>

                        <li class="discover-link"><a href="#contact" class="discover-btn">Contact Us</a></li>

                    </ul>
                    <!--end navbar-nav -->

                </div>
                <!--end navbar-collapse -->

            </div>
            <!--end container -->

        </nav>
        <!--end navbar-fixed-top -->

    </header>
    <!--end header -->

    @yield('content')

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <p>© 2020 <span class="template-name">GetLeads</span>. Designed by <a href="https://themeforest.net/user/epic-themes/portfolio?ref=Epic-Themes" target="_blank">Epic-Themes</a></p>

                </div>
                <!--end col-md-5 -->

                <!--begin col-md-2 -->
                <div class="col-md-2"></div>
                <!--end col-md-2 -->

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Follw us:</li>

                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                        <li><a href="#"><i class="fab fa-skype"></i></a></li>

                        <li><a href="#"><i class="fab fa-dribble"></i></a></li>

                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-5 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->

    <!-- Load JS here for greater good =============================-->
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.scrollTo-min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/jquery.nav.js"></script>
    <script src="../../js/wow.js"></script>
    <script src="../../js/plugins.js"></script>
    <script src="../../js/custom.js"></script>
</body>
</html>
