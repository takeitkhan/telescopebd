@extends('frontend.layouts.master')

@section('site-title')
    {{ $the::settings('site_name') .' | '. $the::settings('site_description')}}
@endsection


@section('page-content')
    @include('frontend.homepage.slider')
    <div class="container content-home">
        @include('frontend.homepage.notice_board')
        @include('frontend.homepage.vision_speech')
        @include('frontend.homepage.projects')
        @include('frontend.homepage.partners')
        @include('frontend.homepage.in_media')
    </div>
@endsection
