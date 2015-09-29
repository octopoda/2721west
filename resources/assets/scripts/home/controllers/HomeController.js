(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('HomeController', HomeController);

   HomeController.$inject = ['$timeout', 'mailService', 'companyService', 'companyDataService', 'common', 'sessionService'];

    /* @ngInject */
    function HomeController($timeout, mailService, companyService, companyDataService, common, sessionService) {
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
        
        vm.titles  = [
            'Designer and Full Stack Developer.',
            'Hybrid.',
            'Full Process Designer.',
            'Full Stack Designer.',
            'Unicorn.',
            'Devigner.',
            'Deseloper.',
            'Pink Squirrel.'
        ];

        

        var el = document.getElementById('malarkey')
        var typist = malarkey(el, {
            typeSpeed:40,
            deleteSpeed: 40,
            pauseDelay: 10000,
            loop: true,
            postfix: ''
        });

        //vars
        vm.num = 1;
        vm.started = false;
        vm.type = type;
        vm.fullName = null;

        
        vm.fillCompanyInformation = fillCompanyInformation;

        

        ////////////////


        /**
         * Controller Activeed
         */
        function activate() {
            
        }


/*
|--------------------------------------------------------------------------
| Malarky Methods
|--------------------------------------------------------------------------
|
| Methods for the Malarky Plugin
|
*/

        /**
         * Type 
         * @return {CB} 
         */
        function type() {
            if (vm.started) {
              typeAgain();
              return;
            }
            
            el.classList.add('on');
            typist.delete().type(vm.titles[vm.num]).call(function (e) {
                stopTyping();
                vm.started = true;
                document.querySelector('.malarkey').classList.add('clicked');
            });
        }

        /**
         * Stop the Typing
         * @return {[type]} [description]
         */
        function stopTyping() {
            el.classList.remove('on');
            typist.triggerPause();
        }

        /**
         * Resume the Typing
         */
        function resumingTyping() {
            if (typist.isRunning()) {
                return;
            } else {
                
                typist.triggerResume();
            }
        }

        
        /**
         * Type it again once the button is pressed
         * @return {[type]} [description]
         */
        function typeAgain() {
            el.classList.add('on');
            resumingTyping();
            vm.num++;

            if (vm.num > (vm.titles.length -1)) {
                vm.num = 0;
            }
            
            typist.delete().type(vm.titles[vm.num]).call(function () {
                stopTyping();
            });
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
                    companyDataService.addData(data);
                    common.sendHook(data.company + ' is visiting the site', 'Get excited because '  +  vm.fullName  + ' is checking out your shit');
                });
            } 

            vm.fullName = companyDataService.fullName();
            sessionService.recordSession(companyDataService.getCompanyId());

            return false;
            
        }



    }

})();