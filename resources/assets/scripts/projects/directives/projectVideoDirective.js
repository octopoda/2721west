(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .directive('projectVideo', projectVideo);

    /* @ngInject */
    function projectVideo() {
        // Usage:
        // <div projct-full-size-image></div>
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            }
        };
        return directive;

        function link(scope, element, attrs) {
      			var el = jq(element[0]);  	
      			var img = el.children('video');

            img.on('load', function () {
              el.height(img.height());	
      			});
        }
    }

    
})();