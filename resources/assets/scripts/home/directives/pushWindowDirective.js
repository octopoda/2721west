(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .directive('pushWindow', pushWindow);
    
    pushWindow.$inject = ['$window'];

    /* @ngInject */
    function pushWindow ($window) {
        // Usage:
        //
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        	
        	$window.onresize = function () {
        		changeHeight();
        	}

        	function changeHeight() {
        		var h = $window.innerHeight - 40;	
        		var d = document.body.offsetHeight;
                
                if (h > 960 && d < h) {
        			document.body.style.height = h + 'px';	
        		}
        	}

        	changeHeight();
		}
    }

    /* @ngInject */
    function Controller () {

    }
})();