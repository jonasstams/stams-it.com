(function () {
    'use strict';

    var app = angular.module('myApp', ['ngRoute'])
        .config(moduleConfig);

    moduleConfig.$inject = ['$routeProvider'];


    function moduleConfig($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.html'
            })
            .when('/about', {
                templateUrl: 'views/about.html'
            })
            .when('/contact', {
                templateUrl: 'views/contact.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    }

})();