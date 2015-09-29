(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .controller('ProjectController', ProjectController);

    ProjectController.$inject = ['sessionService', 'companyDataService']
    
    /* @ngInject */
    function ProjectController(sessionService, companyDataService) {
        var vm = this;
        vm.title = 'ProjectController';

        activate();

        ////////////////

        function activate() {
        	var data = companyDataService.getData();

        	if (data != false) {
        		sessionService.recordSession(companyDataService.getCompanyId());
        	}
        }
    }
})();