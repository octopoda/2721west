(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('toTop', toTop);

    /* @ngInject */
    function toTop () {
        // Usage:
        // <div to-top></div>
        var directive = {
            link: link,
            restrict: 'A',
        };
        return directive;

        function link(scope, element, attrs) {
        
        	var el = jq(element);
        	
        	el.on('click', function () {
        		jq('html,body').animate({ scrollTop: 0 }, 'slow');	
        	})
        	


        	/**
	  		* Fix to bottom of page
	  		* Waypoints http://imakewebthings.com/waypoints/ 
	  		*/
      		var sticky = new Waypoint({
      			element: document.querySelector('body'),
      			handler: function () {
      				el.toggleClass('fixed');
      			},
      			offset:-200
      		});

      		/**
           * Removes when footer comes onto the page.
           * Waypoints http://imakewebthings.com/waypoints/ 
           */
          sticky = new Waypoint({
      			element: document.getElementById('goToNext'),
      			handler: function () {
              el.toggleClass('fixed');
      			},
      			offset:'60%'
      		});
        
        }
    }

    
})();