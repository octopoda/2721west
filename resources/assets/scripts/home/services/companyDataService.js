(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .service('companyDataService', companyDataService);

   	companyDataService.$inject = ['$rootScope', '$q', '$cookies'];

    /* @ngInject */
    function companyDataService($rootScope, $q, $cookies) {
    	var now = new Date();

    	var company = {
    		dataObject : null
		};

		this.addData = addData;
		this.removeData = removeData;
		this.getData = getCompanyCookie;
		this.fullName = fullName;

        ////////////////

        /**
         * Add the Data
         * @param {[type]} data [description]
         */
        function addData(data) {
        	company.dataObject = data;
        	storeCompanyCookie();

        	$rootScope.$emit('company.loaded', company.dataObject);
        	return company.dataObject;
        }

        /** Remove the Data */
        function removeData( ) {
        	company.dataObject = null;
        	
        	$rootScope.$emit('company.cleared',  company.dataObject);
        	return company.dataObject;
        }


        /**
         * Store the Data in the Cookie
         * @return {[type]} [description]
         */
        function storeCompanyCookie()  {
           var exp = new Date(now.getFullYear(), now.getMonth(), now.getDate()+2);
           var json = JSON.stringify(company.dataObject);
           
           return $cookies.put('companyData', json, {
             path: '/',
             expires: exp
           });
        }


        /**
         * Get the Data from a Cookie
         * @return {[type]} [description]
         */
        function getCompanyCookie() {
        	   company.dataObject = parseJSON($cookies.get('companyData'));
               return company.DataObject;
        }


        function parseJSON(data) {
            if (data !== undefined) {
                return JSON.parse(data);
            } else {
                return false;
            }
        }


        /**
         * Print the Full Name
         * @return {[type]} [description]
         */
        function fullName() {

        	return company.dataObject.first_name + ' ' +  company.dataObject.last_name;
        }
    }
})();