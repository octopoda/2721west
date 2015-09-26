(function() {
    'use strict';

    angular
        .module('twentyseven.shared', [
            //Angular Components and Third Party
            'ngMessages', 'ngAnimate',  'ngCookies',  'angular-loading-bar',

            //My Globals
            'global.flash',  'global.errors', 
            
            //Extras
            'afkl.lazyImage'


        ]);
})();