/*
|--------------------------------------------------------------------------
| Continer to Hold the Thumbnails for the Project
|--------------------------------------------------------------------------
|
*/
(function() {
    'use strict';

    angular
        .module('twentyseven.projects')
        .directive('projectContainer', projectContainer);

    /* @ngInject */
    function projectContainer () {
        // Usage:
        // <div project-container></div>
        var directive = {
            bindToController: true,
            controller: projectContainerController,
            controllerAs: 'vd',
            link: link,
            restrict: 'A',
            replace:true,
            templateUrl: './templates/projects/project-container.html',
            scope: {
            }
        };
        return directive;

        function link(scope, element, attrs) {
            jq('.project-container__project').on('click', function () {

            })

        }
    }

    projectContainerController.$inject =  ['projectService'];

    /* @ngInject */
    function projectContainerController (projectService) {
        var vd = this;
        vd.title = 'ProjectContainerController';
        vd.Projects;
        vd.changeProject = changeProject;

        activate();

        ////////////////

        function activate() {
            return getProjects().then(function (data) {

            });
        }


        /**
         * Get the projects from the datasource
         * @return {object} 
         */
        function getProjects() {
            return projectService.getProjects().then(function (data) {
                vd.Projects = data.Projects;
                return vd.Projects;
            });
        }

        /**
         * Change the Projects./
         * @return {} [description]
         */
        function changeProject(projectClass) {
            console.log('clicked');
            jq('#mainBlackoutTwo').addClass(projectClass);
            jq('#mainBlackout').addClass('open');
            
        }
    }
})();