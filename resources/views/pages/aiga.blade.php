@extends('layouts.work')

@section('content')
  <article class="aiga__wrapper" itemscope itemtype="http://schema.org/Website">
	      <section class="row">
          <div data-project-title data-title="Scheduling the Week" data-roles="Design, Development" data-client="AIGA DFW Design Week 2014" ng-cloak></div>
        </section>
 
        <div class="row">
          <section class="showcase-image" data-project-image itemprop="workExample">
             <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/aiga/aiga_1@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </section>
        </div>

        <div class="row">
          <section class="showcase-image" data-project-image itemprop="workExample">
             <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/aiga/aiga_2@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </section>
        </div>

        <div class="row">
          <section class="showcase-image" data-project-image itemprop="workExample">
             <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/aiga/aiga_3@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </section>
        </div>

        <div class="row">
          <section class="showcase-image" data-project-image itemprop="workExample">
             <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/aiga/aiga_4@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </section>
        </div>
       
         <section class="project-credits row">  
            <ul class="credits">
              <li><strong>Design:</strong> Zack Davis, Frances Yllana</li>
              <li itemprop="author"><strong>Development:</strong> Zack Davis</li>
            </ul>
         </section>


        <div class="up-next dbu" go-to-next data-link="{{ route('dbu') }}" id="goToNext"> 
            <h6 id="removeTopButton">Next</h6>
            <div data-project-title data-title="Getting Down to Business" data-roles="Design, Development" data-client="Dallas Baptist University" ng-cloak></div>
        </div> 

  </article>

@endsection