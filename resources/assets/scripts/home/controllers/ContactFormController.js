(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('ContactFormController', ContactFormController);

    ContactFormController.$inject = ['$rootScope', 'mailService', 'companyDataService', 'common'];

    /* @ngInject */
    function ContactFormController($rootScope, mailService, companyDataService, common) {
        var vm = this;
        vm.title = 'ContactFormController';
        vm.testing = false;

       /**
        * Select Options
        * @type {Array}
        */
       vm.formSelectOptions = [
            {
                id: 1,
                name: 'hire',
                value: 'Talk about Hiring me for a 9-5 gig'
            }, {
                id: 2,
                name: 'project',
                value: "I have a project for you"
            }, {
                id: 3,
                name: 'speaking',
                value: 'I would like you to come speak'
            }, {
                id: 4,
                name: 'beer',
                value: 'Buy me a beer'
            }];


       /**
        * Data for Mailer Object in Laravel
        * @type {Object}
        */
        vm.formData = {
        	name: null,
        	email: null, 
        	message: null,
            company: null,
            select: vm.formSelectOptions[3].name,
            budget: null,
            organization: null,
        };

        if (vm.testing) {
            vm.formData = {
                name: 'Bill Nye',
                email: 'zack2721@gmail.com', 
                message: 'Hey this is Bill Nye.  I think you\'re cool and should work on my site.  Call Me!',
                company: 'Myself',
                select: vm.formSelectOptions[2].name,
                budget: '$20,000',
                organization: 'Myself',
            };
        }



        vm.formSubmit = formSubmit;
        vm.loading = false;
        vm.success = false;
        vm.error = false;
        

        activate();


        ////////////////

        /**
         * Activate the Controller
         * @return 
         */
        function activate() {
            //Check for Cookies
            var data =  companyDataService.getData();

            if (data) {
                //Got the cookie.  Fill the form.
                fillForm(data);
            } else {
                //No Cookie then watch root
                $rootScope.$on('company.loaded', function (event, data) {
                    fillForm(data);
                });

                //I don't know just trying to be flexible
                $rootScope.$on('company.cleared', function (event) {
                    removeCompanyForm();
                });    
            }
        }

        
        /**
         * Form Submit
         * @return {[type]} [description]
         */
        function formSubmit() {
            vm.loading = true;
            
            mailService.sendMail(vm.formData)
                .then(function (data) {
                    vm.loading = false;
                    if (data.status === 200) {
                        vm.success = true;
                        clearForm();
                    } else {
                        vm.error = true;
                    }
                });
        }



/*
|--------------------------------------------------------------------------
| Company Information
|--------------------------------------------------------------------------
| 
|
*/
       
          /**
           * Fill the Form with the Company Data
           * @param  {object} data 
           * @return {view}      
           */
          function fillForm(data) {
            return;
            // vm.formData.name = companyDataService.fullName();
            // vm.formData.email = data.email;
            // vm.formData.company = data.company;
          }


          /**
           * Remove the form objects
           * @return {view} 
           */
          function removeCompanyForm() {
            vm.formData.name = null;
            vm.formData.email = null;
            vm.formData.company = null;
          }


          function clearForm() {
            return  vm.formData = {
                name: null,
                email: null, 
                message: null,
                company: null,
                select: vm.formSelectOptions[0].name,
                budget: null,
                organization: null,
            };
          }




    }
})();