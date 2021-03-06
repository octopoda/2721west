<!DOCTYPE html>
<html lang="en">
<head>
	<!-- General Site Info -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> PAGE TITLE </title> <!-- TODO -->
  <meta name="description" content="PAGE DESCRIPTION"> <!-- TODO -->
  <meta name="keywords" content="PAGE KEYWORDS"> <!-- TODO -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content=""> <!-- TODO -->
  <meta property="og:image" content="images/icons/facebook.jpg">
  <meta property="og:description" content="PAGE DESCRIPTION">
  <meta property="og:title" content="PAGE TITLE">

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="PAGE DESCRIPTION">
  <meta itemprop="image" content="/images/icons/facebook.jpg">

  <!-- Twitter Card Metadata /-->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@2721west" /> <!-- TODO -->
  <meta name="twitter:title" content="2721West: Portfolio of Zack Davis" />
  <meta name="twitter:description" content="PAGE DESCRIPTION" />
  <meta name="twitter:image" content="" /> <!-- TODO -->
  <meta name="twitter:url" content="http://2721west.com" />

  <!-- iOS Integration -->
  <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/icons/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/icons/touch-icon-ipad-retina.png">

  <!-- IE Integration -->
  <meta name="application-name" content="2721West: Portfolio of Zack Davis"/>
  <meta name="msapplication-TileColor" content="#000000"/>
  <meta name="msapplication-square70x70logo" content="images/icons/tiny.png"/>
  <meta name="msapplication-square150x150logo" content="images/icons/square.jpg"/>
  <meta name="msapplication-wide310x150logo" content="images/icons/wide.jpg"/>
  <meta name="msapplication-square310x310logo" content="images/icons/large.jpg"/>
	
  <!-- CSS: implied media="all" -->
  @if ($app->environment('local'))
    <link rel="stylesheet" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/redactor.css">
  @elseif ($app->environment('production')) 
    <link rel="stylesheet" href="https://s3.amazonaws.com/2721west-assets/css/app.min.css">
    <link rel="stylesheet" href="https://s3.amazonaws.com/2721west-assets/css/redactor.css">
  @endif

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  
  <!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
</head>

<body ng-app="twentyseven">
  <div flash></div>
	
  <section class="dashboard__body">
      <section class="dashboard__navigation">
        @include ('layouts.admin.navigation')
      </section>
      
      <section class="dashboard__wrapper">
          <div class="dashboard__header">
            @include('layouts.admin.header')
          </div>
          <div class="dashboard__content">
            @yield('content')
          </div>
      </section>

      <footer>
        @include('layouts.front.footer')
      </footer>
  </section>


  @if ($app->environment('local'))
    <script type="text/javascript" src="/assets/scripts/redactor.min.js"></script>
  @elseif ($app->environment('production')) 
    <script type="text/javascript" src="https://s3.amazonaws.com/2721west-assets/scripts/redactor.min.js"></script>
  @endif

  <script>
    $(function () {
      $('#content').redactor({

      });

      $('#summary').redactor({

      });
    })
  </script>

  {{-- <script src="/tmp/vendor.min.js"></script>
  <script src="/tmp/app.min.js"></script>
 --}}
</body>
</html>


