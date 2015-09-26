// (function () {
	'use strict';

	angular
		.module('twentyseven')
		.config(configure);


	configure.$inject = ['$interpolateProvider'];

	// * @ngInject 
	function configure($interpolateProvider) {
		$interpolateProvider.startSymbol("{!");
		$interpolateProvider.endSymbol("!}");
	}

// })();