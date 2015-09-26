/*
|--------------------------------------------------------------------------
| Fixed Asset Directive	
|--------------------------------------------------------------------------
|
| Fixes the div to the top of the page while user 
| is scrolling.  When next session passes the 
| piece will unfix.
|
*/
(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .directive('fixedAsset', fixedAsset);


    /* @ngInject */
    function fixedAsset () {
        // Usage:
        // <div fixed-asset></div>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            
            }
        };
        return directive;

        function link(scope, element, attrs) {
        	var el = jq(element);
        	var next = el.next('.scrolling-asset');

        	var waypoint = new Waypoint({
	 					 element: element[0],
	  				 handler: function() {
	    				jq(element).addClass('fixed-asset');
	  				 }
					});


					var nextWaypoint = new Waypoint({	
						element: document.querySelector('.scrolling-asset'),
						handler: function () {
							console.log('hello');
							jq(element).removeClass('fixed-asset');
						}
					})
        }
    }

})();