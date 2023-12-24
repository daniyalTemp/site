<!--
          - #RESUME
        -->

<article class="resume" data-page="resume">

    <header>
        <h2 class="h2 article-title">Resume</h2>
    </header>

    <section class="timeline">

        <div class="title-wrapper">
            <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
        </div>

        <ol class="timeline-list">

            @if(isset($educations))
                @foreach($educations as $education)
                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">{{$education->uniName}}</h4>

                        <span>{{$education->yearIN}}
                            —
                            {{($education->yearOut?$education->yearOut: 'Present')}}
                        </span>

                        <p class="timeline-text">
                            <br>


                        </p>

                    </li>

                @endforeach
            @endif


        </ol>

    </section>

    <section class="timeline">

        <div class="title-wrapper">
            <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
        </div>

        <ol class="timeline-list">

            @if(isset($experiences))
                @foreach($experiences as $experience)
                    <li class="timeline-item">

                        <h4 class="h4 timeline-item-title">{{$experience->position}}</h4>

                        <span>
                            {{$experience->yearIN}}
                            —
                             {{($experience->yearOut?$experience->yearOut: 'Present')}}

                        </span>

                        <p class="timeline-text">
                          {{$experience->text}}
                        </p>

                    </li>
                @endforeach
            @endif


        </ol>

    </section>

    <section class="skill">

        <h3 class="h3 skills-title">My skills</h3>

        <ul class="skills-list content-card">

            @if(isset($skills))
                @foreach($skills as $skill)
                    <li class="skills-item">

                        <div class="title-wrapper">
                            <h5 class="h5">{{$skill->name}}</h5>
                            <data value="{{$skill->percent}}">{{$skill->percent}}%</data>
                        </div>

                        <div class="skill-progress-bg">
                            <div class="skill-progress-fill" style="width: 80%;"></div>
                        </div>

                    </li>
                @endforeach
            @endif



        </ul>

    </section>

</article>
