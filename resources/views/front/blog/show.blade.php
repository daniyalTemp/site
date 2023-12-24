@extends('front.layouts.main')


@section('content')

    @include('front.mainpage.sidebar')




    <!--
      - #main-content
    -->
    <div class="main-content">



        <article class="contact active" >

            <header>
                <h2 class="h2 article-title">{{$blog->title}}</h2>
                <h5 class="h5 article-title">{{$blog->Type()->get()[0]->name}}</h5>
            </header>

            <section class="mapbox" >
                <figure>
                    <img
                        src="/storage/images/blogs/{{$blog->image}}"  width="100%" loading="lazy">
                </figure>
            </section>

            <section class="contact-form">


                <p class="about-text">
                    {{$blog->text}}
                </p>



            </section>

        </article>



    </div>

@endsection
