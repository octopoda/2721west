(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('roleService', roleService);

    roleService.$inject = ['$http', 'errors', 'common'];

    /* @ngInject */
    function roleService($http, errors, common) {
        var apiUrl = common.apiUrl + 'roles'
    
        var service = {
            getRoles: getRoles
        };
     
        return service;

        ////////////////

        /**
         * Get the Projects JSON
         * @return {object} 
         */
        function getRoles() {
            return $http.get(apiUrl)
                .then(rolesComplete)
                .catch(function (message) {
                    errors.catcher('Cannot get a list of the roles at this time.')(message);
                });

            function rolesComplete(data, status, header, config) {
                return data;
            }
        }
    }
})();