@extends('layouts.work')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
<article class="flds__wrapper" itemscope itemtype="http://schema.org/Website">
	      
      {{-- Title --}}
      <section>
        <div data-project-title data-title="Shaping Young Hearts" data-roles="Design, Development, Strategy" data-client="Faith Lutheran Day School" ng-cloak></div>
      </section>
      
      
      {{-- Intro --}}
      <div data-into class="row flds__intro into">
          <section data-into class="project-copy" itemprop="description">
             <p>At first glance, this was a simple five page WordPress site that I was requested to redesign. </p>
             <p>After my first meeting with the staff and hearing their stories of waning registration and engagement, I realized this was a much bigger project and that this wonderful non-profit school needed help.</p>
          </section>
      </div>
      
      <section class="row" data-project-image itemprop="workExample">
         <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-browser.jpg" class="afkl-lazy-wrapper project-image"></div>
      </section>

      {{-- Discovery --}}
      <div class="flds__discovery">
        <div class="row">
          <section class="project-copy" itemprop="description">
            <h3>Discovery</h3>
            <p>For the discovery I wanted to get at the root of the issue. I interviewed teachers, staff members, parents, and anyone in the demographic I could get to talk to me.</p>
            <blockquote>&ldquo;The staff is so loving and caring for each child.  You make us feel like part of the family. &rdquo;</blockquote>
            <p>It was evident that the school's branding of <em>Shaping Young Hearts</em> was being broadcast.  Parents made great comments like, The staff is so loving and caring for each child.  You make us feel like part of the family.</p>
            <p>The problem of engagement was actually one of communication.  The parents and teachers didn't have a central place to communicate.  It was always a before school/after school discussion between one parent and one teacher.  The staff was trying to communicate through emails but didn't have knowledge of their open rate.  The only source of important information for parents was through printed handouts in the children&rsquo;s take home folders. </p>
            <p>My objective quickly became clear to me. I needed to:</p>
            
          </section>
        </div>

        <div class="row">
            <ul class="flds__discovery--cards" itemprop="description">
              <li>
                  <span class="number">A</span>
                  <span class="objective">Build a visual identity and stronger foundation for the existing brand.</span>
              </li>
              <li>
                  <span class="number">B</span>
                  <span class="objective">Increase engagement with current parents and the staff members</span>
              </li>
              <li>
                  <span class="number">C</span>
                  <span class="objective">Increase awareness of the school with the community.</span>
              </li>
            </ul>
        </div>
        </div> 
 
      {{-- Brand --}} 
      <div class="flds__brand">
        <div class="row">
          <section class="project-copy" itemprop="description">
            <h3>In Focus</h3>
            <p>During the discovery process, I learned that the school had recently gone through a small branding process.  While I agreed with the results of that process, I wanted to build upon it. </p>
            <p>I wanted to use the parents&rsquo;s comments about the loving and compassionate environment they feel at Faith Lutheran Day School and mix it with the <em>Shaping Young Hearts</em> brand that was produced during the previous process. </p>
            <p>Working with my copywriter we built a statement on which the foundation of the brand could stand. </p>
          </section>
        </div>

        <div class="flds__brand--statement" itemprop="description">
           <blockquote>
              Every child is intrinsically unique. They are energetic, curious and interact with the world in their own distinct way. Every day they experience new opportunities and challenges, and creating an environment filled with love and compassion will ensure steady development, learning and growth in flourishing young minds.
            </blockquote>
        </div>
     </div>

      
      {{-- Type --}}
      <div class="flds__type">
        <div class="row">
          <section class="flds__type--text" itemprop="description">
            <h4>Typography</h4>
            <p>I wanted to keep the childlike feeling of the school throughout the visual design. With a small budget and no room for purchased fonts, I turned to Google.  In my search for handwritten fonts I came across a particular family that was still readable but had a look as if a child had written it.  The name then solidified it for me: <em>Loved by a King</em>. </p>
            <p>I needed to pair that font with a san-serif typeface that would be great for paragraphs but still have a childlike quality.   I chose a thick rounded san-serif called Nunito.</p>
         </section>

         <section class="flds__type--images">
            <div class="flds__type--images--wrapper">
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-type-king.jpg" class="afkl-lazy-wrapper"></div>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-type-nunito.jpg" class="afkl-lazy-wrapper"></div>
            </div>
         </section>
        </div>
      </div>



      <div class="flds__photography">
        <div class="row">
          <section class="project-copy" itemprop="description">
            <h3>Photography & Icons</h3>
            <p>With a pro-bono budget, we were very lucky that a student&rsquo;s grandparent, and my partner at the time were accomplished photographers. To keep the <em>in focus</em> concept we decreased the depth of field so that only the children in the foreground are in focus and the background blurred.</p>
            <p>Because the children were the most important part I made sure to incorporate all custom photography and include large images of the kids on all of the collateral.  I increased the tint on the existing color scheme to add more excitement and made large overlays of the images for ease of reading.</p>
            <p>The school&rsquo;s identity mark was created during the previous branding campaign and included four icons symbolizing the school: heart, cross, music note, and abc&rsquo;s. I expanded upon the previous icons and created a set of icons for each program the school offered.</p>
            <p>Using the same styling, I built out the remaining programs and designed rules of use for each icon, designating the heart icon to represent the entire school.</p>
          </section>
        </div>
        <div class="flds__photography--parallax" itemprop="workExample">
          {{-- left --}}
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-cross.jpg" class="icon-1 mid" data-parallax data-direction="down">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-girl-2.jpg" class="icon-2 front shadow" data-parallax data-direction="up">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-e.jpg" class="icon-3 back" data-parallax data-direction="up">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-boy-2.jpg" class="icon-7 front shadow" data-parallax data-direction="down">
          
          {{-- right --}}
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-boy-1.jpg" class="icon-4 back shadow" data-parallax data-direction="up">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-math.jpg" class="icon-5 mid" data-parallax data-direction="down">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-girl-1.jpg" class="icon-6 front shadow" data-parallax data-direction="up">
          <img src="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons-girl-3.jpg" class="icon-8 front shadow" data-parallax data-direction="down">
        </div>

        <div class="row tablet-down" itemprop="workExample">
          <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-icons@phone.jpg 620w, {{ $pageInfo['assetPath'] }}/images/flds/flds-icons@tablet.jpg " class="afkl-lazy-wrapper"></div>
        </div>
      </div>




      {{-- Wireframes --}}
      <div class="flds__wireframes">
        <div class="row">
          <section class="flds__wireframes--text" itemprop="description">
            <h3>Updating the Site</h3>
            <p>During the discovery process, I found that the main issue of communication was the plethora of communication tools each teacher was using.   A parent may have a two children in two different classes and communicate with each teacher with completely different tools.  I needed to build a consistent communication pathway for all the staff members and make it easy for parents and teachers to use. </p>
            <p>Observing my wife and her friends, I realized most parents are in their cars all day transporting kids from one place to another.   When they get a second to themselves they aren&rsquo;t opening up their laptop to surf the Internet, they&rsquo;re picking up their phones. So I designed and constructed each layout and component with all screens in mind, and if a feature didn&rsquo;t work on a mobile screen then it wasn&rsquo;t included in the site.</p>
            <p>I wire-framed an online application allowing teachers to update parents, using a few clicks, about the latest events, activities, and volunteer opportunities at the school.</p>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-wireframes@phone.jpg" class="afkl-lazy-wrapper phone-only"></div>
          </section>
        </div>
      
      </div>


      {{-- Bulletin Board --}}
      <div class="flds__bulletin">
          <div class="row" data-project-image itemprop="workExample">
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/bulletin-board.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>

           <div class="row">
              <section class="project-copy" itemprop="description">
                 <h3>The Bulletin Board</h3>    
                 <p>Taking into consideration the parents&rsquo; needs to be updated easily and with many different devices, and the staff&rsquo;s needs to highlight upcoming events, posts about classroom activities, and volunteer opportunities, I set off to build an application to handle it all. </p>
                 <p>Using my custom small business CMS, Black Ink, and Google calendar, I incorporated the calendar, updates, and classroom/teacher information for each class. </p>
                 <p>With children&rsquo;s safety in mind, a parent who is registered for the site is redirected to their own dashboard about their children and their classrooms, along with an update thread for the school and special programs.</p>
                 <p>The teacher updates the parents on what their child is doing in the classroom along with the next five days of events.  It gives classroom information such as room parent and teacher contact information, important forms to download, and general information about the aides in the classroom.  Parents have the ability to download, sync, or print full month calendars for their child&rsquo;s classroom.</p>
                 <p>To increase volunteering at the school,  a parent can volunteer for any need with the click of one button.  They are registered for the need and then an email is sent to them with more information about the event.</p>
              </section>   
          </div>

          <div data-dashboard class="flds__bulletin--dashboard row out" itemprop="workExample"> 
              <img src="{{ $pageInfo['assetPath'] }}/images/flds/dashboard-1.png" alt="Faith Lutheran Day School Dashboard Images" class="flds__dashboard--1">
              <img src="{{ $pageInfo['assetPath'] }}/images/flds/dashboard-2.png" alt="Faith Lutheran Day School Dashboard Images" class="flds__dashboard--2">
              <img src="{{ $pageInfo['assetPath'] }}/images/flds/dashboard-3.png" alt="Faith Lutheran Day School Dashboard Images" class="flds__dashboard--3">
              <img src="{{ $pageInfo['assetPath'] }}/images/flds/dashboard-4.png" alt="Faith Lutheran Day School Dashboard Images" class="flds__dashboard--4">
          </div>
      </div>

      {{-- Video --}}
      <div class="flds__video">
        <div data-project-video class="flds__video--wrapper" itemprop="workExample">
          <video autobuffer autoloop loop muted preload="auto" autoplay id="project-video" class="project-video" poster="{{ $pageInfo['assetPath'] }}/images/flds/flds-video@tablet.jpg">
              <source src="{{ $pageInfo['assetPath'] }}/videos/flds/jenny.webm">
              <source src="{{ $pageInfo['assetPath'] }}/videos/flds/jenny.oga">
              <source src="{{ $pageInfo['assetPath'] }}/videos/flds/jenny.m4v">
              <object type="video/ogg" data="{{ $pageInfo['assetPath'] }}/videos/flds/jenny.oga" width="320" height="240">
                <param name="src" value="{{ $pageInfo['assetPath'] }}/videos/flds/jenny.oga">
                <param name="autoplay" value="false">
                <param name="autoStart" value="0">
              </object>
          </video>
          <div class="flds__video--gradient"></div>
        </div>

        <div class="row">
          <section class="flds__video--text" itemprop="description">
            <h3>Talking to Prospective Parents</h3>
            <p>After designing the bulletin board, I needed to make sure prospective parents had a vision of the school and the teachers.  Using the same design principle and the new visual identity system I rebuilt the five pages from the previous site. </p>
            <p>I highlighted the school&rsquo;s branding and programs by giving greater descriptions and images of each one.  I rebuilt the FAQ’s into a simple system that was searchable and changed the fees from a table to an easy drop down module in which the parent could get fees and tuition quickly.  </p>
            <p>I wanted prospective parents to have the ability to see their potential teacher&rsquo;s personality.    We interviewed each teacher videoing their questions and answer and saw their personalities emerge.  I cut each video to 20 seconds or less and place them in the background of the faculty page without audio.</p>
            <p>The bulletin board was opened to the public to further educate them on the school and classroom activities.  Individualized parent content; however remained secure. </p>
          </section>
        </div>

    </div>
          
        
   {{-- Desktop screen shots --}}
    <div class="flds__desktop">
      <div class="flds__shot project-screen-shot row">
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Home Page</h5>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-home.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Registration Page </h5>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-registration.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
      </div>


      <div class="flds__shot project-screen-shot row">
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Volunteer Layout</h5>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-volunteer.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
        <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
            <h5>Teacher&rsquo;s Calendar</h5>
            <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-calendar.jpg" class="afkl-lazy-wrapper project-image"></div>
        </div>
      </div>
    </div>
    
    {{-- Mobile screen shots --}}
    <div class="flds__mobile">
        <div class="flds__mobile--phones">
            <div class="flds__shot project-screen-shot row">
              <div class="project-screen-shot--thirty" itemprop="workExample">
                  <h5>Home Screen</h5>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-iphone-1.png" class="afkl-lazy-wrapper"></div>
              </div>
              <div class="project-screen-shot--thirty" itemprop="workExample">
                  <h5>Registration</h5>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-iphone-2.png" class="afkl-lazy-wrapper"></div>
              </div>
               <div class="project-screen-shot--thirty" itemprop="workExample">
                  <h5>Teacher Updates</h5>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-iphone-3.png" class="afkl-lazy-wrapper"></div>
              </div>
            </div>
        </div>
        

        <div class="flds__mobile--tablets">
             <div class="flds__shot project-screen-shot row">
              <div class="project-screen-shot--fifty" itemprop="workExample">
                  <h5>Bulletin Board</h5>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-ipad-1.png" class="afkl-lazy-wrapper"></div>
              </div>
              <div class="project-screen-shot--fifty" itemprop="workExample">
                  <h5>FAQ&rsquo;s Searching</h5>
                  <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-ipad-2.png" class="afkl-lazy-wrapper"></div>
              </div>
            </div>
        </div>
    </div>  




     <div class="flds__maximize">
        <div class="row">
          <section class="project-copy" itemprop="description">
            <h3>Maximizing Engagement</h3>
            <p>Once the site was operational, we started to test engagement of the parents and users. Initially, we saw a phenomenal participation rate. The site increased from 30 users a month to over 4,000, time on site increased from 0:23 to over 7:10 and over 98% of the school&rsquo;s families had at least one parent online.</p>
            <p>As time passed, we noticed that parents engagement dropped and they were still getting multiple versions of communication from teachers. We pushed for more consistency from the teachers, but also added a daily/weekly email for each parent.</p>
            <p>Parents now have an option of daily or weekly email emails that dynamically compiles the days activities for their children, and wraps it up in a short email that is delivered to all parents around their children&rsquo;s bed time.</p>
            <p>Each parent was added to a MailChimp list and I built newsletters for important upcoming events in the school. These emails go out twice a quarter.</p>
            <p>Launching the new email format, we saw an dramatic increase in engagement. 76% of parents open the MailChimp newsletters and the daily emails have open rates of 120% and click rates of 50+%</p>

          </section>
        </div>


        <div class="flds__shot project-screen-shot row">
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Daily Email</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/daily-marketing.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
          <div class="project-screen-shot--fifty" data-project-image itemprop="workExample">
              <h5>Email Newsletter</h5>
              <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/flds/flds-mailchimp.jpg" class="afkl-lazy-wrapper project-image"></div>
          </div>
        </div>
     </div>
       

          

   <section class="project-credits">  
        <ul class="credits">
          <li itemprop="author"><strong>Strategy:</strong> Zack Davis</li>
          <li><strong>Design:</strong> Zack Davis</li>
          <li><strong>Copy:</strong>  Jared Herzog</li>
          <li><strong>Photography:</strong> Ariel Cabe Martin, Barbara Cassidy</li>
        </ul>
     </section> 



     <section class="project-thanks row">  
            <h5>Thanks for Reading</h5>
            <p>Do you like what you see?</p>
            <ul>
              <li><span data-underlined-link data-text="Learn More About Me" data-page="{{ route('about') }}"></span></li>
            </ul>

         </section>

    

    <div class="up-next innovation" go-to-next data-link="{{ route('innovation') }}" id="goToNext"> 
        <h6 id="removeTopButton">Next</h6>
    <div data-project-title data-title="Caring Relentlessly" data-roles="Design, Architecture, Strategy" data-client="Innovation Compounding" ng-cloak></div>



</article>
@endsection

