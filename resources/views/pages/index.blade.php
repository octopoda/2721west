@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


      <main>
       	<section data-into class="home__main into">
            
            <div class="home__main--hgroup row">
              <h1>Titles are <span class="cool"></span> worthless.</h1>
              <h4>Within a given week <span> I am a(n) </span> </h4>
            </div>

            
            <div data-role-select data-roles="vm.Roles" data-selected="vm.Selected" class="row"></div> 
            
            <div>
              <div data-project-listing data-projects="vm.Projects"></div>
            </div>
            
            
          </section>
      </main>


   
</div> <!-- End Controller -->
@endsection