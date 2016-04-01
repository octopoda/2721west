(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('GoogleController', GoogleController);

    GoogleController.$inject = ['googleService'];

    /* @ngInject */
    function GoogleController(googleService) {
        var vm = this;
        vm.title = 'GoogleController';
        vm.loading = false;
        vm.success = false;
        vm.error = false;

        activate();

      
        vm.fileOptions =  [
            {name:'Keynote', disabled: false},
            {name:'Power Point', disabled: false},
            {name:'PDF', disabled: false},
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
        			   window.location = data.data;
        			} else {
                        vm.error = true;
                    }
        		});
        }
    }
})();