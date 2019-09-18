@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


       <div class="row">
        <section data-into class="home__main into">
            <h1>Ideas Are a Dime a Dozen.</h1>

            <p>Walk down any street in America and talk to the first 10 people you meet. Each of them will have a slew of new business ideas. We are drowning in ideas. So, why isn&rsquo;t everyone rich and the CEO of the greatest startup?</p>
            <p>One word&hellip;<em>Execution.</em></p>

            <p>Anyone can have an idea, but they don&rsquo;t know how to execute.</p>
            <p>I&rsquo;ve fostered a unique skillset of design, technology, and strategy in the past 12 years in resource-starved startups. I excel at building processes that help scale products and shape teams. I understand the importance setting a vision, team focus, and creating the product that the customer wants. </p>
            <p>You have a great idea. And I can bring it to fruition. </p>

            
            
            <ul class="home__more">
              <li style="list-style:none"><a href="{{ route('about') }}" id="homeLearn">About Me <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </section>
      </div>


   
</div> <!-- End Controller -->
@endsection