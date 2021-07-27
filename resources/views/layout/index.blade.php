<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
</head>
<body>
    @yield("content")
    <main id="main" class="site-main">
        @yield('content2')
        <section class="social-networks">

            <div class="container-fluid">
        
                <div class="row">
        
                    <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter"
                            aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus"
                            aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope"
                            aria-hidden="true"></i></a>
        
                </div>
        
            </div>
        
        </section><!-- /.social-networks -->
    </main>
    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.html" class="site-title yellow-text">Business<span>Perfect</span></a>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt</p>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Get in touch</h4>
                        <ul class="list-unstyled">
                            <li>Phone: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                            <li>Email: <a href="mailto:hello@businessperfect.com">hello@businessperfect.com</a></li>
                            <li>Fax: <a href="tel:+15417543010">+1-541-754-3010</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Location</h4>
                        <ul class="list-unstyled">
                            <li>BusinessPerfect</li>
                            <li>848 My Street,</li>
                            <li>CA 94544</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

        <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan
                    Savov</a></p>
        </div><!-- /.copyright -->

    </footer><!-- /.site-footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/jquery.slicknav.min.js")}}"></script>
    <script src="{{asset("js/slick.min.js")}}"></script>
    <script src="{{asset("js/touchswipe.min.js")}}"></script>
    <script src="{{asset("js/skrollr.min.js")}}"></script>
    <script src="{{asset("js/jquery.countTo.min.js")}}"></script>
    <script src="{{asset("js/script.js")}}"></script>
</body>

</html>