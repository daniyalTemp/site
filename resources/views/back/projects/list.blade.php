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

                <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">
                            <div class="project-item-icon-box">
                                <ion-icon name="create-outline"></ion-icon>
                            </div>

                            <img src="{{asset('assets/images/project-1.jpg')}}" alt="finance" loading="lazy">
                        </figure>

                        <h3 class="project-title">Finance</h3>

                        <p class="project-category">Web development</p>

                    </a>
                </li> <li class="project-item  active" data-filter-item data-category="web development">
                    <a href="#">

                        <figure class="project-img">

                            <div class="project-item-icon-box">
                                <ion-icon name="create-outline"></ion-icon>
                            </div>

                            <img src="{{asset('assets/images/project-1.jpg')}}" alt="finance" loading="lazy">
                        </figure>

                        <h3 class="project-title">Finance</h3>

                        <p class="project-category">Web development</p>

                    </a>
                </li>



            </ul>
            <br>
            <br>
            <a href="#"  style="width: 100%;@import" class="form-btn" type="submit"  data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>

        </section>

    </article>



@endsection
