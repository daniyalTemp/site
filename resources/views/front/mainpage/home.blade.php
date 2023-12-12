@extends('front.layouts.main')


@section('content')

    @include('front.mainpage.sidebar')




    <!--
      - #main-content
    -->
    <div class="main-content">



    @include('front.mainpage.navbar')


        @include('front.mainpage.about')

        @include('front.mainpage.resume')

        @include('front.mainpage.portfolio')


        @include('front.mainpage.blog')

        @include('front.mainpage.contact')
    </div>

@endsection
