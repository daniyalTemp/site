@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">

        <header>
            <h2 class="h2 article-title">Config</h2>
        </header>
        <header>
            <h4 class="h4 article-title">About me</h4>
        </header>

        <section class="about-text">


            {{$config->about}}
            <br>
            <br>

            <a href="{{route('dashboard.config.about')}}" style="width: 100%;@import" class="form-btn" type="submit"
               data-form-btn>
                <ion-icon name="create"></ion-icon>
                <span>Edit</span>
            </a>

        </section>


        <!--
          - Contact info
        -->

        <section class="">

            <h3 class="h3 service-title">Contact info</h3>

            <ul style="grid-template-columns: 1fr 1fr;" class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Email</p>

                        <a href="mailto:{{$config->email}}" class="contact-link">{{$config->email}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Phone</p>

                        <a href="tel:{{$config->phone}}" class="contact-link">{{$config->phone}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Birthday</p>

                        <time datetime="1982-06-23">{{$config->birthday}}</time>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Location</p>

                        <address>{{$config->address }}</address>
                    </div>

                </li>

            </ul>
            <br>

            <ul style="grid-template-columns: 1fr 1fr;" class="contacts-list">

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="logo-github"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Github</p>

                        <a href="https://github.com/{{$config->github}}" class="contact-link">{{$config->github}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="paper-plane"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Telegram</p>

                        <a href="https://telegram.me/{{$config->telegram}}"
                           class="contact-link">{{$config->telegram}}</a>
                    </div>

                </li>

                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">LinkedIn</p>

                        <a href="{{$config->linkedin}}" class="contact-link">{{$config->linkedin}}</a>
                    </div>

                </li>
                <li class="contact-item">

                    <div class="icon-box">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>

                    <div class="contact-info">
                        <p class="contact-title">Instagram</p>

                        <a href="https://instagram.com/{{$config->instagram}}"
                           class="contact-link">{{$config->instagram}}</a>
                    </div>

                </li>


            </ul>


            <br>

            <a href="{{route('dashboard.config.contact')}}" style="width: 100%;@import" class="form-btn" type="submit"
               data-form-btn>
                <ion-icon name="create"></ion-icon>
                <span>Edit</span>
            </a>

        </section>


        <!--
         - service
       -->
        <br>
        <section class="service">

            <h3 class="h3 service-title">Services</h3>

            <ul class="service-list">

                @if(isset($services))
                    @foreach($services as  $service)
                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="{{(asset('storage/images/services').'/'.$service->image  )}}" alt="design icon"
                                     width="40">


                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">{{$service->title}}</h4>

                                <p class="service-item-text">
                                    {{$service->text}}
                                </p>
                                <br>

                                <a href="{{route('dashboard.config.services.edit' , $service->id)}}"
                                   style=" width: 100%;@import"
                                   class="form-btn" type="submit" data-form-btn>
                                    <ion-icon name="create"></ion-icon>
                                    <span>Edit</span>
                                </a>i
                            </div>

                        </li>

                    @endforeach
                @endif


            </ul>

            <br>

            <a href="{{route('dashboard.config.services.new')}}" style="width: 100%;@import" class="form-btn"
               type="submit" data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>

        </section>


        <!--
          - clients
        -->

        <section class="clients">

            <h3 class="h3 clients-title">Clients</h3>

            <ul class="clients-list has-scrollbar">

                @if(isset($clients))
                    @foreach($clients as $client)
                        <li class="clients-item">
                            <a href="{{route('dashboard.config.client.edit' , $client->id)}}">
                                <img src="{{(asset('storage/images/clients').'/'.$client->logo  )}}" alt="client logo">
                            </a>
                        </li>

                    @endforeach
                @endif


            </ul>

            <br>

            <a href="{{route('dashboard.config.client.new')}}" style="width: 100%;@import" class="form-btn"
               type="submit" data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>

        </section>

    </article>

@endsection
