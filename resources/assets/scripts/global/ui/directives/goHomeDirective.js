(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('goHome', goHome);

    /* @ngInject */
    function goHome () {
        // Usage:
        // <a go-home></a>
        var directive = {
            link: link,
            restrict: 'A',
        };
        return directive;

        function link(scope, element, attrs) {
        	jq(element[0]).on('click', function (e) {
        		window.location = '/';
        	});
        }
    }

   
})();