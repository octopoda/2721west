(function() {
    'use strict';

    angular
        .module('twentyseven.assetbuilder')
        .directive('assetbuilderCarousel', assetbuilderCarousel);

    /* @ngInject */
    function assetbuilderCarousel () {
        // Usage:
        //
        // Creates:
        //
        var directive = {
            link: link,
            restrict: 'A',
        };
        return directive;

        function link(scope, element, attrs) {
        	jq(element[0]).owlCarousel({
        		center: true,
        		items: 4,
        		loop:true,
        		autoplay: true,
                smartSpeed: 1000,
                responsiveClass: true,
        		responsive: {
        			0: {
        				items: 1,
                        nav: false
        			},
        			728 : {
        				items:3
        			},
                    1024: {
                        items:4
                    },
                    1452: {
                        items: 4
                    }
                    

        		}

        	});


            jq('.assetbuilder__ipad--ipad').height(jq(element[0]).children('.owl-item').height());
        }
    }

    
})();