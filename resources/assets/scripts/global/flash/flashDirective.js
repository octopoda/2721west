(function() {
    'use strict';

    angular
        .module('global.flash')
        .directive('flash', Flash);

    Flash.$inject = ['$rootScope', '$timeout'];

    /* @ngInject */
    function Flash ($rootScope, $timeout) {
        // Usage:
        // <div flash></div>
        var directive = {
            bindToController: true,
            controller: Controller,
            controllerAs: 'vd',
            link: link,
            templateUrl: './templates/global/flash.html',
            restrict: 'A',
            scope: {
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
					 var el = jq(element);
					 var vd = scope.vd;
					 		 vd.closeFlash = closeFlash;
					 		 vd.close = false;
					 		 vd.actionButton = false;


					 /**
					  * Display the Flash in an Error Format with Close
					  * @note add button in flash to alert technology - will be sent through mailService
					  * 
					  */		 
					 $rootScope.$on('flash.error', function handleErrorFlash( event, message) {
					 		vd.close = true;
					 		el.addClass('error').addClass('open');
					 		vd.heading = message;
					 		vd.actionButton = true;
					 		vd.actionText = 'Alert Us'; 
					 });

					 /**
					  * Display the Flash in an Success Format
					  */
					 $rootScope.$on('flash.success', function handleSuccessFlash( event, message) {
					 		el.addClass('success').addClass('open');
					 		vd.heading = message;
					 		$timeout(closeFlash, 3000);
					 });

					 /**
					  * Display the Flash in an Warning Format ready for Close
					  */
					 $rootScope.$on('flash.warning', function handleWarningFlash( event, message) {
					 		vd.close = true;
					 		el.addClass('warning').addClass('open');
					 		vd.heading = message;
					 		$timeout(closeFlash, 3000);
					 });

					 /**
					  * Display the Flash in an Info Format
					  */
					 $rootScope.$on('flash.info', function handleInfoFlash( event, message) {
					 		el.addClass('info').addClass('open');
					 		vd.heading = message;
					 		$timeout(closeFlash, 3000);
					 });

					 /**
					  * Close the Flash
					  * @return {DOM} 
					  */
					 function closeFlash() {
					 		el.removeClass('open');
					 }
        }
    }

    /* @ngInject */
    function Controller () {

    }

})();