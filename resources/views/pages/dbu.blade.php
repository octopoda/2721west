@extends('layouts.work')

@section('content')
<article class="dbu__wrapper" itemscope itemtype="http://schema.org/Website">
	<section>
          <div data-project-title data-title="Getting Down to Business" data-roles="Design, Development" data-client="Dallas Baptist University" ng-cloak></div>
        </section>
 

        <section class="project-image dbu__video row">
          <h5 class="dbu-title">Home Page and Inside Page Interactions</h5>
           <video autobuffer autoloop loop muted preload="auto" autoplay id="project-video" poster="{{ $pageInfo['assetPath'] }}/images/dbu/dbu-poster.png">
                <source src="{{ $pageInfo['assetPath'] }}/videos/dbu/dbu.webm">
                <source src="{{ $pageInfo['assetPath'] }}/videos/dbu/dbu.oga">
                <source src="{{ $pageInfo['assetPath'] }}/videos/dbu/dbu.m4v">
                <object type="video/ogg" data="{{ $pageInfo['assetPath'] }}/videos/dbu/dbu.oga" width="320" height="240">
                  <param name="src" value="{{ $pageInfo['assetPath'] }}/videos/dbu/dbu.oga">
                  <param name="autoplay" value="false">
                  <param name="autoStart" value="0">
                </object>
            </video>
        </section>


       <section class="project-screen-shot">
          <div class="project-screen-shot">
            <h5>Graphical Information Layout</h5>
          </div>
          <div class="project-screen-shot__image" data-project-image itemprop="workExample">
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/dbu/dbu-inside@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </section>


        <section class="project-screen-shot">
          <div class="project-screen-shot">
            <h5>Faculty Layout</h5>
          </div>
          <div class="project-screen-shot__image" data-project-image itemprop="workExample">
           <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/dbu/faculty@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </section>

      <div class="project-screen-shot row">
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Non-Graphical Information Template</h5>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/dbu/dbu-info@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Concentration Layout</h5>
             <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/dbu/dbu-courses@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
      </div>
   
      


         <section class="project-credits row">  
            <ul class="credits">
              <li><strong>Design:</strong> Zack Davis, Frances Yllana</li>
              <li itemprop="author"><strong>Development:</strong> Zack Davis</li>
            </ul>
         </section>


        <div class="up-next marks" go-to-next data-link="{{ route('marks') }}" id="goToNext"> 
            <h6>Next</h6>
            <div data-project-title data-title="Marks" data-roles="Design" data-client=" " ng-cloak></div>
        </div> 


@endsection