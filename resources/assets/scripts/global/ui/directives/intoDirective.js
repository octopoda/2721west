(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('into', into);

    /* @ngInject */
    function into () {
        // Usage:
        // <div into>
        
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        	element[0].classList.add('into');

        	var waypoint = new Waypoint({
                element: element[0],
                handler: function(direction) {
                    element[0].classList.add('active');
                },
                offset: '75%'
            });
        }
    }

    /* @ngInject */
    function Controller () {

    }
})();