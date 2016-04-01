(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .directive('projectTitle', preojctTitle);

    /* @ngInject */
    function preojctTitle () {
        // Usage:
        // <div data-project-title></div>
        var directive = {
            link: link,
            restrict: 'A',
            replace: true,
            templateUrl: '/templates/projects/project-title.html',
            scope: {
            	title: "@",
            	client: "@",
            	roles: "@",
            }
        };
        return directive;

        function link(scope, element, attrs) {
        	var vd = scope;


        	vd.project = {
        		Title : vd.title,
        		Roles: vd.roles,
        		Client: vd.client
			}
        }
    }

    
})();