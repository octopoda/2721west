(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('slideNavigation', slideNavigation);

    /* @ngInject */
    function slideNavigation () {
        // Usage:
        // <div data-slide-navigation></div>
        var directive = {
            link: link,
            restrict: 'A',
            templateUrl: '/templates/ui/slide-navigation.html',
            replace: true,
            scope: {
            }
        };
        return directive;


        function link(scope, element, attrs) {

        }
    }


})();