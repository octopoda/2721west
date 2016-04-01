(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('parallax', parallax);

    parallax.$inject  = ['$window'];

    /* @ngInject */
    function parallax ($window) {
        // Usage:
        // <div parallax></div>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	direction: "@"
            }
        };
        return directive;

        function link(scope, element, attrs) {
        	var el = element[0];
	    	var vd = scope;

			
			var start = new Waypoint({
				element: element[0],
				handler: function (direction) {
					scrolling();
				}, 
				offset: '100%'
			});

			 

			function scrolling () {
				angular.element($window).bind('scroll', function () {
	     		 	var offset = $window.pageYOffset;
					var parent = el.parentNode.parentNode;
	     		 	var difference = (parent.offsetTop - parent.scrollTop) - offset;
	     		 	
	     		 	if (vd.direction == 'down') {
						el.style.marginBottom = (difference / 2.5) + "px"	
					} else {
						el.style.marginTop = (difference / 2.5) + "px"	
					}
     			});
			};
			
		}
    }

    
})();



