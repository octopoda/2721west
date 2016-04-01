(function() {
    'use strict';

    angular
        .module('twentyseven.innovation')
        .directive('carousel', carousel);

    /* @ngInject */
    function carousel () {
        // Usage:
        // <div carousel>
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        	

			jq(element[0]).owlCarousel({
        		items: 1,
                autoplay:true,
                loop:true,
        		nav: false,
        		dots: true,
        		margin:0,
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