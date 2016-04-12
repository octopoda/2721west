(function() {
    'use strict';

    angular
        .module('twentyseven.home')
        .controller('HomeController', HomeController);

   HomeController.$inject = ['$timeout', 'mailService', 'companyService', 'companyDataService', 'common', 'sessionService', '$window'];

    /* @ngInject */
    function HomeController($timeout, mailService, companyService, companyDataService, common, sessionService, $window) {
        var vm = this;
        vm.title = 'HomeController';

        
      /*
       |--------------------------------------------------------------------------
       | Form Variables
       |--------------------------------------------------------------------------
       |
       |
       */      

        vm.errors = false;
        
        vm.Titles  = [
          'Experience Designer',
          'Digital Strategist',
          'Front-End Developer',
          'Back-End Developer',
          'UX Architect',
          'Creative Director',
          'Small Business Marketing Director',
          'Brand Manager',
          'Content Strategist',
          'Visual Designer',
          'Unicorn'
        ];


        vm.Projects = [
          {
            name: 'Faith Lutheran Day School',
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
              'Small Business Marketing Director',
              'Visual Designer',
              'Brand Manager',
            ]
          },
          {
            name: "Innovation Compounding",
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'UX Architect',
              'Small Business Marketing Director',
              'Visual Designer',
              'Brand Manager'
            ]
          },
          {
            name: "AssetBuilder Inc",
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
              'Creative Director',
              'Brand Manager',
              'Content Strategist',
              'Visual Designer',
            ]
          },
          {
            name: 'Dallas Baptist University',
            titles: [
              'Experience Designer',
              'Front-End Developer',
              'Back-End Developer',
              'Visual Designer',
              'UX Architect',
            ]
          },
          {
            name: "AIGA Design Week",
            titles: [
              'Experience Designer',
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
              'Visual Designer'
            ]
          }, 
          {
            name: 'Wait Rate',
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'Visual Designer',
            ]
          },
          {
            name: 'McDaniel Nutrition',
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
              'Small Business Marketing Director',
              'Content Strategist',
              'Visual Designer',
            ]
          },
          {
            name: 'Suburan Parent',
            titles:  [
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
            ]
          },
          {
            name: 'Audio Guy',
            titles: [
              'Experience Designer',
              'Digital Strategist',
              'Front-End Developer',
              'Back-End Developer',
              'UX Architect',
              'Creative Director',
              'Small Business Marketing Director',
              'Content Strategist',
              'Visual Designer',
            ]
          }

        ];




        

        // var el = document.getElementById('malarkey')
        // var typist = malarkey(el, {
        //     typeSpeed:100,
        //     loop: true,
        //     postfix: ''
        // });

        //vars
        vm.num = 1;
        vm.type = type;
        vm.fullName = null;

        
        vm.fillCompanyInformation = fillCompanyInformation;

        

        ////////////////

        activate();

        /**
         * Controller Activeed
         */
        function activate(el) {
              setupSession();      

              // el.parentElement.classList.add('active');

              // typist
              //   .pause().delete().type('Digital Strategist')
              //   .pause(1500).delete().type('Web Application Architect')
              //   .pause(1500).delete().type('Full Sta').pause(100).delete('Sta',400)
              //   .pause(200).type('Process Designer')
              //   .pause(1500).delete('Process Designer', 200).type('Stack Developer')
              //   .pause(1500).delete().type('Unic').delete('nic', 300).pause(200)
              //   .type('nicorn').pause(400).type('.').call(function (e) {
              //     typist.triggerPause;
              //     setTimeout(function () {
              //       el.parentElement.classList.remove('active');  
              //     }, 1000);
                  
              //   });
        } 


        /**
         * Setup the Session Timer
         * @return {[type]} [description]
         */
        function setupSession() {
          $window.onbeforeunload = function (event) {
            sessionService.recordSession(TimeMe.getTimeOnCurrentPageInSeconds());
          }
        }


/*
|--------------------------------------------------------------------------
| Malarky Methods
|--------------------------------------------------------------------------
|
| Methods for the Malarky Plugin
|
*/

        /**
         * Type 
         * @return {CB} 
         */
        function type() {
            if (vm.started) {
              typeAgain();
              return;
            }
            
            el.classList.add('on');
            typist.delete().type(vm.titles[vm.num]).call(function (e) {
                vm.num++;
            });
        }

        /**
         * Stop the Typing
         * @return {[type]} [description]
         */
        function stopTyping() {
            el.classList.remove('on');
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
            el.classList.add('on');
            resumingTyping();
            vm.num++;

            if (vm.num > (vm.titles.length -1)) {
                vm.num = 0;
            }
            
            typist.delete().type(vm.titles[vm.num]).call(function () {
                stopTyping();
            });
        }
/*
|--------------------------------------------------------------------------
| Playing with the Company
|--------------------------------------------------------------------------
|
|
*/

      /**
         * Get the Company information is short URL
         * @param  {string} guid 
         * @return {object} 
         */
        function fillCompanyInformation(guid) {
            var data = companyDataService.getData();
            
            if (data == false) {
                companyService.getCompanyInformation(guid).then(function (data) {   
                    
                    if (data.first_name == undefined) return;
                    vm.fullName = data.first_name + ' ' + data.last_name;
                    
                    companyDataService.addData(data);
                    sessionService.setupCompany(companyDataService.getCompanyId());
                    common.sendHook(data.company + ' is visiting the site', 'Get excited because '  +  vm.fullName  + ' is checking out your shit');
                });
            } else {
                companyDataService.addData(data);
                sessionService.setupCompany(companyDataService.getCompanyId());
                vm.fullName = companyDataService.fullName();
            }

            
            return false;
            
        }



    }

})();