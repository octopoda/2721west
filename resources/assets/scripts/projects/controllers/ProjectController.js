(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .controller('ProjectController', ProjectController);

    ProjectController.$inject = ['sessionService', 'companyDataService', '$window']
    
    /* @ngInject */
    function ProjectController(sessionService, companyDataService, $window) {
        var vm = this;
        vm.title = 'ProjectController';

        activate();

        ////////////////

        function activate() {
        	var data = companyDataService.getData();

        	if (data != false) {
        		sessionService.setupCompany(companyDataService.getCompanyId());
        	}

            $window.onbeforeunload = function (event) {
                sessionService.recordSession(TimeMe.getTimeOnCurrentPageInSeconds());
            }
        }
    }
})();