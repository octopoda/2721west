/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(1);
	__webpack_require__(2);
	__webpack_require__(3);
	__webpack_require__(4);
	__webpack_require__(5);
	__webpack_require__(6);
	__webpack_require__(7);
	__webpack_require__(8);
	__webpack_require__(9);
	__webpack_require__(10);
	__webpack_require__(11);
	__webpack_require__(12);
	__webpack_require__(13);
	__webpack_require__(14);
	__webpack_require__(15);
	__webpack_require__(16);
	__webpack_require__(17);
	__webpack_require__(18);
	__webpack_require__(19);
	__webpack_require__(20);
	__webpack_require__(21);
	__webpack_require__(22);
	__webpack_require__(23);
	__webpack_require__(24);
	__webpack_require__(25);
	__webpack_require__(26);
	module.exports = __webpack_require__(27);


/***/ },
/* 1 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Game Module
	|--------------------------------------------------------------------------
	|
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.game', []);
	})();

/***/ },
/* 2 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Global Module
	|--------------------------------------------------------------------------
	|
	| Angular Module to Load Globals
	|
	*/

	'use strict';

	(function () {
				'use strict';

				angular.module('global', []);
	})();

/***/ },
/* 3 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Module for Intro Page
	|--------------------------------------------------------------------------
	|
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.intro', []);
	})();

/***/ },
/* 4 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Module for the Result Screen
	|--------------------------------------------------------------------------
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.results', []);
	})();

/***/ },
/* 5 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Shared Module
	|--------------------------------------------------------------------------
	|
	| Add All angular, global and third party modules.  This way we can keep 
	| all the extras here and not trash out the main application module will 
	| will only call application specific modules.
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.shared', [
	    //Angular
	    'ui.router', 'ngCookies',

	    //Home Grown
	    'global.errors', 'global.flash', 'global.model',

	    //Third Party
	    'toastr']);
	})();

/***/ },
/* 6 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| API Module
	|--------------------------------------------------------------------------
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.api', []);
	})();

/***/ },
/* 7 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| All Global Models
	|--------------------------------------------------------------------------
	|
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.model', []);
	})();

/***/ },
/* 8 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Errors Module
	|--------------------------------------------------------------------------
	|
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.errors', []);
	})();

/***/ },
/* 9 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Flash Module
	|--------------------------------------------------------------------------
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.flash', []);
	})();

/***/ },
/* 10 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Application Modeuls
	|--------------------------------------------------------------------------
	|
	| Call only application specific/user created modules here
	| All global/angular/third-party modules are called in 
	| app/scripts/shared/shared.module.js
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree', ['willowtree.shared', 'willowtree.api', 'willowtree.intro', 'willowtree.game', 'willowtree.results']);
	})();

/***/ },
/* 11 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Startup Route
	|--------------------------------------------------------------------------
	|
	| Send the to the introduction page. Yo!
	| 
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    appRun.$inject = ["routerHelper"];
	    angular.module('willowtree').run(appRun);

	    /* @ngInject */
	    function appRun(routerHelper) {
	        routerHelper.configureStates(getStates(), '/');
	    }

	    function getStates() {
	        return [{
	            state: 'intro',
	            config: {
	                url: '/',
	                templateUrl: './templates/Intro/index.html',
	                controller: 'IntroController',
	                controllerAs: 'vm',
	                title: "Wanna Play a Game?"
	            }
	        }];
	    }
	})();

/***/ },
/* 12 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Game Route
	|--------------------------------------------------------------------------
	|
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    appRun.$inject = ["routerHelper"];
	    angular.module('willowtree').run(appRun);

	    /* @ngInject */
	    function appRun(routerHelper) {
	        routerHelper.configureStates(getStates(), '/');
	    }

	    function getStates() {
	        return [{
	            state: 'game',
	            config: {
	                url: '/game',
	                templateUrl: './templates/Game/index.html',
	                controller: 'NameGameController',
	                controllerAs: 'vm',
	                title: "Do you know who they are?"
	            }
	        }];
	    }
	})();

/***/ },
/* 13 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Results Route
	|--------------------------------------------------------------------------
	|
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    appRun.$inject = ["routerHelper"];
	    angular.module('willowtree').run(appRun);

	    /* @ngInject */
	    function appRun(routerHelper) {
	        routerHelper.configureStates(getStates(), '/');
	    }

	    function getStates() {
	        return [{
	            state: 'results',
	            config: {
	                url: '/results',
	                templateUrl: './templates/Results/index.html',
	                controller: 'ResultsController',
	                controllerAs: 'vm',
	                title: "How did you do?"
	            }
	        }];
	    }
	})();

