<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Corner</title>
        <!--favicon-->
        <link rel="shortcut icon" href="resources/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="resources/images/favicon.ico" type="image/x-icon">
        <!-- Css -->
        <link rel="stylesheet" href="html/css/main.css">
        <!-- Include jQuery.mmenu .css files -->
        <link type="text/css" href="resources/bower_components/jQuery.mmenu-master/dist/css/jquery.mmenu.all.css" rel="stylesheet" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="resources/bower_components/bootstrap/dist/css/bootstrap.min.css" />

        <link rel="stylesheet" href="resources/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">


        <!-- Js -->
        <script type="text/javascript" src="resources/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="resources/bower_components/jQuery.mmenu-master/dist/js/jquery.mmenu.all.min.js"></script>
        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Meta tag -->

        <!-- Responsive Meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end head -->

    </head>


    <body>
        <header>
            <div class="navbH">
                <div class="navDesktop hidden-xs hidden-sm">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"><img src="resources/images/logo.png" alt=""></a>
                                <div class="ribbon"></div>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <!--                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>-->
                                <!--                            <ul class="dropdown-menu">-->
                                <!--                                <li><a href="#">Page 1-1</a></li>-->
                                <!--                                <li><a href="#">Page 1-2</a></li>-->
                                <!--                                <li><a href="#">Page 1-3</a></li>-->
                                <!--                            </ul>-->
                                <!--                        </li>-->
                                <li><a href="#">Acadamics</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Links</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"> Sign Up</a></li>
                                <li class="signB"></li>
                                <li><a href="#"> Login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="navMobile visible-xs visible-sm" >
                    <nav class="navbar navbar-inverse">
                        <div class="text-left">
                            <a class="navbar-brand" href="#">WebSiteName</a>
                        </div>
                        <div class="text-right">
                            <a href="#menu">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </nav>

                    <header>
                        <nav id="menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">pop</a>
                                    <ul>
                                        <li><a href="/about/history">History</a></li>
                                        <li><a href="/about/team">The team</a></li>
                                        <li><a href="/about/address">Our address</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function( $ ) {
                        $("#menu").mmenu({
                            "extensions": [
                                "effect-menu-zoom",
                                "pagedim-black",
                                "theme-dark"
                            ],
                            "navbars": [
                                {
                                    "position": "bottom",
                                    "content": [
                                        "<a class='fa fa-envelope' href='#/'></a>",
                                        "<a class='fa fa-twitter' href='#/'></a>",
                                        "<a class='fa fa-facebook' href='#/'></a>"
                                    ]
                                }
                            ],
                            "navbar": {
                                "title": "Abac Corner"
                            }
                        });
                    });
                </script>
            </div>
        </header>
<!--        header-->
        <div>
            <div class="banner">
                <h1>Welcome to Abac Corner</h1>
            </div>

        </div>
        <footer>
            <div class="container text-center social">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="mailto:abaccorner@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> <span style="color:white;" class="ft1">abaccorner
                   @gmail.com</span></a>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="https://www.facebook.com/abaccorner"> <i class="fa fa-facebook fb" aria-hidden="true"></i>
                            </button>
                            <span style="color:white;" class="ft1">AbacCorner</span></a>

                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="contactus.html"> <i class="fa fa-commenting" aria-hidden="true"></i>
                            <span style="color:white;" class="ft1">Contact US</span></a>
                    </div>
                </div>
            </div>

        </footer>
    </body>

</html>