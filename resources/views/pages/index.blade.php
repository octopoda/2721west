@extends('layouts.app')


@section('content')
    <div data-ng-controller="HomeController as vm" class="home__wrapper">
      
      @if (session()->has('guid'))
          <div data-ng-init="vm.fillCompanyInformation('{{ Session::get('guid') }}')"></div>
      @endif 


      <div class="row">
       	<section data-into class="home__main into">
            <h1>I am Zack Davis, a <br>
              <span class="malarkey--text home--malarkey">Senior Product Designer/Developer.</span><br>
              I am a problem solver. A doer.  Someone <wbr> that 
              can wear any hat necessary to complete the job.  
            </h1>
            
            
            <ul class="home__more">
              <li><a href="{{ route('about') }}" id="homeLearn">Learn More About Me <i class="fa fa-angle-right"></i></a></li>
              {{-- <li><a data-modal-toggle data-target="workModal" class="laptop-up">View My Work <i class="fa fa-angle-right"></i></a> </li> --}}
            </ul>
          </section>
      </div>


      <div class="home__work tablet-up project-table">
          <div data-into class="into project-table__title">
            <h3>Case Studies</h3>
          </div>

           {{-- FLDS --}}
          <div data-into class="into home__work--project" data-project-link data-link="{{ route('flds') }}">
            <h3>Shaping Young Hearts</h3>
            <ul class="home__work--desc row">
              <li>Faith Lutheran Day School</li>
              <li>Design, Development, Strategy</li>
            </ul>

            <div class="home__work--abstract row">
                <p> Working with my children’s day school, I designed and developed a large scale site to engage the parents and increase the awareness of the school to the local community. </p>
                <ul>
                  <li><span class="large">4164%</span><span class="small">increase in engagement</span></li>
                  <li><span class="large">6:47</span><span class="small">increased time on site</span></li>
                </ul>
            </div>

            <div class="home__work--view row">
              <a href="{{ route('flds') }}">View FLDS <i class="fa fa-angle-right"></i></a>
            </div>
        </div>


        <div data-into class="into home__work--project" data-project-link data-link="{{ route('assetbuilder') }}">
            <h3>Better Returns on Your Life</h3>
            <ul class="home__work--desc row">
              <li>AssetBuilder Inc</li>
              <li>Design, Development, Strategy</li>
            </ul>

            <div class="home__work--abstract row">
                <p>I led my development team and help direct The Richards group to build our new website from the ground up.  My responsibilities included creative direction, front-end development, lead generation strategy, and design.  </p>
                <ul>
                  <li><span class="large">8700%</span><span class="small">increased conversion rate</span></li>
                  <li><span class="large">14%</span><span class="small">increased engagment</span></li>
                  <li><span class="large">37%</span><span class="small">increased bounce rate</span></li>
                </ul>
            </div>

            <div class="home__work--view row">
              <a href="{{ route('assetbuilder') }}">View AssetBuilder <i class="fa fa-angle-right"></i></a>
            </div>
        </div>



         <div data-into class="into home__work--project" data-project-link data-link="{{ route('innovation') }}">
            <h3>Caring Relentlessly</h3>
            <ul class="home__work--desc row">
              <li>Innovation Compounding</li>
              <li>Design, Architecture, Strategy</li>
            </ul>

            <div class="home__work--abstract row">
                <p>I strategized with the stakeholders of Innovation Compounding to craft a new company brand and visual identity.   Once we solidified the foundation of the company, I architected and strategized a plan for an enterprise web application to help Innovation compete on a national scale. </p>
            </div>

            <div class="home__work--view row">
              <a href="{{ route('innovation') }}">View Innovation <i class="fa fa-angle-right"></i></a>
            </div>
        </div>

          


      </div>


      <div data-into class="phone-only">
        @include('layouts.front.projects', ['learnmore' => false])
      </div>


      

            



  </div> <!-- End Controller -->
@endsection