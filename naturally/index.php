<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Ícone-->
    <link rel="shortcut icon" href="frontend/assets/img/naturally.ico" type="image/x-icon"/>
    <title>Naturally</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- font-family Googjle -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Chenla" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="frontend/assets/css/animate.css">
    <link rel="stylesheet" href="frontend/assets/css/icomoon.css">
    <link rel="stylesheet" href="frontend/assets/css/estilo.css">
    <link rel="stylesheet" href="frontend/assets/fonts-icons/fonts/fa-css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body ng-app="appNaturally" ng-controller="naturallyController">
<!--<div class="gtco-loader"></div>-->
<div id="page">
    <div ng-include='"frontend/templates/navbar.php"'></div>
    <div ng-view></div>
    <!--Footer-->
    <div ng-include='"frontend/templates/footer.html"'></div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--Bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<!--Angular-->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular-route.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/angular-ui-router/1.0.0-rc.1/angular-ui-router.min.js"></script> -->
<script src="backend/javascript/module.js"></script>
<script src="backend/javascript/route.js"></script>
<script src="backend/javascript/controllers.js"></script>
<!--JavaScript-->
<script src="backend/javascript/app.js"></script>
<script src="frontend/assets/js/layout/jquery.easing.1.3.js"></script>
<script src="frontend/assets/js/layout/jquery.waypoints.min.js"></script>
<script src="frontend/assets/js/layout/jquery.stellar.min.js"></script>
<script src="frontend/assets/js/layout/modernizr-2.6.2.min.js"></script>
<script src="frontend/assets/js/layout/jquery.backstretch.min.js"></script>
<script src="frontend/assets/js/layout/wow.min.js"></script>
<script src="frontend/assets/js/layout/fundamental.js"></script>
</body>
</html>