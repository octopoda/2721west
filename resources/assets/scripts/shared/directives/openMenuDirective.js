/*
|--------------------------------------------------------------------------
| Open Menu Directive
|--------------------------------------------------------------------------
|
| Sets the target-id class to open
|
*/

(function() {
    'use strict';

    angular
        .module('twentyseven.shared')
        .directive('openMenu', openMenu);

    /* @ngInject */
    function openMenu () {
        // Usage:
        // <a open-menu target-id="&" href="#"></a>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	targetId: "&"
            }
        };
        return directive;

        function link(scope, element, attrs) {

        	jq(element).on('click', function (e) {
        		jq('#'+ scope.targetId).toggleClass('open');
        	});
        }
    }

    
})();