/***/ },
/* 14 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Application Configuation
	|--------------------------------------------------------------------------
	|
	| Description 1
	|  Description 2
	| 
	|
	*/
	'use strict';

	(function () {
		'use strict';

		var shared = angular.module('willowtree.shared');

		var config = {
			appErrorPrefix: '[WillowTree NameGame Website Error]',
			appTitle: 'namegame.willowtree.com',
			version: '0.1.0'
		};

		shared.value('config', config);
		share.config(configure);

		configure.$inject = ['$logProvider', 'exceptionHandlerProvider', '$httpProvider', 'toastr'];

		/** @ngInject */
		function configure($logProvider, exceptionHandlerProvider, $httpProvider, toastr) {
			//Turn debugging off/on (no info or warn);
			if ($logProvider.debugEnabled) {
				$logProvider.debugEnabled(true);
			}

			//Configure the common exception handler
			exceptionHandlerProvider.configure(config.appErrorPrefix);

			$httpProvider.defaults.headers.post['Content-Type'] = config.header;
			$httpProvider.defaults.transformRequest = [function (data) {
				return angular.isObject(data) && String(data) !== '[object File]' ? param(data) : data;
			}];

			//Toastr Config
			toastr.options.timeOut = 4000;
			toastr.options.positionClass = 'toast-bottom-right';
		}
	});

/***/ },
/* 15 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Router Helper Provider
	|--------------------------------------------------------------------------
	|
	| Provider to Help Route each module
	|
	*/

	'use strict';

	angular.module('willowtree.shared').provider('routerHelper', routerHelperProvider);

	routerHelperProvider.$inject = ['$locationProvider', '$stateProvider', '$urlRouterProvider'];

	/* @ngInject */
	function routerHelperProvider($locationProvider, $stateProvider, $urlRouterProvider) {
	    /* jshint validthis:true */
	    this.$get = RouterHelper;

	    var config = {
	        docTitle: undefined,
	        resolveAlways: {}
	    };

	    $locationProvider.html5Mode({
	        enabled: true,
	        requireBase: false
	    });

	    this.configure = function (cfg) {
	        angular.extend(config, cfg);
	    };

	    RouterHelper.$inject = ['$location', '$rootScope', '$state'];

	    /* @ngInject */
	    function RouterHelper($location, $rootScope, $state) {
	        var handlingStateChangeError = false;
	        var hasOtherwise = false;

	        var stateCounts = {
	            errors: 0,
	            changes: 0
	        };

	        var service = {
	            configureStates: configureStates,
	            getStates: getStates,
	            stateCounts: stateCounts
	        };

	        init();

	        return service;

	        ///////////////

	        /**
	         * Initalize the Helpers
	         * @return mixed
	         */
	        function init() {
	            handleRoutingErrors();
	            updateDocTitle();
	        }

	        /**
	         * Configure the states
	         * @param  {array} states        
	         * @param  {string} otherwisePath 
	         * @return {$stateProvider}               
	         */
	        function configureStates(states, otherwisePath) {
	            states.forEach(function (state) {
	                state.config.resolve = angular.extend(state.config.resolve || {}, config.resolveAlways);
	                $stateProvider.state(state.state, state.config);
	            });

	            if (otherwisePath && !hasOtherwise) {
	                hasOtherwise = true;
	                $urlRouterProvider.otherwise(otherwisePath);
	            }
	        }

	        /**
	         * Handle Routing Errors
	         * @return {$location.path} 
	         */
	        function handleRoutingErrors() {
	            $rootScope.$on('$stateChangeError', function (event, toState, toParams, fromState, fromParams, error) {
	                if (handlingStateChangeError) return;

	                stateCount.errors++;
	                handlingStateChangeError = true;
	                var destination = toState && (toState.title || toState.name || toState.loadedTemplateUrl) || 'unknown target';
	                var msg = 'Error routing to ' + destination + '. ' + (error.data || '') + '. <br>' + (error.statusText || '') + ': ' + (error.status || '');
	                console.log(msg, error);
	                $location.path('/');
	            });
	        }

	        /**
	         * Get the State
	         * @return {$stateProvider.state}  
	         */
	        function getStates() {
	            return $state.get();
	        }

	        /**
	         * Update the Document Title
	         * @return {string} 
	         */
	        function updateDocTitle() {
	            $rootScope.$on('$stateChangeSuccess', function (event, toState, toParams, fromState, fromParams) {
	                stateCounts.changes++;
	                handlingStateChangeError = false;
	                var title = config.docTitle + ' ' + (toState.title || '');
	                $rootScope.title = title;
	            });
	        }
	    }
	}

