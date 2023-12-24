@extends('back.layout.layout')

@section('content')
    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">

        <header>
            <h2 class="h2 article-title">Contacts</h2>
        </header>


        <section class="service">

            <h3 class="h3 service-title">{{$contactStatus}} Contacts</h3>

            <ul class="service-list" style="    grid-template-columns: 1fr ;@import ">

                @if(isset($contacts))
                    @foreach($contacts as $contact)
                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{asset('assets/images/avatar-1.png')}}
                " alt="design icon" width="40">
                            </div>

                            <div class="service-content-box">

                                <ul class="service-list" style="    grid-template-columns: 1fr 1fr 1fr ;@import ">

                                    <li style="padding: 10px;" class="service-item">
                                        <h4 class="h4 service-item-title">{{$contact->fullName}}</h4>
                                    </li>
                                    <li style="padding: 10px;" class="service-item">
                                        <h4 class="h4 service-item-title">{{$contact->phone}}</h4>
                                    </li>
                                    <li style="padding: 10px;" class="service-item">
                                        <h4 class="h4 service-item-title">{{$contact->email}}</h4>
                                    </li>

                                </ul>


                                <p class="service-item-text">
                                   {{$contact->text}}
                                </p>
                                <br>

                                <ul class="service-list" style="    grid-template-columns: 1fr 1fr  ;@import ">

                                    <li style="padding: 10px;" class="service-item">
                                        <a href="{{route('dashboard.contact.moveToComment' , $contact->id)}}" style="width: 100%;@import" class="form-btn"
                                           data-form-btn>
                                            <ion-icon name="arrow-forward"></ion-icon>
                                            <span>Commented</span>
                                        </a>

                                    </li>
                                    <li style="padding: 10px;" class="service-item">
                                        <a
                                            @if($contact->seen)
                                                href="#"
                                            @else
                                                href="{{route('dashboard.contact.seen' , $contact->id)}}"
                                            @endif
                                            style="width: 100%;@import" class="form-btn"
                                           data-form-btn>
                                            <ion-icon name="checkmark"></ion-icon>
                                            <span>seen</span>
                                        </a>

                                    </li>


                                </ul>

                            </div>

                        </li>

                    @endforeach
                @endif


            </ul>

            <br>
            @if($contactStatus=='New')
                <a href="{{route('dashboard.contact.showAll')}}" style="width: 100%;@import" class="form-btn" type="submit"
                   data-form-btn>
                    <ion-icon name="list"></ion-icon>
                    <span>Show all</span>
                </a>
            @else
                <a href="{{route('dashboard.contact')}}" style="width: 100%;@import" class="form-btn" type="submit"
                   data-form-btn>
                    <ion-icon name="list"></ion-icon>
                    <span>Show New</span>
                </a>
            @endif


        </section>

    </article>

@endsection
