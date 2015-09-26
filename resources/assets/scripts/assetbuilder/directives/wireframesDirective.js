(function() {
    'use strict';

    angular
        .module('twentyseven.assetbuilder')
        .directive('wireframes', wireframes);

    /* @ngInject */
    function wireframes () {
        // Usage:
        // <div wireframes></div>
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        

        	var waypoint = new Waypoint({
  					element: element[0],
  					handler: function(direction) {
    					jq(element[0]).removeClass('out');
  					},
  					offset: '70%'
				});
        }
    }

    
})();