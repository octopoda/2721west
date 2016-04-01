(function () {
	'use strict';

	var shared = angular.module('twentyseven.shared');

	var config = {
		appErrorPrefix: '[2721west.com Website Error]',
		appTitle: '2721west.com',
		version: '4.0.0'
	}

	shared.value('config', config);
	share.config(configure)

	configure.$inject = ['$logProvider', 'exceptionHandlerProvider'];

	/** @ngInject */
	function configure($logProvider, exceptionHandlerProvider) {
		//Turn debugging off/on (no info or warn);
		if ($logProvider.debugEnabled) {
			$logProvider.debugEnabled(true);
		}

		//Configure the common exception handler
		exceptionHandlerProvider.configure(config.appErrorPrefix);

	}

});