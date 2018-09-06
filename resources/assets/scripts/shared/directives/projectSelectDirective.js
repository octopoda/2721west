(function() {
    'use strict';

    angular
        .module('twentyseven.shared')
        .directive('projectListing', projectListing);

    /* @ngInject */
    function projectListing () {
        // Usage:
        // <div project-listing data-projects=""></div>
        var directive = {
            bindToController: true,
            controller: ProjectListingController,
            controllerAs: 'vd',
            templateUrl: '/templates/projects/project-listing.html',
            link: link,
            restrict: 'A',
            scope: {
            	projects: "="
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
        
        }
    }


    ProjectListingController.$inject = ['$scope', '$element', '$attrs', '$window'];

    
    /* @ngInject */
    function ProjectListingController ($scope, $element, $attrs, $window) {
    	var vd = $scope.vd;
    		vd.goToLink = goToLink;


    	function goToLink(url) {
    		console.log('message');
    		$window.location = url;
    	} 


    }
})();