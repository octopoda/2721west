(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('HomeController', HomeController);

   HomeController.$inject = [ 'roleService', 'companyService', 'companyDataService', 'common', 'sessionService', '$window', '$rootScope'];

    /* @ngInject */
    function HomeController( roleService, companyService, companyDataService, common, sessionService, $window, $rootScope) {
        var vm = this;
        vm.title = 'HomeController';

        
      /*
       |--------------------------------------------------------------------------
       | Form Variables
       |--------------------------------------------------------------------------
       |
       |
       */      

        vm.errors = false;
        vm.num = 1;
        vm.fullName = null;
        vm.Roles = null;
        vm.Projects = null;
        vm.Selected = null;

        vm.fillCompanyInformation = fillCompanyInformation;

        

        ////////////////

        activate();

        /**
         * Controller Activeed
         */
        function activate() {
              getRolesAndProjects();
              setupSession();      

        } 

          /**
         * Parse through data to find the index for the portfolio id
         * @param  {object} data         
         * @param  {int} portfolio_id 
         * @return {int}              
         */
        function findIndexByRoleId(role_id) {
            for (var i = 0; i < vm.Roles.length; i++) {
                if (vm.Roles[i].id === role_id) {
                    break;
                }
            }

            return i;
        }

        function findIndexByRoleTitle(title) {
          
          for (var i = 0; i < vm.Roles.length; i++) {
            if (vm.Roles[i].title === title) {
              break;
            }
          }
          
          return i;
        }


        /**
         * Setup the Session Timer
         * @return {[type]} [description]
         */
        function setupSession() {
          $window.onbeforeunload = function (event) {
            sessionService.recordSession(TimeMe.getTimeOnCurrentPageInSeconds());
          }
        }


/*
|--------------------------------------------------------------------------
| Playing with the Company
|--------------------------------------------------------------------------
|
|
*/

      /**
         * Get the Company information is short URL
         * @param  {string} guid 
         * @return {object} 
         */
        function fillCompanyInformation(guid) {
            var data = companyDataService.getData();
            
            if (data == false) {
                companyService.getCompanyInformation(guid).then(function (data) {   
                    
                    if (data.first_name == undefined) return;
                    vm.fullName = data.first_name + ' ' + data.last_name;
                    
                    companyDataService.addData(data);
                    sessionService.setupCompany(companyDataService.getCompanyId());
                    common.sendHook(data.company + ' is visiting the site', 'Get excited because '  +  vm.fullName  + ' is checking out your shit');
                });
            } else {
                companyDataService.addData(data);
                sessionService.setupCompany(companyDataService.getCompanyId());
                vm.fullName = companyDataService.fullName();
            }

            return false;
        }


        /**
         * Get all the Roles and Projects
         * @return {object} 
         */
        function getRolesAndProjects(title) {
          return roleService.getRoles().then(function (data) {
              vm.Roles = data.data
              if (title == null) {
                vm.Selected = vm.Roles[1].role;
                vm.Projects = vm.Roles[1].projects;
              } else {
                var index = findIndexByRoleTitle(title);
                vm.Selected = vm.Roles[index].role;
                vm.Projects = vm.Roles[index].projects;
              }
              
              
              return vm.Roles;
          });
        }

        /**
         * Listen for the Role to Change
         * @param  {event} event    
         * @param  {int} role_id
         * @return {func}
         */
        $rootScope.$on('role_changed', function (event, role_id) {
              var index = findIndexByRoleId(role_id);
              vm.Selected = vm.Roles[index].role;
              vm.Projects = vm.Roles[index].projects;
        });


    }

})();