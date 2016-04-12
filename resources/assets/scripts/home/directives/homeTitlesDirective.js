(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .directive('homeTitle', homeTitle);

    /* @ngInject */
    function homeTitle () {
        // Usage:
        // <div data-home-title></div>
        var directive = {
            bindToController: true,
            controller: homeTitlesController,
            controllerAs: 'vd',
            link: link,
            templateUrl: '/templates/ui/home-titles.html',
            restrict: 'A',
            scope: {
            	titles: "=",
            	projects: "="
			}
        };
        
        return directive;

        function link(scope, element, attrs) {
      	  
        }
    }

    homeTitlesController.$inject = ['$scope', '$element', '$attrs'];

    /* @ngInject */
    function homeTitlesController ($scope, $element, $attrs) {
    	var vd = $scope.vd;
    		vd.selectedProjects = [];

    	/**
    	 * Select a project from a titls
    	 * @param  {string} title 
    	 * @return {object}       
    	 */
    	 $scope.selectProject = function (title) {
    	 	console.log('clicked it you little fucker: ' + title);
    	 	for (var i = 0; i < vd.projects.length; i++) {
    			if (vd.projects[i].titles.indexOf(title)) {
    				console.dir(vd.projects[i].name);
    				vd.selectedProjects.push(vd.projects[i]);
    			} else {
    				vd.selectedProjects.pop(vd.projects[i]);
    			}
    		}

    		console.dir(vd.selectedProjects);
    	}
    }
})();