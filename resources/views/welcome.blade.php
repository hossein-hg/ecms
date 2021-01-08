@extends('layouts.master')
@section('content')
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    @include('partials._Mainmenu-area')
    <!--Mainmenu-area/-->

    <!--Header-area-->
   @include('partials._Header-area')
    <!--Header-area/-->

    <!--Feature-area-->
   @include('partials._Feature-area')
    <!--Feature-area/-->

   @include('partials._services-slider')

    @include('partials._special-features')

    @include('partials._afortable-price')

    @include('partials.special-team')

    @include('partials._client-says')

    @include('partials._asked-questions')

    @include('partials._slider-gifs')

    @include('partials._beautiful-place')

    @include('partials._footer')




























@endsection