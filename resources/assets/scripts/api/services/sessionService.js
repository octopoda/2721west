(function() {
    'use strict';

    angular
        .module('twentyseven.api')
        .factory('sessionService', sessionService);

    sessionService.$inject = ['$http', 'common', 'errors'];

    /* @ngInject */
    function sessionService($http, common, errors) {
        var apiUrl = common.apiUrl + 'addSession';

        var sessionData =  {
        	'id': null,
        	'url': null, 
        	'browser': null
        }

        var service = {
        	recordSession : recordSession
        };
        
        return service;

        ////////////////

        /**
         * Setup the Session
         * @param  {int} id 
         * @return {object}    
         */
        function recordSession(id) {
        	sessionData = {
        		'company_id' : id,
        		'url': getPath(),
        		'browser' : getBrowser()
        	};

        	if (sessionData.url === '') {
        		sessionData.url =  '/'
        	}

        	sendSessionInfo(sessionData);
        }

        /**
         * Send the Session in the Backgroudh
         * @param  {object} data 
         * @return {}      
         */
        function sendSessionInfo(data) {
        	return $http.post(apiUrl, data)
        		.then(sessionComplete)
        		.catch(function (data, message) {
        			return false;
        		});

        		function sessionComplete(data, status, headers, config) {
        		  return true;	
        		}
        }

        /**
         * Get the Browser Name
         * @return {string} 
         */
        function getBrowser() {
    		var ua= navigator.userAgent, tem,
    		M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    		
    		if(/trident/i.test(M[1])){
        		tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
        		return 'IE '+(tem[1] || '');
    		}
    		
    		if(M[1]=== 'Chrome'){
		        tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
		        if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
		    }
		    M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
		    if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
		    
		    return M.join(' ');
        }

        /**
         * Get the path of the url
         * @return {string} 
         */
        function getPath() {
        	return location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
        }
    }
})();