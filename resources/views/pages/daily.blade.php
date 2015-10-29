@extends('layouts.work')


@section('content')
		<article class="daily__wrapper" itemscope itemtype="http://schema.org/VisualArtwork">

		    <section>
          <div data-project-title data-title="100 Days of UI" data-roles="Design" data-client="" ng-cloak></div>
        </section>
  
        <section class="daily__desc">
          <p >I am taking part in the <a target="_blank" href="http://dailyui.co">100 days of UI challenge.</a> Each day I am giving myself 30 minutes to complete the emailed task.  Check back for more progress.</p>
        </section>
        
        @if ($ui == false) {
          <section>
            No art is added. 
          </section>
        }
        <section class="daily__list">
          @foreach($daily as $ui)
            

            <div class="daily__list--item">
              <div class="daily__list--item--day">{{  $ui->day }} </div>
              {{-- <div class="daily__list--item--type">{{  $ui->type }} </div> --}}
              {{-- <img src="{{ $pageInfo['assetPath'] }}/images/dailyui/{{ $ui->image }}" src="Day {{ $ui->day }} - {{ $ui->type }}"> --}}
              <div data-project-image>
                <div afkl-lazy-image="{{ $pageInfo['assetPath'] }}/images/dailyui/{{ $ui->image }}" class="afkl-lazy-wrapper project-image"></div>
              </div>
            </div>
          @endforeach
        </section>


        <section>

        </section>


    </article>    


@endsection