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
      <div ng-include src="'/html/view/header.php'"></div>
          <div ui-view></div>
        <!-- footer -->
        <div ng-include src="'/html/view/footer.php'"></div>

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
        });
    </script>
</html>
