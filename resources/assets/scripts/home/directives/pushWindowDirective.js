(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .directive('pushWindow', pushWindow);
    
    pushWindow.$inject = ['$window'];

    /* @ngInject */
    function pushWindow ($window) {
        // Usage:
        //
        var directive = {
            link: link,
            restrict: 'A',
        };
        
        return directive;

        function link(scope, element, attrs) {
        	
        	$window.onresize = function () {
        		setHeight();
        	}

        	/**
             * Set the Height of the Document
             */
            function setHeight() {
        		var body = document.body,
                    html = document.documentElement;

                var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );   
                document.documentElement.style.height = height + 'px';
        	}



            /**
             *  Watch function for Height Change of Element     
             * @param  {[type]}   elm      [description]
             * @param  {Function} callback [description]
             * @return {[type]}            [description]
             */
            function onElementHeightChange(elm, callback){
                var lastHeight = elm.clientHeight, newHeight;
                
                (function run(){
                    newHeight = elm.clientHeight;
                    if( lastHeight != newHeight )
                        callback();
                    lastHeight = newHeight;

                    if( elm.onElementHeightChangeTimer )
                        clearTimeout(elm.onElementHeightChangeTimer);

                    elm.onElementHeightChangeTimer = setTimeout(run, 200);
                })();
            }


        	// changeHeight();
            onElementHeightChange(document.querySelector('.app-wrapper'), function () {
                setHeight();
            })
		}
    }
})();



