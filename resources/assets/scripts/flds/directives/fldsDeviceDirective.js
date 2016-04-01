(function() {
    'use strict';

    angular
        .module('twentyseven.flds')
        .directive('fldsDevice', fldsDevice);

    /* @ngInject */
    function fldsDevice () {
        // Usage:
        // <div flds-device>
        // Creates:
        //
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