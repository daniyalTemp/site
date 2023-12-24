<!--
          - #PORTFOLIO
        -->

<article class="portfolio" data-page="projects">

    <header>
        <h2 class="h2 article-title">Projects</h2>
    </header>

    <section class="projects">

        <ul class="filter-list">

            <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
            </li>

           @if(isset($projectTypes))
               @foreach($projectTypes as $projectType)
                    <li class="filter-item">
                        <button data-filter-btn>{{$projectType->name}}</button>
                    </li>

               @endforeach
           @endif

        </ul>

        <div class="filter-select-box">

            <button class="filter-select" data-select>

                <div class="select-value" data-selecct-value>Select category</div>

                <div class="select-icon">
                    <ion-icon name="chevron-down"></ion-icon>
                </div>

            </button>

            <ul class="select-list">

                @if(isset($projectTypes))
                    <li class="select-item">
                        <button data-select-item>All</button>
                    </li>
                    @foreach($projectTypes as $projectType)
                        <li class="select-item">
                            <button data-select-item>{{$projectType->name}}</button>
                        </li>
                    @endforeach
                @endif



            </ul>

        </div>

        <ul class="project-list">

            @if(isset($projects))
                @foreach($projects as  $project)
                    <li class="project-item  active" data-filter-item data-category="{{$project->Type()->get()[0]->name}}">
                        <a href="//{{$project->website}}">

                            <figure class="project-img">
                                <div class="project-item-icon-box">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </div>

                                <img src="/storage/images/projects/{{$project->image}}" alt="finance" loading="lazy">
                            </figure>

                            <h3 class="project-title">{{$project->title}}</h3>

                            <p class="project-category">{{$project->Type()->get()[0]->name}}</p>

                        </a>
                    </li>
                @endforeach
            @endif


        </ul>

    </section>

</article>