/***/ },
/* 16 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Nane Gane Controller
	|--------------------------------------------------------------------------
	|
	| Controls the main aspect of the game
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.game').controller('NameGameController', NameGameController);

	    NameGameController.$inject = ['$rootScope', '$state', '$timeout', 'willowTreeService', 'peopleModel', 'cookieService'];

	    /* @ngInject */
	    function NameGameController($rootScope, $state, $timeout, willowTreeService, peopleModel, cookieService) {
	        var vm = this;
	        vm.title = 'NameGameController';
	        vm.People = {};
	        vm.GameCards = {};
	        vm.Winner = {};
	        vm.score = 0;
	        vm.TotalScore = 0;
	        vm.GameInfo = {};

	        vm.lastWinnersName = '';
	        vm.WinnerName = '';

	        vm.Rounds = 1;
	        vm.Interval;

	        activate();

	        ////////////////

	        /**
	         * Activate the Controller
	         */
	        function activate() {
	            getPeople().then(function () {
	                setupPeopleObject();
	                getGameInformation();

	                vm.Rounds = vm.GameInfo.round;
	                vm.TotalScore = vm.GameInfo.score;

	                getNextRound();
	            });
	        }

	        /*
	        |--------------------------------------------------------------------------
	        | Game/Scope Methods
	        |--------------------------------------------------------------------------
	        |
	        |
	        */

	        /**
	         * Get the Next Round of Game Cards
	         * @return {object} 
	         */
	        function getNextRound() {
	            vm.GameCards = peopleModel.getRandomFromNumber(vm.People, vm.GameInfo.modeNumber);
	            selectOne();

	            vm.Rounds++;

	            if (document.getElementById('modal')) {
	                removeScore();
	            }

	            return vm.GameCards;
	        }

	        function checkRound() {
	            if (vm.Rounds >= 6) {
	                vm.Rounds = 0;
	                goToResults();
	            }

	            getNextRound();
	        }

	        /**
	         * Select the Winner and Add to the GameCards
	         * @return {object} 
	         */
	        function selectOne() {
	            vm.Winner = peopleModel.getRandomObject(vm.GameCards);

	            while (vm.Winner.name === vm.lastWinnersName) {
	                vm.Winner = peopleModel.getRandomObject(vm.GameCards);
	            }

	            for (var i = 0; i < vm.GameCards.length; i++) {
	                if (vm.GameCards[i].name == vm.Winner.name) {
	                    vm.GameCards[i].winner = true;
	                } else {
	                    vm.GameCards[i].winner = false;
	                }
	            }

	            return vm.Winner;
	        }

	        //Look for Winner Pieces Selected
	        $rootScope.$on('game.winner', function handleSingleWinEvent(event) {
	            getScore(); //Get the Score
	            showScore(); //Show it Off
	            sendGameToCookie();

	            $timeout(function () {
	                checkRound();
	                removeClasses('not-winner');
	                removeClasses('winner');
	            }, 3000);
	        });

	        /*
	        |--------------------------------------------------------------------------
	        | Animation Methods
	        |--------------------------------------------------------------------------
	        |
	        |
	        */

	        /**
	         * Show the Score and add some lightning!
	         * @return {[type]} [description]
	         */
	        function showScore() {
	            document.body.classList.toggle('lightning');
	            document.getElementById('scoreWrapper').classList.add('active');
	            document.getElementById('modal').classList.add('active');
	        }

	        /**
	         * Remove the Score Modal
	         * @return {[type]} [description]
	         */
	        function removeScore() {
	            document.body.classList.remove('lightning');
	            document.querySelector('.score-wrapper').classList.remove('active');
	            document.querySelector('.modal-overlay').classList.remove('active');
	        }

	        /**
	         * Remove the Classnames from the Object
	         * @param  {string} classname 
	         * @return null 
	         */
	        function removeClasses(classname) {
	            var objects = document.querySelectorAll('.' + classname);

	            for (var i = 0; i < objects.length; i++) {
	                objects[i].classList.remove(classname);
	            }
	        }

	        /*
	        |--------------------------------------------------------------------------
	        | State Methods
	        |--------------------------------------------------------------------------
	        |
	        |
	        */

	        /**
	         * Go to the Results Page
	         * @return {[type]} [description]
	         */
	        function goToResults() {
	            //Add Score to Cookie
	            return $state.transitionTo('results');
	        }

	        /*
	        |--------------------------------------------------------------------------
	        | Data Methods
	        |--------------------------------------------------------------------------
	        |
	        | Get People Objects 
	        |
	        */

	        /**
	         * Get the People from the Data Service
	         * @return {array} 
	         */
	        function getPeople() {
	            return willowTreeService.getWillowTreePeople().then(function (data) {
	                vm.People = data;
	                return vm.People;
	            });
	        }

	        /**
	         * Get the Cookie with the Game Information
	         * @return {[type]} [description]
	         */
	        function getGameInformation() {
	            var cookieInfo = cookieService.getCookie();
	            vm.GameInfo = cookieInfo.currentGame;
	            return vm.GameInfo;
	        }

	        /**
	         * Setup the People Object (Clean it up. Those names are dirty)
	         * @return {a clean array} 
	         */
	        function setupPeopleObject() {
	            vm.People = peopleModel.cleanItUp(vm.People);
	        }

	        /**
	         * Select Random Number From Game Pieces. 
	         * @return {object} 
	         */
	        function getRandomGamePeice() {
	            var random = peopleModel.getRandomObject(vm.People);
	        }

	        /**
	         * Get the total score by subtracting the gamecard length minus the amount of not winner classes in document.
	         * @return {[type]} [description]
	         */
	        function getScore() {
	            var notWinner = document.querySelectorAll('.not-winner');
	            vm.Score = vm.GameCards.length - document.querySelectorAll('.not-winner').length;
	            addTotal(vm.Score);
	            return vm.Score;
	        }

	        /**
	         * Add Up Total Score;
	         * @param {[type]} score [description]
	         */
	        function addTotal(score) {
	            vm.TotalScore += score;
	            return vm.TotalScore;
	        }

	        /**
	         * Save the Current Game to the cookie so user can resume game at any time.
	         * @return {object}
	         */
	        function sendGameToCookie() {
	            var cook = cookieService.getCookie();

	            var data = {
	                games: cook.games,
	                currentGame: {
	                    score: vm.TotalScore,
	                    round: vm.Rounds + 1,
	                    modeNumber: vm.GameInfo.modeNumber,
	                    modeTitle: vm.GameInfo.modeTitle,
	                    mode: vm.GameInfo.mode
	                }
	            };

	            cookieService.storeCookie(data);
	        }
	    }
	})();

