<!-- Scripts go here -->
 {{-- @if ($pageInfo['assetPath'] == '/assets')  --}}
 @if ($app->environment('local'))
  	<script src="/tmp/vendor-file.js"></script>
  	<script src="/tmp/angular.js"></script>
  	<script src="/tmp/templates.js"></script>
 @elseif ($app->environment('production')) 
 	<script src="{{ $pageInfo['assetPath'] }}/scripts/app.min.js?v=0.00001"></script> 
 @endif
  