(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .directive('malarkey', malarkey);

    /* @ngInject */
    function malarkey () {
        // Usage:
        // <span malarkey></span>
        var directive = {
            bindToController: true,
            controller: MalarkeyController,
            controllerAs: 'vd',
            link: link,
            restrict: 'A',
            scope: {
            	titles: "="
            }
        };
        return directive;

        function link(scope, element, attrs) {
        	scope.vd.el = element[0];
        }
    }

    MalarkeyController.$inject = ['$scope', '$element', '$attrs'];

    /* @ngInject */
    function MalarkeyController ($scope, $element, $attrs) {
    	var vd  = $scope.vd;

    	//Vars
    	vd.num = 1;
    	vd.started = false;
    	vd.el = $element[0];
    	var m_parent = document.getElementById('malarkeyParent');

    	console.dir($element);
    	

    	var typist = malarkey($element, {
            typeSpeed:40,
            deleteSpeed: 40,
            pauseDelay: 10000,
            loop: true,
            postfix: ''
        });

        console.dir(typist);



    	m_parent.addEventListener('click', function () {
    		type();
    	});
    	


    	/*
    	|--------------------------------------------------------------------------
    	| Methods
    	|--------------------------------------------------------------------------
    	|
    	*/
    
		/**
         * Type 
         * @return {CB} 
         */
        function type() {
            if (vd.started) {
              typeAgain();
              return;
            }
            
            vd.el.classList.add('on');
            
            typist.delete().type(vd.titles[vd.num]).call(function (e) {
                stopTyping();
                vd.started = true;
                document.querySelector('.malarkey').classList.add('clicked');
            });
        }

        /**
         * Stop the Typing
         * @return {[type]} [description]
         */
        function stopTyping() {
            vd.el.classList.remove('on');
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
            vd.el.classList.add('on');
            resumingTyping();
            vd.num++;

            if (vd.num > (vd.titles.length -1)) {
                vd.num = 0;
            }
            
            typist.delete().type(vd.titles[vd.num]).call(function () {
                stopTyping();
            });
        }

    }


})();