/***/ },
/* 17 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Game Car Directive
	|--------------------------------------------------------------------------
	|
	| Used to Build the Game Card for the User
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.game').directive('gameCard', gameCard);

	    /* @ngInject */
	    function gameCard() {
	        // Usage:
	        // <div game-card cards="{object}" winner="{object}"></div>
	        var directive = {
	            bindToController: true,
	            controller: GameCardController,
	            controllerAs: 'vm',
	            restrict: 'EA',
	            replace: true,
	            templateUrl: './templates/Game/GameCard.html',
	            scope: {
	                gameCards: "=",
	                winner: "="
	            }
	        };

	        return directive;

	        function link(scope, element, attrs) {}
	    }

	    GameCardController.$inject = ['$rootScope', '$timeout', '$scope', '$element'];

	    /* @ngInject */
	    function GameCardController($rootScope, $timeout, $scope, $element) {
	        var vm = this;
	        vm.title = "GameCardController";
	        vm.checkmark = "✓";

	        vm.checkForWin = checkFoWin;

	        /////////////////////

	        /**
	            * Check for the win FTW
	            * @param  {int} id 
	            * @return {DOM}    
	            */
	        function checkFoWin($event, id) {
	            var target = $event.currentTarget;
	            var text = target.querySelector('.overlay-text');

	            if (id == vm.winner.id) {
	                target.classList.add('winner');
	                text.innerHTML = vm.checkmark;
	                $rootScope.$emit('game.winner');
	            } else {
	                //Don't call them a loser.  That's just mean.
	                target.classList.add('not-winner');
	                text.innerHTML = "x";
	            }
	        }
	    }
	})();

/***/ },
/* 18 */
/***/ function(module, exports) {

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.game').factory('peopleModel', peopleModel);

	    /* @ngInject */
	    function peopleModel() {
	        var service = {
	            getRandomFromNumber: getRandomFromNumber,
	            cleanItUp: cleanItUp,
	            getRandomObject: getRandomObject
	        };

	        return service;

	        ////////////////

	        /**
	         * Get a Random Number of People from the Data
	         * @param {array} data 
	         * @param {int} number
	         * @return {array}      
	         */
	        function getRandomFromNumber(data, number) {
	            var peopleSort = data.sort(function () {
	                return 0.5 - Math.random();
	            });

	            return peopleSort.slice(0, number);
	        }

	        /**
	         * Get the Winner
	         * @param  {array} data 
	         * @return {object}      [description]
	         */
	        function getRandomObject(data) {
	            return data[Math.floor(Math.random() * (data.length - 1))];
	        }

	        /**
	         * Remove those unsightly numbers from people's names and add an Id so people can't cheat
	         * @return {string} 
	         */
	        function cleanItUp(object) {
	            for (var i = 0; i < object.length; i++) {
	                object[i].name = object[i].name.replace(/[0-9]/g, '');
	                object[i].id = i;
	            }

	            return object;
	        }
	    }
	})();

