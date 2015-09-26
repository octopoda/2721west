(function() {
    'use strict';

    angular
        .module('twentyseven.ui')
        .directive('modalToggle', modalToggle);

    /* @ngInject */
    function modalToggle () {
        // Usage:
        // <div modal-toggle target="{@id of target}">
        var directive = {
            link: link,
            restrict: 'A',
            scope: {
            	target: "@"
            }
        };
        
        return directive;

        function link(scope, element, attrs) {
            
        	var tar = document.getElementById(scope.target);
            var html = document.getElementsByTagName('html')[0];

        	element.bind('click', function () {
        		tar.classList.toggle('open');
                html.classList.toggle('modal-open');
        	});


        }
    }


})();