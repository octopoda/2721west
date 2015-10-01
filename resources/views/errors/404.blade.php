@extends('layouts.app')


@section('content')
    <div data-ng-controller="FourOFourController as vm" class="home__wrapper">
      <div class="row">
        <section data-into class="home__main into">

            <h1>
              <span class="malarkey" ng-click="vm.type()">
                <span class="malarkey--hover cuss"></span>
                <span class="malarkey--text" id="malarkey">Shit!</span>
              </span><br>
              I knew I forgot to add something.   Sorry.
            </h1>
            
          </section>
      </div>
</div> <!-- End Controller -->
@endsection