/***/ },
/* 19 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Mode Model
	|--------------------------------------------------------------------------
	|
	| Return the details of the mode object From and Id
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.model').factory('modeModel', modeModel);

	    /* @ngInject */
	    function modeModel() {
	        var service = {
	            getModeModel: getModeModel
	        };

	        return service;

	        ////////////////

	        /**
	         * Get the Mode 
	         * @param  {int} mode 
	         * @return {object}      
	         */
	        function getModeModel(mode) {
	            var modeObject = {};

	            switch (mode) {
	                case 1:
	                    modeObject = {
	                        id: 1,
	                        name: 'new-guy',
	                        number: '4'
	                    };
	                    break;
	                case 2:
	                    modeObject = {
	                        id: 2,
	                        name: 'training',
	                        number: '8'
	                    };
	                    break;
	                case 3:
	                    modeObject = {
	                        id: 3,
	                        name: 'pro',
	                        number: '12'
	                    };
	                    break;
	                case 4:
	                    modeObject = {
	                        id: 4,
	                        name: 'God',
	                        number: '24'
	                    };
	                    break;
	            }

	            return modeObject;
	        }
	    }
	})();

/***/ },
/* 20 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Error Flash Thrower
	|--------------------------------------------------------------------------
	|
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    errors.$inject = ["flash"];
	    angular.module('global.errors').factory('errors', errors);

	    /* @ngInject */
	    function errors(flash) {
	        var service = {
	            catcher: catcher
	        };

	        return service;

	        ////////////////

	        function catcher(message) {
	            return function (reason) {
	                flash.error(message, reason);
	            };
	        }
	    }
	})();

/***/ },
/* 21 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Error Exception Handler
	|--------------------------------------------------------------------------
	|
	| Handle the Errors and passed them to the provider for console. 
	| 
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.errors').provider('errorHandler', exceptionHandlerProvider).config(config);

	    /**
	     * Must Configure the exception handling
	     */
	    function exceptionHandlerProvider() {
	        /* jshint validthis:true */
	        this.config = {
	            appErrorPrefix: undefined
	        };

	        this.configure = function (appErrorPrefix) {
	            this.config.appErrorPrefix = appErrorPrefix;
	        };

	        this.$get = function () {
	            return { config: this.config };
	        };
	    }

	    config.$inject = ['$provide'];
	    extendExceptionHandler.$inject = ['$delegate', 'errorHandler'];

	    /**
	     * Configure by setting an optional string value for appErrorPrefix
	     * @param  {object} $provide 
	     * @ngInject
	     */
	    function config($provide) {
	        $provide.decorator('$exceptionHandler', extendExceptionHandler);
	    }

	    /**
	     * Extend the $exceptionHandler servie to also display our Flash
	     * @param  {Object} $delegate        
	     * @param  {Object} flash            
	     * @return {function} the decorated $exceptionHandler service
	     * @ngInject
	     */
	    function extendExceptionHandler($delegate, errorHandler) {
	        return function (exception, cause) {
	            var appErrorPrefix = errorHandler.config.appErrorPrefix || '';
	            var errorData = { exception: exception, cause: cause };
	            // exception.message = appErrorPrefix + exception.message;
	            // $delegate(exception, cause);
	        };
	    }
	})();

/***/ },
/* 22 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Factory to show Toatr Flash and log in console.
	|--------------------------------------------------------------------------
	|
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('global.flash').factory('flash', flash);

	    flash.$inject = ['$log', '$rootScope', 'toastr'];

	    /* @ngInject */
	    function flash($log, $rootScope, toastr) {

	        var service = {
	            error: error,
	            info: info,
	            success: success,
	            warning: warning,

	            //Skip Modal and go to console
	            log: $log.log
	        };
	        return service;

	        ////////////////

	        function error(message, data, title) {
	            toastr.error(message, title);
	            $log.error('Error: ' + message, data);
	            $rootScope.$emit('flash.error', message);
	        }

	        function info(message, data, title) {
	            toastr.info(message, title);
	            $log.info('Info: ' + message, data);
	            $rootScope.$emit('flash.info', message);
	        }

	        function success(message, data, title) {
	            toastr.success(message, title);
	            $log.info('Success: ' + message, data);
	            $rootScope.$emit('flash.success', message);
	        }

	        function warning(message, data, title) {
	            toastr.warn(message, title);
	            $log.warn('Warning: ' + message, data);
	            $rootScope.$emit('flash.warning', message);
	        }
	    }
	})();

