 <!-- General Site Info -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $pageInfo['pageTitle'] }} </title> 
  <meta name="description" content="{{ $pageInfo['pageDesc'] }}"> 
  <meta name="keywords" content="{{ $pageInfo['keywords'] }}">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <link rel="shortcut icon" href="favicon.ico?v=1.3" type="image/x-icon">
  <link rel="manifest" href="/images/icons/manifest.json">

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="{{ $pageInfo['pageDesc'] }}"> 
  <meta property="og:site_name" content="2721 West: Portfolio of Zack Davis">
  <meta property="og:type" content="article" >
  <meta property="article:author" content="Zack Davis">
  <meta property="og:image" content="{{  $pageInfo['shareImage'] }}/facebook.jpg">
  <meta property="og:description" content="{{ $pageInfo['pageDesc'] }}">
  <meta property="og:title" content="{{ $pageInfo['pageTitle'] }}">

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="{{ $pageInfo['pageTitle'] }}">
  <meta itemprop="description" content="{{ $pageInfo['pageDesc'] }}">
  <meta itemprop="image" content="{{  $pageInfo['assetPath'] }}/icons/facebook.jpg">

  <!-- Twitter Card Metadata /-->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@2721west"> 
  <meta name="twitter:title" content="2721West.com {{ $pageInfo['pageTitle'] }}" />
  <meta name="twitter:description" content="{{ $pageInfo['pageDesc'] }}" />
  <meta name="twitter:image" content="{{ $pageInfo['shareImage'] }}/twitter.png" /> 
  <meta name="twitter:url" content="http://2721west.com" />

  <!-- iOS Integration -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ $pageInfo['assetPath'] }}/images/icons/apple-touch-icon-180x180.png">
  <meta name="apple-mobile-web-app-title" content="2721west">

  {{-- Android  --}}
  <link rel="icon" type="image/png" href="{{ $pageInfo['assetPath'] }}/images/icons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ $pageInfo['assetPath'] }}/images/icons/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="{{ $pageInfo['assetPath'] }}/images/icons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="{{ $pageInfo['assetPath'] }}/images/icons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="{{ $pageInfo['assetPath'] }}/images/icons/favicon-16x16.png" sizes="16x16">
  <meta name="application-name" content="2721west">

  <!-- IE Integration -->
  <meta name="application-name" content="2721West: Zack Davis Digital Designer / Full Stack Developer"/>
  <meta name="msapplication-TileColor" content="#000000"/>
  <meta name="msapplication-square70x70logo" content="{{  $pageInfo['assetPath'] }}/icons/tiny.png"/>
  <meta name="msapplication-square150x150logo" content="{{  $pageInfo['assetPath'] }}/icons/square.jpg"/>
  <meta name="msapplication-wide310x150logo" content="{{  $pageInfo['assetPath'] }}/icons/wide.jpg"/>
  <meta name="msapplication-square310x310logo" content="{{  $pageInfo['assetPath'] }}/icons/large.jpg"/>
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="{{ $pageInfo['assetPath'] }}/images/icons/mstile-144x144.png">
  <meta name="msapplication-config" content="{{ $pageInfo['assetPath'] }}/images/icons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  
  <!-- CSS: implied media="all" -->
  @if ($app->environment('local'))
    <link rel="stylesheet" href="/assets/css/app.min.css">
  @elseif ($app->environment('production')) 
    <link rel="stylesheet" href="https://s3.amazonaws.com/2721west-assets/css/app.min.css?v=000000001">
  @endif


  @if (session()->has('guid'))
    <?php
      $c = new twentyseven\Http\Controllers\CompanyController();
      $company = $c->dataLayer(Session::get('guid'));
      
    ?>
    <script>
      dataLayer = [{
        'companyVisiting' : "{{ $company }}"
      }];
    </script>
  @endif 

  <base href="/">
  
  <!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 9]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->