<!DOCTYPE html>
<html lang="en" class="not-bordered">
<head>
  @include('layouts.front.header', array('pageInfo', $pageInfo))
</head>

<body ng-app="twentyseven" class="work">

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

  <header>
    @include('layouts.front.navigation', array('pageInfo',  $pageInfo))
  </header>

  <div id="contentContainer" class="project-container">
    @yield('content')
  </div>

  <p to-top class="top-button">Top<i class="fa fa-angle-up"></i></p>
   @include('layouts.front.scripts', array('pageInfo', $pageInfo))
</body>
</html>


