(function() {
    'use strict';

    angular
        .module('twentyseven.shared')
        .factory('common', common);

    common.$inject = ['$location', '$q', '$rootScope', '$timeout', 'flash']; 

    /* @ngInject */
    function common($location, $q, $rootScope, $timeout, flash) {
        var dev = true;

        var service = {
            $broadcast: $broadcast,
            $q: $q,
            $timeout: $timeout,

            //Setup Helpers Here
            parseDate: parseDate,
            flash : flash,
            apiUrl: apiUrl(),
            isNumber: isNumber,
            addCommas: addCommas,
            removeCommas: removeCommas,
            toTitleCase : toTitleCase,
            sendHook: sendHook
        };
        
        return service;

        ////////////////

        /**
         * Wath the broadcast or bubbling for communication
         * @return {$broadcast} 
         */
        function $broadcast() {
        	return $rootScope.$broadcast.apply($rootScope, arguments);
        };


        /**
         * Set the API URL
         * @return {string} 
         */
        function apiUrl() {
        	return '/api/';
        };


        function sendHook(title, message) {
            hooks(title, message, 'VsAvc9a7Hb');
        }


        /**
         * Return Positive or Negative Number
         * @param  {int}  val 
         * @return {Boolean}     
         */
        function isNumber(value) {
            var reg = /^\s*(\-|\+)?(\d+|(\d*(\.\d*)))\s*$/;
            return reg.test(value);
        };


        /**
         * Parse the JSON Date format that .Net Returns
         * @param  {string} jsonDate 
         * @return {string}          
         */
        function parseDate(jsonDate) {
        	var d =  new Date(parseInt(jsonDate.replace(/\/Date\((\d+)\)\//gi, "$1"))); 
			return d.toUTCString();
        };

        /**
         * Add Commas to a number
         * @param {int} num 
         * @return {string}
         */
        function addCommas(num) {
            if (!num) return num;
            var parts = num.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        };

        /**
         * Remove Commas from a string
         * @param  {string} str
         * @return {int}        
         */
        function removeCommas(str) {
            if (!str) return str;
            var parts = str.toString().split(".");
            parts[0] = parts[0].replace(/,/g, '');
            return parseFloat(parts[0]);
        };

        /**
         * Turn String to Title Case
         * @param  {string} str 
         * @return {string}     
         */
        function toTitleCase(str) {
            return str.replace(/\w\S*/g, function(txt){
                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            });
        };


      


    }
})();