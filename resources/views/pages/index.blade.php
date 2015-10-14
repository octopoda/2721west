@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


      <div class="row">
       	<section data-into class="home__main into">
            <h5 data-ng-if="vm.fullName" class="ng-cloak">Hi {! vm.fullName !},</h5>
            <h1>I am Zack Davis, a <br>
              
              <span class="malarkey" ng-click="vm.type()">
                <span class="malarkey--text home--malarkey" id="malarkey">Creative Director.</span>
              </span><br>
              I am a problem solver. A doer.  Someone <wbr> that 
              can wear any hat necessary to complete the job.  
            </h1>
            
            
            <ul class="home__more">
              <li><a href="{{ route('about') }}" id="homeLearn">Learn More About Me <i class="fa fa-angle-right"></i></a></li>
              <li><a data-modal-toggle data-target="workModal" class="laptop-up">View My Work <i class="fa fa-angle-right"></i></a> </li>
            </ul>
          </section>
      </div>

      <div data-into class="into tablet-down">
        <section class="home__case-studies project-tablet">
          @include('layouts.front.projects', ['learnmore' =>  false])            
        </section>
      </div>


            



  </div> <!-- End Controller -->
@endsection