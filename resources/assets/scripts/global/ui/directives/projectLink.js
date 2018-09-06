(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('projectLink', projectLink);

    projectLink.$inject = ['$window'];

    /* @ngInject */
    function projectLink ($window) {
        // Usage:
        // <div project-link></div>
        
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	link: "@"
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
       			element.bind('click', function () {
                    console.log(scope.link);
       				$window.location = scope.link;
       			}); 
        }
    }

    /* @ngInject */
    function Controller () {

    }
})();