(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('projectService', projectService);

    projectService.$inject = ['$http', 'errors', 'common'];

    /* @ngInject */
    function projectService($http, errors, common) {
        var apiUrl = common.apiUrl + 'projects.json'
    
        var service = {
            getProjects: getProjects
        };
     
        return service;

        ////////////////

        /**
         * Get the Projects JSON
         * @return {object} 
         */
        function getProjects() {
            console.dir(apiUrl);
            return $http.get(apiUrl)
                .then(projectsComplete)
                .catch(function (message) {
                    errors.catcher('Cannot get a list of the projects at this time.')(message);
                });

            function projectsComplete(data, status, header, config) {
                return data;
            }
        }
    }
})();