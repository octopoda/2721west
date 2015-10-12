(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('goHome', goHome);

    goHome.$inject = ['$window'];
    
    /* @ngInject */
    function goHome ($window) {
        // Usage:
        // <a go-home></a>
        var directive = {
            link: link,
            restrict: 'A',
        };
        return directive;

        function link(scope, element, attrs) {
        	element.bind('click', function (e) {
               $window.location = "/";
            })
        }
    }

   
})();