/*
|--------------------------------------------------------------------------
| Open the Main Navigation
|--------------------------------------------------------------------------
|
|
*/
(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('openNavigation', openNavigation);

    /* @ngInject */
    function openNavigation () {
        // Usage:
        // <div open-navigation></div>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	targetId: "&"
            }
        };
        return directive;

        function link(scope, element, attrs) {
        	jq(element[0]).on('click', function (e) {
        		jq('body').toggleClass('nav-open');
        	});
        }
    }


})();