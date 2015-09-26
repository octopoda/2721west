<?php  
      if  (!isset($pageInfo))  {
        $pageInfo = [
          'pageTitle'  => "Zack Davis Digital Designer / Full Stack Developer",
          'pageDesc' => 'Zack Davis is a Digital Designer and Full Stack Developer who is passionate about solving problems.',
          'navigation' => 'show-contact',
          'assetPath' => '/assets',
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
            @include('layouts.front.navigation', array('pageInfo', $pageInfo))
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


