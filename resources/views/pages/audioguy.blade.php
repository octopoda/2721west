@extends('layouts.work')

@section('content')
<article class="audioguy__wrapper" itemscope itemtype="http://schema.org/Website">
	      <section class="row">
          <div data-project-title data-title="Experience True Audio" data-roles="Design, Development, Strategy" data-client="The Audio Guy"></div>
        </section>
 
        
        <section class="row" data-project-image itemprop="workExample">
           <div  afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/audioguy/browser.jpg" class="afkl-lazy-wrapper project-image"></div>
        </section>
        

          <div class="assetbuilder__shot--article project-screen-shot row">
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Services Layout</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/audioguy/audioguy-services@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Brands Layout <small>Sort By Price and Type</small></h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/audioguy/audioguy-brands@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </div>

         
         <div class="audioguy__shots">
          {{-- Home --}}
          <section class=" project-screen-shot">
            <div>
              <h5>Package Slider Page based on Price of Packages</h5>
            </div>
            <div class="project-screen-shot__image" data-project-image itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/audioguy/audioguy-packages@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
            </div>
          </section>
        </div>
        
        


        <section class="project-credits row">
          <ul class="credits">
              <li itemprop="author"><strong>Strategy:</strong> Zack Davis</li>
              <li><strong>Design:</strong> Zack Davis</li>
              <li><strong>Development:</strong> Zack Davis</li>
              <li><strong>Copy:</strong> Jared Herzog</li>
          </ul>
        </section>


         <section class="project-thanks row">  
            <h5>Thanks for Reading</h5>
            <p>Do you like what you see?</p>
            <ul>
              <li><span data-underlined-link data-text="Learn More About Me" data-page="{{ route('about') }}" data-link-id="assetbuilderAbout"></span></li>
            </ul>

         </section>

          
        <div class="up-next flds" go-to-next data-link="{{ route('flds') }}" id="goToNext"> 
            <h6 id="removeTopButton">Next</h6>
            <div data-project-title data-title="Shaping Young Hearts" data-roles="Design, Development, Strategy" data-client="Faith Lutheran Day School" ng-cloak></div>
        </div> 

</article>
@endsection