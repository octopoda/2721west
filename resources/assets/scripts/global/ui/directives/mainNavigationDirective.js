(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('mainNavgation', mainNavgation);

    /* @ngInject */
    function mainNavgation () {
        // Usage:
        // <div main-navigation>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            }
        };
        return directive;

        function link(scope, element, attrs) {

                console.log('testing');
            
                var changeBackground = new Waypoint({
                    element: element[0],
                    handler: function(direction) {
                        jq(element[0]).removeClass('out');
                    },
                    offset: '-20%'
                });


                var offScreen = new Waypoint({
                    element: element[0],
                    handler: function(direction) {
                        jq(element[0]).removeClass('background');
                    },
                    offset: '-10%'
                });


                var backOnScreen = new Waypoint({
                    element: element[0],
                    handler: function (direction) {
                        if (direction === 'up') {
                            console.log('scrolling up');
                        }
                    }
                })



        }
    }

})();