/*
|--------------------------------------------------------------------------
| Toggle Main Navigation
|--------------------------------------------------------------------------
|
*/
(function() {
    'use strict';

    angular
        .module('twentyseven.shared')
        .directive('toggleNav', toggleNav);

    /* @ngInject */
    function toggleNav () {
        // Usage:
        // <a toggle-nav></a>
        var directive = {
            link: link,
            restrict: 'A',
        };

        return directive;

        function link(scope, element, attrs) {
        		jq(element).on('click', function (e) {
        			jq('body').toggleClass('nav-open');
        		});
        }
    }
})();