@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


       <div class="row">
        <section data-into class="home__main into">
            <h1>I am a Jack of all <em>Digital</em> Trades</h1>
            
            
            <ul class="home__more">
              <li style="list-style:none"><a href="{{ route('about') }}" id="homeLearn">more about me <i class="fa fa-angle-right"></i></a></li>
              {{-- <li><a data-modal-toggle data-target="workModal" class="laptop-up">View My Work <i class="fa fa-angle-right"></i></a> </li> --}}
            </ul>
          </section>
      </div>


   
</div> <!-- End Controller -->
@endsection