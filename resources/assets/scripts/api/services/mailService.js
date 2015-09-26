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
            return $http.post(apiUrl, data)
                .then(mailComplete)
                .catch(function (data, message) {
                    errors.catcher('Mail could not be sent at this time. ')(message);
                    return data;
                });

                function mailComplete(data, status, headers, config) {
                    // console.dir(data);
                    return data;
                }
        }
    }
})();