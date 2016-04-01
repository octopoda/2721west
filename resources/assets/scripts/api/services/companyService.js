(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('companyService', companyService);

    companyService.$inject = ['$http', 'errors', 'common'];
    
    /* @ngInject */
    function companyService($http, errors, common) {
        var apiUrl = common.apiUrl + 'company/';
        var service = {
            getCompanyInformation: getCompanyInformation
        };
        return service;

        ////////////////

        function getCompanyInformation(guid) {
        	return $http.get(apiUrl + guid)
        		.then(companyFinished)
        		.catch(function (message) {
        			errors.catcher('Couldn\'t get company information at this time')(message);
        		});

        		function companyFinished (data, status, headers, config) {
        			return data.data;
        		}
			}
    }
})();