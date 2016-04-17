@extends('layouts.work')

@section('content')
<article class="mcdaniel__wrapper" itemscope itemtype="http://schema.org/Website">
	      <section class="row">
          <div data-project-title data-title="Sustain Your Health" data-roles="Design, Development, Strategy" data-client="McDaniel Nutrition"></div>
        </section>
 
        
        <section class="row" data-project-image itemprop="workExample">
           <div  afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/browser.jpg" class="afkl-lazy-wrapper project-image"></div>
        </section>
        

           <div class="mcdaniel__shots">
          {{-- Home --}}
          <section class=" project-screen-shot">
            <div>
              <h5>Home Page</h5>
            </div>
            <div class="project-screen-shot__image" data-project-image itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/home@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
            </div>
          </section>
        </div>

          <div class="assetbuilder__shot--article project-screen-shot row">
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Weight Loss Layout</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/weightloss@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Maternal Nutrition</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/maternal@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </div>


         <div class="assetbuilder__shot--article project-screen-shot row">
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Blog Layout</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/blog.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Search</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/search.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </div>


          <div class="mcdaniel__shots">
          {{-- Home --}}
          <section class=" project-screen-shot">
            <div>
              <h5>Blog Post</h5>
            </div>
            <div class="project-screen-shot__image" data-project-image itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/mcdaniel/blog-post.jpg" class="afkl-lazy-wrapper project-image"></div>
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
            <p>Do you like what you see? </p>
            <ul>
              <li><span data-underlined-link data-text="Learn More About Me" data-page="{{ route('about') }}" data-link-id="assetbuilderAbout"></span></li>
            </ul>

         </section>

     
        <div class="up-next assetbuilder" go-to-next data-link="{{ route('assetbuilder') }}" id="goToNext"> 
            <h6 id="removeTopButton">Next</h6>
            <div data-project-title data-title="Better Returns on Your Life" data-roles="Design, Development, Strategy" data-client="AssetBuilder Inc." ng-cloak></div>
        </div> 

</article>
@endsection