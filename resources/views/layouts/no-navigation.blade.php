<?php  
    if  (!isset($pageInfo))  {
        $pageInfo = [
          'pageTitle'  => "Zack Davis Digital Designer / Full Stack Developer",
          'pageDesc' => 'Zack Davis is a Digital Designer and Full Stack Developer who is passionate about solving problems.',
          'navigation' => 'show-contact',
          'assetPath' => '/assets',
          'pageShort' => 'other',
          'shareImage' => '/assets/images/icons/',
          'keywords' => 'Digital Design, Full Process Designer, Designer/Developer, Hybrid Designer'
        ];
      }
?>

<!DOCTYPE html>
<html lang="en" class="bordered">
<head>
	@include('layouts.front.header', array('pageInfo', $pageInfo))
</head>

<body data-ng-app="twentyseven" class="">
  @include('layouts.front.googleTag')
  <!-- End Google Tag Manager -->
	 <div data-push-window></div>
  

  {{-- Contact Modal --}}
  <div class="contact-modal" id="contactModal">
    <div data-modal-toggle data-target="contactModal" class="contact-modal__close">&times;</div>
    @include('forms.contact')
  </div>

  {{-- Work Modal --}}
  <div class="work-modal" id="workModal">
    <div data-modal-toggle data-target="workModal" class="work-modal__close">&times</div>
    @include('layouts.front.workModal')    
  </div>
  
  <div class="app-wrapper">
      <div id="contentContainer" class="app-container">
          <header>
            <header data-main-navigation class="m-navigation  {{ isset($pageInfo['navigation']) ? $pageInfo['navigation'] : '' }}">
                  <nav>
                <div class="nav-logo">
                  <div class="logo" data-go-home><a  href="/">2721 West</a></div>
                </div>
                <div class="m-navigation__links">
                  <!-- <ul>
                    <li class="m-navigation__work" data-modal-toggle data-target="workModal"><span data-underlined-link data-text="work" data-link-id="workLink"></span></li>
                    <li class="m-navigation__contact" data-modal-toggle data-target="contactModal"><span data-underlined-link data-text="contact" data-link-id="contactLink"></a></li>
                  </ul> -->
                </div>
              </nav>
          </header>

          </header>
  
          @yield('content')

          <footer>
            @include('layouts.front.footer')
          </footer>
      </div>
  </div>
  
  @include('layouts.front.scripts', array('pageInfo', $pageInfo))
  
</body>
</html>


