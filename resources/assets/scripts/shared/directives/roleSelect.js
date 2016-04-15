(function() {
    'use strict';

    angular
        .module('twentyseven.shared')
        .directive('roleSelect', roleSelect);

    /* @ngInject */
    function roleSelect () {
        // Usage:
        //
        // Creates:
        //
        var directive = {
            bindToController: true,
            controller: RoleSelectController,
            controllerAs: 'vd',
            templateUrl: '/templates/ui/role-select.html',
            link: link,
            restrict: 'A',
            scope: {
                roles: "=",
                selected: '='
            }
        };
        return directive;

        function link(scope, element, attrs) {
        }
    }

    RoleSelectController.$inject = ['$scope', '$element', '$attrs', '$rootScope'];

    /* @ngInject */
    function RoleSelectController ($scope, $element, $attrs, $rootScope) {
        var vd = $scope.vd;

        vd.changeSelect = changeSelect;
        vd.toggleDrop = toggleDrop;

        activate() 

        

        ////////////
        
        function activate() {
                        
        }

        function toggleDrop() {
            if (jq('#roleSelectDropdown').hasClass('active')) {
                dropUp();
            } else {
                dropdown();
            }
        }

        function dropdown() {
            jq('#roleSelectDropdown').slideDown(200).addClass('active');
        }

        function dropUp() {
            jq('#roleSelectDropdown').slideUp(200).removeClass('active');
        }


        function changeSelect(role_id, title) {
            vd.selected = title;
            dropUp();
            $rootScope.$emit('role_changed', role_id);
        }
    }
})();