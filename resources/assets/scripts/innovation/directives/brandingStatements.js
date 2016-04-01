(function() {
    'use strict';

    angular
        .module('twentyseven.innovation')
        .directive('brandingStatment', brandingStatment);

    /* @ngInject */
    function brandingStatment () {
        // Usage:
        // <div brandingStatment>
        
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
                    jq(element[0]).removeClass('out');
                },
                offset: '50%'
            });
        }
    }

    
})();