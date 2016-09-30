<!-- Scripts go here -->
 {{-- @if ($pageInfo['assetPath'] == '/assets')  --}}
 @if ($app->environment('local'))
  	<script src="/tmp/vendor-file.js"></script>
  	<script src="/tmp/angular.js"></script>
  	<script src="/tmp/templates.js"></script>
 @elseif ($app->environment('production')) 
 	<script src="{{ $pageInfo['assetPath'] }}/scripts/app.min.js?v=0.00003"></script> 
 @endif

 <script type="text/javascript">
 	TimeMe.setIdleDurationInSeconds(30);
 	TimeMe.setCurrentPageName('{{ $pageInfo["pageShort"] }}');
 	TimeMe.initialize();
 </script>

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4634814-1', 'auto');
  ga('send', 'pageview');

</script>
  