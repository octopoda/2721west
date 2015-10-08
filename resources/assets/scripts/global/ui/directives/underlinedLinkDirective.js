(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('underlinedLink', underlinedLink);

    /* @ngInject */
    function underlinedLink () {
        // Usage:
        // <div link href="" text="">
        var directive = {
            bindToController: true,
            controller: underlinedLinkController,
            controllerAs: 'vd',
            templateUrl: '/templates/ui/link.html',
            restrict: 'A',
            replace:true,
            scope: {
            	page: "@",
            	text: "@",
                linkId: "@"
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
        	
            
       	}
    }

    underlinedLinkController.$inject = ['$scope', '$element', '$attrs'];

    /* @ngInject */
    function underlinedLinkController($scope, $element, $attrs) {
            var vd = $scope.vd;

            
            if (vd.page === undefined) {
                $element.bind('click', function (e) {
                  e.preventDefault();
                });    
            }
    }
})();


