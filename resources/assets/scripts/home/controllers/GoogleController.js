(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('GoogleController', GoogleController);

    GoogleController.$inject = ['$scope', 'googleService'];

    /* @ngInject */
    function GoogleController($scope, googleService) {
        var vm = this;
        vm.title = 'GoogleController';
        vm.loading = false;
        vm.success = false;
        vm.error = false;

        activate();

      
        vm.fileOptions =  [
            {name:'Keynote (71.5 mb)', id:1, disabled: false},
            {name:'Power Point (67.2 mb)', id:2, disabled: false},
            {name:'PDF (27 mb)', id:3, disabled: false},
        ];
        
        
        vm.formData = {
            password: null,
            fileType: null
        };

        // vm.formData.fileType = vm.fileOptions[0]
        
        vm.formSubmit = formSubmit;
        vm.dropdownChange = dropdownChange;

        ////////////////

        function activate() {
        
        }

        function dropdownChange() {
            var id = document.getElementById('fileType');
            vm.formData.fileType = id.value
        }


        function formSubmit() {
        	vm.loading = true;

            googleService.checkPassword(vm.formData)
        		.then(function (data) {
        			vm.loading = false;
        			if (data.status === 200) {
                         console.dir(data);
                         window.location = data.data;
        			} else {
                        vm.error = true;
                    }
        		});
        }
    }
})();