/***/ },
/* 23 */
/***/ function(module, exports) {

	
	/*
	|--------------------------------------------------------------------------
	| Controller for Intro Page
	|--------------------------------------------------------------------------
	|
	| Handle all of the Controls for the Intro Page
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.intro').controller('IntroController', IntroController);

	    IntroController.$inject = ['$rootScope', '$state', '$window', 'cookieService', 'modeModel'];

	    /* @ngInject */
	    function IntroController($rootScope, $state, $window, cookieService, modeModel) {
	        var vm = this;
	        vm.title = 'IntroController';
	        vm.Data = {};
	        vm.resume = false;
	        vm.noCookie = false;

	        //dev mode?
	        vm.dev = false;

	        /** Scope Vars */
	        vm.setGameMode = setGameMode;
	        vm.goToGame = goToGame;
	        vm.newGame = newGame;
	        vm.deleteCookie = deleteCookie;

	        activate();

	        ////////////////

	        /*
	        |--------------------------------------------------------------------------
	        | Controller Methods
	        |--------------------------------------------------------------------------
	        |
	        | Methods for the Controller to Activate
	        | 
	        |
	        */

	        function activate() {
	            //Check if user has cookie?
	            if (!cookieService.checkForCookie()) {
	                vm.noCookie = true;
	                vm.Data = {};
	            } else {
	                vm.Data = cookieService.getCookie();
	            }

	            console.dir(vm.Data);

	            inGame();
	            return vm.Data;
	        }

	        /**
	         * Are the in the middle of a game
	         * @return {boolean} 
	         */
	        function inGame() {
	            if (!vm.noCookie) {
	                vm.resume = vm.Data.currentGame !== null ? true : false;
	            }
	        }

	        /*
	        |--------------------------------------------------------------------------
	        | Scope Methods
	        |--------------------------------------------------------------------------
	        |
	        | Methods for interaction with the Scope
	        |
	        */

	        /**
	         * Set the Game Mode
	         * @param {int} gameMode
	         */
	        function setGameMode(gameMode) {
	            var modeTitle = modeModel.getModeModel(gameMode);

	            vm.Data.currentGame = {
	                score: 0,
	                round: 0,
	                mode: modeTitle.id,
	                modeTitle: modeTitle.name,
	                modeNumber: modeTitle.number
	            };

	            cookieService.storeCookie(vm.Data);

	            goToGame();
	        }

	        /**
	         * Go to the Game State in the Router
	         * @return 
	         */
	        function goToGame() {
	            $state.transitionTo('game');
	        }

	        /**
	         * Start a new Game
	         * @return {boolean} 
	         */
	        function newGame() {
	            vm.resume = false;
	            return vm.resume;
	        }

	        /**
	         * Dele the cookie In Dev Mode.
	         * @return location/reload
	         */
	        function deleteCookie() {
	            cookieService.deleteCookie();
	            location.reload();
	        }
	    }
	})();

/***/ },
/* 24 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Results Controller
	|--------------------------------------------------------------------------
	|
	| Control the view for the results page
	| 
	|
	*/

	'use strict';

	(function () {
	    'use strict';

	    ResultsController.$inject = ["$state", "cookieService"];
	    angular.module('willowtree.results').controller('ResultsController', ResultsController);

	    /* @ngInject */
	    function ResultsController($state, cookieService) {
	        var vm = this;
	        vm.title = 'ResultsController';
	        vm.Previous;
	        vm.Current;

	        vm.playAgain = playAgain;

	        activate();

	        ////////////////

	        /**
	         * Activate the Controller (Get the Cookie and display results)
	         * @return 
	         */
	        function activate() {
	            var cookie = cookieService.getCookie();
	            vm.Current = cookie.currentGame;
	            vm.Previous = cookie.games;
	        }

	        /**
	         * End the Current Game in the Cookie
	         * @return 
	         */
	        function endGame() {
	            cookieService.endCurrentGame();
	        }

	        /**
	         * Play the Game Again
	         * @return {$state} 
	         */
	        function playAgain() {
	            endGame();
	            return $state.transitionTo('intro');
	        }
	    }
	})();

