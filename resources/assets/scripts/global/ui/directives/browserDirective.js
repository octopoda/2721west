(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('browserDetect', browserDetect);

    /* @ngInject */
    function browserDetect () {
        // Usage:
        //
        // Creates:
        //
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
    		var is_chrome = window.chrome;
			var is_safari = (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1);

			if (is_chrome) {
			    element[0].classList.add('chrome');
			}
			else if (is_safari) {
			    element[0].classList.add('safari');
			}    
        }
    }

    
})();