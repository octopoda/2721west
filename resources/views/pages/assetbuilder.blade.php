@extends('layouts.work')

@section('content')
<article class="assetbuilder__wrapper" itemscope itemtype="http://schema.org/Website">
	      <section class="row">
          <div data-project-title data-title="Better Returns on Your Life" data-roles="Design, Development, Strategy" data-client="AssetBuilder Inc."></div>
        </section>
 
        <div data-into class="row">
          <section class="project-copy" itemprop="description">
            <p>After eight years of business and almost no money spent on marketing, AssetBuilder realized it had reached the brink of it&rsquo;s viral coefficient.  We needed to reinvest money into marketing and lead generation, reinvent our brand, and reduce our reliance on Scott Burns. </p>
            <p>While most of these responsibilities would fall on my shoulders as the creative director, we felt it was best to get an outside opinion on our services.   We hired The Richards Group (TRG), one of the best agencies in America, to help us gain a new perspective and increase the awareness of our service product. </p>
          </section>
        </div>      
 
        <section class="row" data-project-image itemprop="workExample">
           <div  afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/browser.jpg" class="afkl-lazy-wrapper project-image"></div>
        </section>
        


        
        <div class="assetbuilder__wireframes">
            <div class="row">
              <section class="project-copy--left row" itemprop="description">
                <h3>Setting up the Structure.</h3>
                <p>TRG started out with a review of our current site and our competitors.  After an exhaustive study they made 106 recommendations to increase the lead generation of our site.   These recommendations ranged from removing the blocks off our old logo to predictive searching based on our readers previous history.</p>
                <p>I worked with their strategy team to narrow down the 106 recommendation into a more manageable list in which my small development team could complete in three months or less.   We pared-down the list to 60 recommendations and began working on the wire-frames and site design utilizing our new brand and our previous visual identity.</p>
              </section>
            
              <section class="row assetbuilder__wireframes__images" data-project-image itemprop="workExample">
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/wireframe1.jpg" class="afkl-lazy-wrapper project-image"></div>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/wireframe2.jpg" class="afkl-lazy-wrapper project-image"></div>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/wireframe3.jpg" class="afkl-lazy-wrapper project-image"></div>
              </section>
            </div>
        </div>



        <div class="assetbuilder__code row">
              <section class="project-copy" itemprop="description">
                <h3>Building from Scratch</h3>
                <p>While reviewing the wire-frames and initial design specification and planning for a future application, our development team decided the best course of action was to split the front-end from the back-end.  This would allow us the flexibility for upcoming applications to integrate easily, but also help us break up the site into more manageable modules. </p>
                <p>We dropped almost the entire code base we had used for the past six years and we rebuilt the site from the ground up using a RESTFUL back-end consumed by a Angular JS front-end. We wanted more control over our graphs and charts, so we revamped our entire charting system using a custom coded D3 implementation.</p>  
              </section>

              <section class="project-copy" itemprop="description"> 
                <h3>Changing Focus</h3>
                <p>My responsibilities changed dramatically during this project.  While I have always been in charge of the creative direction and front end development, the new specifications required me to learn Angular, D3, and promise/request patterns. </p>
                <p>While it was a large learning curve, our development team of two was able to rebuild the entire code base in less than three months.  While my main focus was on the front-end development, I also continued to design and build out the remaining templates that were not part of the scope for TRG and made sure the site was responsive. </p>
             </section>
        </div>



        <div class="assetbuilder__shots">
          {{-- Home --}}
          <section class="assetbuilder__shot--home project-screen-shot">
            <div class="project-screen-shot">
              <h5>Home Page</h5>
            </div>
            <div class="project-screen-shot__image" data-project-image itemprop="workExample">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/ab-homepage@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
            </div>
          </section>

          {{-- Who are we --}}
          <section class="assetbuilder__shot--who-are-we project-screen-shot">
            <div class="project-screen-shot">
              <h5>Who are we</h5>
            </div>
            <div class="project-screen-shot" data-project-image itemprop="workExample"> 
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/who-are-we@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
            </div>
          </section>
        </div>


        <div class="assetbuilder__shot--article project-screen-shot row">
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Portfolio Layout</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/ab-portfolios@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Article Layout</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/ab-article@2x.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </div>


        <div class="assetbuilder__ui">
            <div class="row">
              <section class="assetbuilder__ui--left project-copy" itemprop="description">
                <h3>Subtle Animations</h3>
                <p>One thing I wanted to focus on was giving the viewer a more pleasant stay at the AssetBuilder site by including subtle animation on each page.  Nothing to slow the user down or get in the way, but enough to grab their attention.</p>
              </section>
              <div class="assetbuilder__ui--right" data-project-image itemprop="workExample">
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/animations/ab-portfolios.gif" class="afkl-lazy-wrapper project-image portfolios">Our Portfolios</div>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/animations/ab-survey.gif" class="afkl-lazy-wrapper project-image survey">Survey Sliders</div>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/animations/ab-lazy.gif" class="afkl-lazy-wrapper project-image lazy">Article Search</div>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/animations/ab-article.gif" class="afkl-lazy-wrapper project-image article">Portfolio Menu</div>
              </div>
            </div>
        </div>



         <section class="assetbuilder__boomer">
          <div class="project-copy" itemprop="description">
              <h3>Built for Boomers</h3>
              <p>AssetBuilder&rsquo;s target market is the Baby Boomers.  More and more Boomers are leaving the comfort of large desktops and searching the Internet on their tablets.   After watching our tablet viewership grow 30% in one year, I wanted to make sure version 6.0 worked on tablets as well as a desktop.  </p>
              <p>Instead of working mobile first, I worked on all screens at once.  If an idea didn't work on any screen we went back to the drawing board and started over. I also made an emphasis on building features to help our older clients with reading and understanding the site. </p>
              <p>Some of the newer features built for Boomers included larger type sizes across the site, easy AJAX based searching,  a type increase/decrease button,  easier online sign up,  reducing the amount of clicks for finding your portfolio, and increasing white space for easier scanning of the site.</p>
          </div>
        </section>


        <div class="assetbuilder__ipad">
            <div class="assetbuilder__ipad--ipad">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/open-ipad@2x.png 480w, {{ $pageInfo['assetPath'] }}/images/assetbuilder/open-ipad@2x.png 768w, {{ $pageInfo['assetPath'] }}/images/assetbuilder/open-ipad@2x.png" class="afkl-lazy-wrapper "></div>
            </div>


            <div class="assetbuilder__ipad--carousel owl-carousel" data-assetbuilder-carousel itemprop="workExample">
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/iPad1@2x.png" class="afkl-lazy-wrapper item"></div> 
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/iPad2@2x.png" class="afkl-lazy-wrapper item"></div>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/iPad3@2x.png" class="afkl-lazy-wrapper item"></div>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/iPad4@2x.png" class="afkl-lazy-wrapper item"></div>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/assetbuilder/iPad5@2x.png" class="afkl-lazy-wrapper item"></div>
            </div>
        </div>





         <section class="project-credits row">  
            <h5>Thanks for Reading</h5>
            <ul class="credits">
              <li itemprop="author"><strong>Strategy:</strong> The Richards Group, Zack Davis</li>
              <li><strong>Design:</strong> Luis Acevedo, Zack Davis</li>
              <li><strong>Front-end:</strong> Zack Davis</li>
              <li><strong>Back-end:</strong> Mark Johnson</li>
            </ul>
         </section>

          
        <div class="up-next flds" go-to-next data-link="{{ route('flds') }}" id="goToNext"> 
            <h6>Next</h6>
            <div data-project-title data-title="Shaping Young Hearts" data-roles="Design, Development, Strategy" data-client="Faith Lutheran Day School" ng-cloak></div>
        </div> 

</article>
@endsection