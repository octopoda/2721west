(function() {
    'use strict';

    angular
        .module('twentyseven.flds')
        .directive('dashboard', dashboard);

    /* @ngInject */
    function dashboard () {
        // Usage:
        // <div dashboard>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            }
        };
   
        return directive;

        function link(scope, element, attrs) {

        	var waypoint = new Waypoint({
				element: element[0],
				handler: function(direction) {
					element[0].classList.remove('out');
				},
				offset: '80%'
			});

        }
    }

    
})();