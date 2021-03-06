<!DOCTYPE html>
<html lang="en" class="full">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | EVEMail | Web Mail Client for EVE Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ secure_url('css/general.css') }}?v={{ rand() }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            @include('extra.navbar')

        </nav>

       <!-- Page Content -->
       <div class="container">
           <div class="row">
               <div class="col-md-6 col-sm-12" style="color: white;">
                   <div class="text-vertical-center">
                       <h1>Welcome to EVEMail.</h1>
                       <h3>The Webmail Client of the EVE Online Universe</h3>
                       <br>
                       <a href="{{ route('services') }}" class="btn btn-default btn-lg">Find Out More</a>
                       @if (Auth::check())
                           <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">View My Dashboard</a>
                       @else
                           <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login Now</a>
                       @endif
                       <!-- <div class="row">
                           <div class="col-md-12">
                               <br />
                               <div class="alert alert-warning">
                                   <h3>Site is Actively being worked on</h3>
                                   <p>
                                       Welcome to EVEMail. If this is your first time, I want to apologize. We have encountered a few bugs in our site, and there are no mechanisms in places for us to work on the site and use the same database without having it up and open to the public. With that said, if you want to, go ahead and log in, but i am not promising that the site is up and working.<br /><br />If you are a returning visitor, read above. The site is down and I apologize. We are working to get it back up ASAP. Thank You<br /><br />Thank You,<br />David Davaham<br />The Developer
                                   </p>
                               </div>
                           </div>
                       </div> -->
                   </div>
               </div>
           </div>
           <!-- /.row -->
       </div>
       <!-- /.container -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
