<?php
require_once './php/auth.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>文档</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/bird.png">
        <link rel="stylesheet" href="lib/bootstrap.min.css"/>
        <link rel="stylesheet" href="lib/codemirror.css"/>
        <script src="lib/angular.min.js"></script>
        <script src="lib/angular.ngRoute.js"></script>
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .error {
                color: #815ba4;
            }
        </style>
    </head>
    <body>
        <div class="container" ng-app="Bird">
            <h1><a href="#/"><img src="img/bird.png" /></a>文档</h1>
            <div ng-view></div>
            <footer>
                <div class="site-info">
                    <a href="/#about">关于本文档</a>
                    Copyright © 2015. Modified By <a href="mailto:634545374@qq.com">wangxiuwen</a> </div>
            </footer>
        </div>
        <script src="js/index.js"></script>
        <script src="js/add.js"></script>
        <script src="js/api.js"></script>
        <script src="js/about.js"></script>
        <script src="js/zepto.min.js"></script>
        <script>
                    var app = angular.module("Bird", ["ngRoute"]);
                    app.config(['$routeProvider',
                        function ($routeProvider) {
                            $routeProvider.
                                    when('/', {
                                        templateUrl: 'html/index.html',
                                        controller: 'Index'
                                    }).when('/add', {
                                templateUrl: 'html/add.html',
                                controller: 'Add'
                            }).when('/add/:href', {
                                templateUrl: 'html/add.html',
                                controller: 'Add'
                            }).when('/api/:href', {
                                templateUrl: 'html/api.html',
                                controller: 'Api'
                            }).when('/api/:href/:name', {
                                templateUrl: 'html/api.html',
                                controller: 'Api'
                            }).when('/about', {
                                templateUrl: 'html/about.html',
                                controller: 'About'
                            }).otherwise({
                                redirectTo: '/'
                            });
                        }]);
                    app.run(function ($rootScope, $location, $anchorScroll, $routeParams) {
                        //when the route is changed scroll to the proper element.
                        $rootScope.$on('$routeChangeSuccess', function (newRoute, oldRoute) {
                            $location.hash($routeParams.scrollTo);
                            $anchorScroll();
                        });
                    });
        </script>
    </body>
</html>
