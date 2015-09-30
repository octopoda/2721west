@extends('layouts.work')


@section('content')
		<article class="marks__wrapper" itemscope itemtype="http://schema.org/VisualArtwork">

		    <section>
          <div data-project-title data-title="Marks" data-roles="Design" data-client="" ng-cloak></div>
        </section>
 

        <div class="amp logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/amp@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/amp.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>

        <div class="angela logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/angela@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/angela.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>


        <div class="gagan logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/gagan@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/gagan.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>

        <div class="kellyn logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/kellyn@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/kellyn.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>

        <div class="robin logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/robin@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/robin.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>

        <div class="octopoda logo-container">
           <section class="row" itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/logos/octopoda@2x.jpg 620w, {{ $pageInfo['assetPath'] }}/images/logos/octopoda.jpg" class="afkl-lazy-wrapper"></div>
           </section>
        </div>

         <div class="up-next innovation" go-to-next data-link="{{ route('innovation') }}" id="goToNext"> 
            <h6 id="removeTopButton">Next</h6>
            <div data-project-title data-title="Caring Relentlessly" data-roles="Design, Architecture, Strategy" data-client="Innovation Compounding" ng-cloak></div>
        </div> 
    
    </article>    

@endsection