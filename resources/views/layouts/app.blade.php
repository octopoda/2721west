<?php  
    if  (!isset($pageInfo))  {
        $pageInfo = [
          'pageTitle'  => "Zack Davis",
          'pageDesc' => 'Zack Davis is a unqiue blend of Design, Technology, and Strategy',
          'navigation' => 'show-contact',
          'assetPath' => '/assets',
          'pageShort' => 'other',
          'shareImage' => '/assets/images/icons/',
          'keywords' => 'Product Manager, Design Leader, UX Lead, Digital Strategy, Execution'
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