/***/ },
/* 25 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Title Directive
	|--------------------------------------------------------------------------
	|
	| Give a name to the tiel based on state change success
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.shared').directive('fillTitle', fillTitle);

	    fillTitle.$inject = ['$rootScope', '$timeout'];

	    /* @ngInject */
	    function fillTitle($rootScope, $timeout) {
	        // Usage:
	        // <title updateTitle></title>
	        var directive = {
	            link: link,
	            restrict: 'A'
	        };

	        return directive;

	        function link(scope, element, attrs) {

	            /**
	             * Listen To State Change
	             * @param  {event} event   
	             * @param  {$stateChange} toState 
	             * @return {string} 
	             */
	            function listener(event, toState) {
	                var title = "Willow Tree Name Game"; //Default Name
	                if (toState.title) title = toState.title + ' ' + title;

	                $timeout(function () {
	                    element.text(title);
	                }, 0, false);
	            };

	            /**
	             * Root Scopr
	             */
	            $rootScope.$on('$stateChangeSuccess', listener);
	        }
	    }
	})();

/***/ },
/* 26 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Cookie Service for Namegame
	|--------------------------------------------------------------------------
	|
	| Keep some things here to help the gameplay a little

	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.api').factory('cookieService', cookieService);

	    cookieService.$inject = ['$cookies', 'errors'];

	    /* @ngInject */
	    function cookieService($cookies, errors) {
	        var now = new Date();

	        var service = {
	            checkForCookie: checkForCookie,
	            getCookie: getCookie,
	            storeCookie: storeCookie,
	            deleteCookie: deleteCookie,
	            endCurrentGame: endCurrentGame
	        };

	        //Cookie Structure
	        /*
	        var cookie = {
	        	games: [
	        		{
	        			score: 25,
	                    mode: 'training'
	        		},
	        		{
	        			score: 10,
	                    mode: 'pro'
	        		},
	        		{
	        			score: 12,
	                    mode: 'pro'
	        		}
	        	],
	        	currentGame: {
	                score: 12,
	                round:3,
	                mode: 1,
	                modeTitle: 'pro',
	                modeNumber: '12'
	            }
	        };
	        */

	        return service;

	        ////////////////

	        /**
	         * Check for the Cookie
	         * @return {boolean} 
	         */
	        function checkForCookie() {
	            return $cookies.get('gameData') != undefined || $cookies.get('gameData') != null ? true : false;
	        }

	        /**
	         * Get the Cookie
	         * @return {object} 
	         */
	        function getCookie() {
	            // return cookie;
	            var data = $cookies.get('gameData');
	            if (data == null) return;
	            return JSON.parse(data);
	        }

	        /**
	         * Store the Cookie
	         * @return 
	         */
	        function storeCookie(data) {
	            // return;
	            var exp = new Date(now.getFullYear(), now.getMonth() + 3, now.getDate());
	            var json = JSON.stringify(data);

	            return $cookies.put('gameData', json, {
	                path: '/',
	                expires: exp
	            });
	        }

	        /**
	         * Delete the Cookie From Store
	         * @return {} 
	         */
	        function deleteCookie() {
	            // return;
	            var exp = new Date(now.getFullYear(), now.getMonth(), now.getDate() - 1);

	            var data = {
	                games: null,
	                currentGame: null
	            };

	            var json = JSON.stringify(data);

	            return $cookies.put('gameData', json, {
	                path: '/',
	                expires: exp
	            });
	        }

	        /**
	         * End the Current Game and Place it in storage
	         * @return {null} 
	         */
	        function endCurrentGame() {
	            var data = getCookie();
	            var games = [];

	            if (data.games !== undefined) {
	                games = data.games;
	            }

	            var newData = {
	                games: games,
	                currentGame: null
	            };

	            newData.games.push(data.currentGame);
	            storeCookie(newData);
	        }

	        /**
	         * Is there a current Game Going
	         * @return {Boolean} 
	         */
	        function isCurrentGame() {
	            var data = $cookies.get('gameData');
	            if (data.currentGame !== null) {
	                return true;
	            }
	            return false;
	        }
	    }
	})();

