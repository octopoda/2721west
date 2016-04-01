(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('projectImage', projectImage);

    /* @ngInject */
    function projectImage () {
        // Usage:
        // <div into>
        
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        	element[0].classList.add('off');

            var waypoint = new Waypoint({
                element: element[0],
                handler: function(direction) {
                    element[0].classList.remove('off');
                },
                offset: '82%'
            });
        }
    }
})();