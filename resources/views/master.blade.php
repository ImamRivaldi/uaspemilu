<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Data Pemilih Pemilu 2019</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Material Design -->
    <link href="{{ asset('bootstrap-material-design-master/dist/css/bootstrap-material-design.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-material-design-master/dist/css/ripples.min.css') }}" rel="stylesheet">
    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">
    <!-- Page style -->
    <link href="{{ asset('bootstrap-material-design-master/index.css') }}" rel="stylesheet">
    <!-- jQuery -->
    <a href="//code.jquery.com/jquery-1.10.2.min.js"></a>
</head>
<body>
    <div class="navbar navbar-info">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ Route ('index') }}">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
        <!--                <a href="{{ Route ('index') }}" class="navbar-brand"><img src="/img/logo.jpg" alt=""></a>-->
            </div>
<!--
            <div class="navbar-collapse collapse navbar-warning-collapse">
        
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ Route ('index') }}">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
        
            </div>
-->
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
     <!--
        Scripts
        -->
        <!-- Material Design for Bootstrap -->
        <a href="http://%20asset('bootstrap-material-design-master/dist/js/material.js')%20"></a>
        <a href="http://%20asset('bootstrap-material-design-master/dist/js/ripples.min.js')%20"></a>
        
        
        <!-- Sliders -->
        <a href="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></a>
</body>
</html>