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
        .state('about', {
        	url:'/about',
        	templateUrl: '/html/view/about.php'
            // we'll get to this in a bit
        })
        // News Pge
        .state('news', {
            url:'/news',
            templateUrl: '/html/view/news.php'
            // we'll get to this in a bit
        })
        .state('contactus', {
            url:'/contactus',
            templateUrl: '/html/view/contactus.php'
            // we'll get to this in a bit
        })
        .state('login', {
            url:'/login',
            templateUrl: '/html/view/login.php'
            // we'll get to this in a bit
        })


});