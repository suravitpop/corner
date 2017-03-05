// app.js
var routerApp = angular.module('routerApp', ['ui.router']);

routerApp.config(function($stateProvider, $urlRouterProvider, $locationProvider) {
    $locationProvider.html5Mode(true);
    $urlRouterProvider.otherwise('/home');
    $stateProvider
        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: '/html/view/home.php'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('acadamic', {
            url: '/acadamic',
            templateUrl: '/html/view/acadamic.php'

        })

        .state('tips', {
            url: '/tips',
            templateUrl: '/html/view/tips.php'

        })
        .state('links', {
            url: '/links',
            templateUrl: '/html/view/links.php'

        })
        .state('contactus', {
            url: '/contactus',
            templateUrl: '/html/view/contactus.php'

        })
});
