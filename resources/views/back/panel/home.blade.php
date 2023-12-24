@extends('back.layout.layout')

@section('content')
    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <!--
          - service
        -->

        <section class="service">

            <h3 class="h3 service-title">Statistics</h3>

            <ul class="service-list">

                @if(isset($counts))
                    @foreach($counts as  $key => $count)
                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{asset('assets/images/'.$key.'.svg')}}" alt="design icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">{{$key}}</h4>

                                <h5 class="service-item-text h5">
                                    {{$count}}
                                </h5>
                            </div>

                        </li>

                    @endforeach
                @endif



            </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

            <h3 class="h3 testimonials-title">New Contacts</h3>

            <ul class="testimonials-list has-scrollbar">

                @if(isset($newComments))
                    @foreach($newComments as $newComment)
                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="{{asset('assets/images/avatar-1.png')}}"  width="60"
                                         data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>{{$newComment->fullName}}</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                       {{$newComment->text }}
                                    </p>
                                    <div style="grid-template-columns: 1fr  1fr">
                                    <h5 class="h5">{{$newComment->email}}</h5>
                                    <h5 class="h5">{{$newComment->phone}}</h5>
                                    </div>
                                    <br>
                                    <div style="display:grid ;grid-template-columns: 1fr  1fr">
                                    <a href="{{route('dashboard.contact.seen' , $newComment->id)}}"   style="  margin-right: 25%;" class="form-btn" type="submit" data-form-btn>
                                        <ion-icon name="checkmark"></ion-icon>
                                        <span>Seen</span>
                                    </a>

                                    <a href="{{route('dashboard.contact.moveToComment', $newComment->id)}}"  class="form-btn" type="submit" data-form-btn>
                                        <ion-icon name="arrow-forward"></ion-icon>
                                        <span>Comment</span>
                                    </a>
                                    </div>
                                </div>

                            </div>
                        </li>

                        <!--
                          - testimonials modal
                        -->

                        <div class="modal-container" data-modal-container>

                            <div class="overlay" data-overlay></div>

                            <section class="testimonials-modal">

                                <button class="modal-close-btn" data-modal-close-btn>
                                    <ion-icon name="close-outline"></ion-icon>
                                </button>

                                <div class="modal-img-wrapper">
                                    <figure class="modal-avatar-box">
                                        <img src="{{asset('/assets/images/avatar-1.png')}}"  width="80" data-modal-img>
                                    </figure>

                                </div>

                                <div class="modal-content">

                                    <h4 class="h3 modal-title" data-modal-title>{{$newComment->FullName}}</h4>


                                    <time datetime="{{$newComment->created_at}}">{{$newComment->created_at}}</time>

                                    <div data-modal-text>
                                        <p>
                                         {{$newComment->text}}
                                        </p>
                                        <div style="grid-template-columns: 1fr  1fr">
                                            <h5 class="h5">{{$newComment->email}}</h5>
                                            <h5 class="h5">{{$newComment->phone}}</h5>
                                        </div>
                                    </div>

                                </div>

                            </section>

                        </div>



                    @endforeach
                @endif

            </ul>

        </section>



    </article>


@endsection
