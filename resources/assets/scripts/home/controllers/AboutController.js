(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('AboutController', AboutController);

    AboutController.$inject = ['companyDataService', 'sessionService', '$window'];

    /* @ngInject */
    function AboutController(companyDataService, sessionService, $window) {
        var vm = this;
        vm.title = 'AboutController';




        vm.titles  = [
            'smart',
            'hard',
            'efficiently',
            'with a team'
        ];

        

        var el = document.getElementById('malarkey')
        var typist = malarkey(el, {
            typeSpeed:100,
            // deleteSpeed: 40,
            loop: true,
            postfix: ''
        });

        //vars
        vm.num = 1;
        vm.started = false;
        vm.type = type;
        vm.fullName = null;


        activate();

        ////////////////
        
        function activate () {
            setSession();    
            el.parentElement.classList.add('active');
            
            typist
            .pause().delete().type('hard')
            .pause(1500).delete().type('tireles').pause(100).delete('tireles',400)
            .pause(200).type('efficiently')
            .pause(1500).delete().type('with a ').pause(1000).type('team', 600)
            .call(function (e) {
              typist.triggerPause;
              setTimeout(function () {
                el.parentElement.classList.remove('active');  
              }, 1000);
              
            });
        }

        /**
         * Set the Session with TimeMe.js
         */
        function setSession() {
            var data = companyDataService.getData();
            if (data != false) {
                sessionService.setupCompany(companyDataService.getCompanyId());
            }

            $window.onbeforeunload = function (event) {
                 sessionService.recordSession(TimeMe.getTimeOnCurrentPageInSeconds());
            }
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
    }
})();