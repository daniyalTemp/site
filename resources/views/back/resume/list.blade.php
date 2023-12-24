@extends('back.layout.layout')

@section('content')

    <article class="resume active" data-page="resume">

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

                            <a href="{{route('dashboard.resume.editEducation' , $education->id)}}">
                                <h4 class="h4 timeline-item-title">
                                    {{$education->uniName}}
                                </h4>
                            </a>
                            <span>{{$education->yearIN}}
                                —
                                @if($education->active)
                                    Studying
                                @else
                                    {{$education->yearOut}}
                                @endif
                            </span>

                            <p class="timeline-text">
                                {{$education->grade}}
                            </p>

                        </li>

                    @endforeach
                @endif


            </ol>

            <br>
            <a href="{{route('dashboard.resume.addEducation')}}" style="width: 100%;@import" class="form-btn"
               type="submit" data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>
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
                    @foreach($experiences as $experience )
                        <li class="timeline-item">
                            <a href="{{route('dashboard.resume.editExperience' , $experience->id)}}">
                                <h4 class="h4 timeline-item-title">{{$experience->position}}</h4>
                            </a>

                            <span>{{$experience->yearIN}}
                                —
                                @if($experience->active)
                                    Present
                                @else
                                    {{$experience->yearOut}}
                                @endif
                            </span>


                            <p class="timeline-text">
                                {{$experience->text}}
                            </p>

                        </li>

                    @endforeach
                @endif


            </ol>
            <br>

            <a href="{{route('dashboard.resume.addExperience')}}" style="width: 100%;@import" class="form-btn"
               type="submit" data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>
        </section>

        <section class="skill">

            <h3 class="h3 skills-title">My skills</h3>

            <ul class="skills-list content-card">

                @if(isset($skills))
                    @foreach($skills as $skill)
                        <li class="skills-item">
                            <a href="{{route('dashboard.resume.editSkill' , $skill->id)}}">
                            <div class="title-wrapper">
                                <h5 class="h5">{{$skill->name}}</h5>
                                <data value="{{$skill->percent}}">{{$skill->percent}}%</data>
                            </div>


                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: {{$skill->percent}}%;"></div>
                            </div>
                            </a>
                        </li>
                    @endforeach
                @endif


            </ul>
            <br>

            <a href="{{route('dashboard.resume.addSkill')}}" style="width: 100%;@import" class="form-btn" type="submit"
               data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>
        </section>

    </article>

@endsection
