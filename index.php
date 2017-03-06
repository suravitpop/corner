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


        <!-- Java Script -->


        <!-- Angular -->
        <script src="resources/bower_components/angular/angular.min.js"></script>
        <script src="resources/bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
        <!-- jquery -->
        <script type="text/javascript" src="resources/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- mmmenu -->
        <script type="text/javascript" src="resources/bower_components/jQuery.mmenu-master/dist/js/jquery.mmenu.all.min.js"></script>
        <!-- bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Meta tag -->
        <!-- Responsive Meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end head -->
        <!-- main JS -->
        <script src="html/js/app.js"></script>
        <base href="/">
    </head>


    <body ng-app="routerApp">
      <!-- header -->
        <header>
            <div class="navbH">
                <div class="navDesktop hidden-xs hidden-sm">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" ui-sref="home"><img src="resources/images/logo.png" alt=""></a>
                                <div class="ribbon"></div>
                            </div>
                            <ul class="nav navbar-nav">
                                <li ui-sref-active="active"><a ui-sref="home" onclick="setStyle()">Home</a></li>
                                <li ui-sref-active="active"><a ui-sref="acadamic" onclick="setStyle()">Acadamics</a></li>
                                <li ui-sref-active="active"><a ui-sref="tips" onclick="setStyle()">Tips</a></li>
                                <li ui-sref-active="active"><a ui-sref="links" onclick="setStyle()">Links</a></li>
                                <li ui-sref-active="active"><a ui-sref="contactus" onclick="setStyle()">Contact Us</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a ui-sref="signup"> Sign Up</a></li>
                                <li class="signB"></li>
                                <li><a ui-sref="login"> Login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="navMobile visible-xs visible-sm" >
                    <nav class="navbar navbar-inverse">
                        <div class="text-left">
                            <a class="navbar-brand" ui-sref="#">Abac Corner</a>
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
                                <li><a ui-sref="home" onclick="setStyle()">Home</a></li>
                                <li><a ui-sref="acadamic" onclick="setStyle()">Academics</a></li>
                                <li><a ui-sref="tips" onclick="setStyle()">Contact</a></li>
                                <li><a ui-sref="links" onclick="setStyle()">Contact</a></li>
                                <li><a ui-sref="contactus" onclick="setStyle()">Contact</a></li>
                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </header>
      <!--end header-->

        <div ui-view id="heightBody"></div>
        <!-- footer -->
      <!-- Start Footer -->
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
      <!-- End Footer -->


    </body>

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

            setStyle();
        });

        function setStyle() {
            setTimeout(function() {
                var height = $(document).height();
                var heightBody = $('#heightBody').height();
                var height80 = height * 80 / 100;

                if (heightBody < height80) {
                    $("footer").css("position", "fixed");
                }else {
                    $("footer").css("position", "relative");
                }
            }, 100);
        }
    </script>
</html>
