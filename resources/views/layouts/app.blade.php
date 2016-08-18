<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Safety First</title>

    <!--Materialize-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!--ANGULAR-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
	<script src="js/app.js"></script>
</head>
<body id="app-layout" class="blue lighten-5">
    <nav class="amber darken-1">
        <div class="container">
           <div class="nav-wrapper">
            <a href="/" class="brand-logo">Safety First</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if (Auth::check())
                    <li><a href="/graph" >XML Feed</a></li>
                    <li><a href="/logout">Logout</a></li>
                @else 
                    <li><a href="/login"><b>Sign in</b></a></li>
                    <li><a href="/register" class="waves-effect waves-light btn-large green darken-1">Register</a></a></li>
                @endif
            </ul>
        </div>         
        </div>
    </nav>

    <div class="row">
        <div class="col s12 m3 l3">
            <h2></h2>
            @yield('left')
        </div>
        <div class="col s12 m6 l6">
            <h2></h2>
            @yield('middle')
        </div>
        <div class="col s12 m3 l3">
            <h2></h2>
            @yield('right')
        </div>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.0/raphael-min.js"></script>

    
<script type="text/javascript" src="/js/raphael/raphael-min.js"></script>
<script src="/js/raphael/g.raphael.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/raphael/g.pie.js" type="text/javascript" charset="utf-8"></script>
<script>
    $('#triggerEdit').click(function({
        $('#editForm').show();
    }))
    
</script>
</body>
</html>
