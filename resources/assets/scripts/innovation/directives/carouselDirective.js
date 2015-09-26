(function() {
    'use strict';

    angular
        .module('twentyseven.innovation')
        .directive('carousel', carousel);

    /* @ngInject */
    function carousel () {
        // Usage:
        // <div carousel>
        // Creates:
        //
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
        	
			jq(element[0]).owlCarousel({
        		loop:true,
        		nav: false,
        		dots: true,
        		margin:0,
        		autoplay:true,
        		items:1,
        		width: '80%',
                responsive: {
                    0: {
                        stagePadding: 0
                    },
                    728 : {
                        stagePadding: 0
                    }
                }
			});
        }
    }

    
})();