/***/ },
/* 27 */
/***/ function(module, exports) {

	/*
	|--------------------------------------------------------------------------
	| Service for connecting to the API provided by WillowTree
	|--------------------------------------------------------------------------
	|
	*/
	'use strict';

	(function () {
	    'use strict';

	    angular.module('willowtree.api').factory('willowTreeService', willowTreeService);

	    willowTreeService.$inject = ['$http', 'errors'];

	    /* @ngInject */
	    function willowTreeService($http) {
	        var apiUrl = "http://namegame.willowtreemobile.com:2000";

	        var service = {
	            getWillowTreePeople: getWillowTreePeople
	        };

	        return service;

	        ////////////////

	        /**
	         * Connect to the API provided by Willow Tree and retrieve the people
	         * @return {object} 
	         */
	        function getWillowTreePeople() {
	            return $http.get(apiUrl).then(peopleComplete)['catch'](function (message) {
	                errors.catcher('cannot connect to API')(message);
	            });

	            function peopleComplete(data, status, headers, config) {
	                return data.data;
	            }
	        }
	    }
	})();

/***/ }
/******/ ]);
angular.module("willowtree").run(["$templateCache", function($templateCache) {$templateCache.put("./templates/Game/GameCard.html","<ul class=\"game-card__list image-list\"><li data-ng-repeat=\"cards in vm.gameCards\" data-ng-click=\"vm.checkForWin($event, cards.id)\" id=\"gameCard{{ cards.id }}\" class=\"repeat-animation game-card\" ng-cloak=\"\"><div class=\"game-card__person\"><div class=\"game-card__image\"><div class=\"overlay\"><span class=\"overlay-text\">X</span></div><img data-ng-src=\"{{ cards.url }}\" data-ng-alt=\"{{ cards.name }}\"></div></div></li></ul>");
$templateCache.put("./templates/Game/index.html","<nav class=\"game__navigation\"><div class=\"game__navigation__rounds\"><h3><span>The Name Game :</span> Round {{ vm.Rounds }} of 6</h3></div><div class=\"game__navigation__score\"><h3>Your Score: {{ vm.TotalScore }}</h3></div></nav><div class=\"game__wrapper\"><h1>{{ vm.Winner.name }}</h1><game-card data-game-cards=\"vm.GameCards\" data-winner=\"vm.Winner\"></game-card></div><div class=\"modal-overlay\" id=\"modal\"></div><div class=\"score-wrapper\" id=\"scoreWrapper\"><div class=\"score-wrapper__score\"><h3>Your Score</h3><h1>{{ vm.Score }}</h1><div><a href=\"#\" data-ng-click=\"vm.getNextRound()\">Next Round</a></div></div></div>");
$templateCache.put("./templates/Intro/index.html","<section class=\"intro\" id=\"intro\"><h1 class=\"intro__title\"><small>The</small><br>Name<br>Game</h1><div class=\"intro__game-modes game-list\" data-ng-hide=\"vm.resume\"><h2>Game Mode</h2><ul class=\"game-list__list\"><li class=\"button selected\"><a href=\"\" data-ng-click=\"vm.setGameMode(1)\">The New Guy</a></li><li class=\"button\"><a href=\"\" data-ng-click=\"vm.setGameMode(2)\">Training</a></li><li class=\"button\"><a href=\"\" data-ng-click=\"vm.setGameMode(3)\">Seasoned Pro</a></li><li class=\"button\"><a href=\"\" data-ng-click=\"vm.setGameMode(4)\">God Mode</a></li><li data-ng-if=\"vm.dev\"><a href=\"\" data-ng-click=\"vm.deleteCookie()\">Delete Cookie</a></li></ul></div><div class=\"intro__game-started game-list\" data-ng-show=\"vm.resume\"><h2>Would you like to resume your previous game?</h2><ul class=\"game-list__list\"><li class=\"button\"><a href=\"\" data-ng-click=\"vm.goToGame()\">Resume Game</a></li><li class=\"button\"><a href=\"\" data-ng-click=\"vm.newGame()\">Start a New Game</a></li><li data-ng-if=\"vm.dev\"><a href=\"\" data-ng-click=\"vm.deleteCookie()\">Delete Cookie</a></li></ul></div></section>");
$templateCache.put("./templates/Results/index.html","<nav class=\"game__navigation\"><div class=\"game__navigation__rounds\"><h3>The Name Game</h3></div></nav><section class=\"results__wrapper\"><div class=\"title results__box\"><h2>Your Score</h2><div class=\"results-list\"><ul><li class=\"results-list__result large\"><div class=\"results-list__result__score\"><span>Score:</span> {{ vm.Current.score }}</div><div class=\"results-list__result__mode\"><span>Mode:</span> {{ vm.Current.modeTitle }}</div></li></ul></div></div><div ng-if=\"vm.Previous\" class=\"high-score results__box\"><h2>Total High Scores</h2><div class=\"results-list\"><ul><li data-ng-repeat=\"game in vm.Previous\" class=\"repeat-animation results-list__result\"><div class=\"results-list__result__score\"><span>Score:</span> {{ game.score }}</div><div class=\"results-list__result__mode\"><span>Mode:</span> {{ game.modeTitle }}</div></li></ul></div></div><div class=\"results__buttons\"><a href=\"#\" data-ng-click=\"vm.playAgain()\">Play Again</a></div></section>");}]);