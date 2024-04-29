@extends('frontend.layouts.main')


@section('contents')
<main id="main">

    @include('frontend.components.Home.sliders')

    <!--About Us include-->
    @include('frontend.components.Home.AboutUs')

    @include('frontend.components.Home.missionAndvision')

    @include('frontend.components.Home.workLocation')

    @include('frontend.components.Home.OurProcess')

    @include('frontend.components.Home.podcast')

    @include('frontend.components.Home.FoundationNews')

    @include('frontend.components.Home.OurStories')

    @include('frontend.components.Home.successStories')

    @include('frontend.components.Home.client')

    @include('frontend.components.Home.updates')

</main>


@endsection