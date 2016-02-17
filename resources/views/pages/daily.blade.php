@extends('layouts.work')


@section('content')
		<article class="daily__wrapper" itemscope itemtype="http://schema.org/VisualArtwork">

		    <section>
          <div data-project-title data-title="My own personal Dribbble" data-roles="Design" data-client="" ng-cloak></div>
        </section>
  
        <section class="daily__desc">
          <p>As I am not very active on social media (what guy with two jobs is) I don't have an invite to dribbble yet.  Since so many employers ask for my Dribbble account I decided to show you what I would have on it.  And if you have an invite, throw me a bone. </p>
        </section>
        
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