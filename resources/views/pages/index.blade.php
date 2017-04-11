@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


       <div class="row">
        <section data-into class="home__main into">
            <h1>I am Zack Davis, an <br>
             <a href="{{ route('about') }}" ><span class="malarkey--text home--malarkey">UX Lead @ AssetBuilder Inc.</span></a>
             
            </h1>
            
            
            <ul class="home__more">
              <li><a href="{{ route('about') }}" id="homeLearn">Learn More About Me <i class="fa fa-angle-right"></i></a></li>
              {{-- <li><a data-modal-toggle data-target="workModal" class="laptop-up">View My Work <i class="fa fa-angle-right"></i></a> </li> --}}
            </ul>
          </section>
      </div>


   
</div> <!-- End Controller -->
@endsection