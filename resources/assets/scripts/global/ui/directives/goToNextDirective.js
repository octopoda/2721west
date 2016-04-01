(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('goToNext', goToNext);

    /* @ngInject */
    function goToNext () {
        // Usage:
        // <div go-to-next link="{link}" id="goToNext"></div>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	link: "@"
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
        	jq(element[0]).on('click', function (e) {
        		goToLink();
        	});

        	document.getElementById('goToNext').addEventListener('touchend', function () {
        		goToLink();
        	});

        	function goToLink() {
        		window.location = scope.link;
        	}
        }


    }

    /* @ngInject */
    function Controller () {

    }
})();