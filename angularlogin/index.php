<!doctype html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>My Log In Page</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/toaster.css" rel="stylesheet">
    <style>
        body {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <toaster-container toaster-options="{'time-out': 4000}"></toaster-container>
    <!-- JavaScripts -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/toaster.js"></script>
    <script src="files/angularjs/myapp.js"></script>
    <script src="files/angularjs/input.js"></script>
    <script src="files/angularjs/mydirectives.js"></script>
    <script src="files/angularjs/controls.js"></script>
</body>
</html>
