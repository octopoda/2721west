(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('FourOFourController', FourOFourController);

    /* @ngInject */
    function FourOFourController() {
        var vm = this;
        vm.title = 'FourOFourController';

        activate();

        vm.titles  = [
	        'Shit!',
	        'Fuck!',
	        'Damn it!',
	        'Mother Fucker!',
	        'Asshat!',
	        'Crap!',
	        'Damn it all to mother fucking hell!'
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


        ////////////////

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
    }
})();