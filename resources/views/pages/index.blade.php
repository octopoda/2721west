@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


      <main class="row">
       	<section data-into class="home__main into">
            
            <div class="home__main--hgroup">
              <h1>Titles are <span class="cool"></span> worthless.</h1>
              <h4>Within a given week <span> I am a </span> </h4>
            </div>

            
            <div data-role-select data-roles="vm.Roles" data-selected="vm.Selected" class="row"></div> 
            
            <div class="row">
              <div data-project-listing data-projects="vm.Projects"></div>
            </div>
            
            
            <ul class="home__more">
              <li>
                I am ready for my next challenge and available for hire. <br>
                <a href="{{ route('about') }}" id="homeLearn"> Learn More About Me <i class="fa fa-angle-right"></i></a></li>
              {{-- <li><a data-modal-toggle data-target="workModal" class="laptop-up">View My Work <i class="fa fa-angle-right"></i></a> </li> --}}
            </ul>
          </section>
      </main>


   
</div> <!-- End Controller -->
@endsection