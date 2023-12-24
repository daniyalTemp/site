@extends('back.layout.layout')

@section('content')
    <!--
          - #ABOUT
        -->

    <!--
          - #PORTFOLIO
        -->

    <article class="portfolio active" data-page="portfolio">

        <header>
            <h2 class="h2 article-title">Projects</h2>
        </header>

        <section class="projects">


            <ul class="project-list">


                @if(isset($projects))
                    @foreach($projects as $project)
                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="{{route('dashboard.projects.edit', $project->id)}}">

                                <figure class="project-img">

                                    <div class="project-item-icon-box">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </div>

                                    <img src="{{asset('storage/images/projects'.'/'.$project->image)}}" alt="finance" loading="lazy">
                                </figure>

                                <h3 class="project-title">{{$project->title}}</h3>

                                <p class="project-category">{{$project->Type()->get()[0]->name}}</p>

                            </a>
                        </li>

                    @endforeach
                @endif


            </ul>
            <br>
            <br>
            <a href="{{route('dashboard.projects.new')}}" style="width: 100%;@import" class="form-btn" type="submit" data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>

        </section>

    </article>

@endsection
