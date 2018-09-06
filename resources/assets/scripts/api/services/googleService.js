(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('googleService', googleService);

    googleService.$inject = ['$http', 'errors', 'common'];

    /* @ngInject */
    function googleService($http, errors, common) {
        var apiUrl = common.apiUrl + 'google';

        var service = {
            checkPassword: checkPassword
        };
        
        return service;

        ////////////////

        function checkPassword(data) {
        	return $http.post(apiUrl, data)
        		.then(passwordComplete)
        		.catch(function (message) {
        			errors.catcher('Cannot download file at this time')(message);
        		});

        		function passwordComplete(data, status, header, config) {
        			return data;
        		}
        }
    }
})();