(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('mailService', mailService);

    mailService.$inject = ['$http', '$location',  'common', 'errors'];

    /* @ngInject */
    function mailService($http, $location, common, errors) {
        var apiUrl = common.apiUrl + 'mailme';

        var service = {
            sendMail: sendMail
        };
        
        return service;

        ////////////////

        function sendMail(data) {
            console.dir(data);
            return $http.post(apiUrl, data)
                .then(mailComplete)
                .catch(function () {
                    errors.catcher('Mail could not be sent at this time. ')(message);
                });

                function mailComplete(data, status, headers, config) {
                    return data;
                }
        }
    }
})();