@extends('back.layout.layout')

@section('content')


    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">





        <section class="contact-form">

            <h3 class="h3 form-title">Contact Info </h3>

            <form action="{{route('dashboard.config.contact.save')}}"  method="post" class="form" data-form>

                {{csrf_field()}}





                <ul style="grid-template-columns: 1fr 1fr;" class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="man-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">First Name</p>
                            <input type="text" name="firstName" value="{{old('firstName') ? old('firstName') : $config->firstName }}" class="form-input" placeholder="firstName"
                                   data-form-input>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="man-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Last Name</p>

                            <input type="text" name="lastName"
                                   value="{{old('lastName') ? old('lastName') : $config->lastName }}"
                                   class="form-input" placeholder="lastName"
                                   data-form-input>
                        </div>

                    </li>


                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>
                            <input type="email" name="email" value="{{old('email') ? old('email') : $config->email }}"
                                   class="form-input" placeholder="Email address"
                                   data-form-input>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <input type="text" name="phone"
                                   value="{{old('phone') ? old('phone') : $config->phone }}"
                                   class="form-input" placeholder="Phone"
                                   data-form-input>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <input type="text"  id="birthday"
                                   value="{{old('birthday') ? old('birthday') : $config->birthday }}"
                                   name="birthday" class="form-input" placeholder="Birthday"
                                   data-form-input>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <input type="text" name="address" class="form-input" placeholder="address"
                                   value="{{old('address') ? old('address') : $config->address }}"

                                   data-form-input>
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

                            <input type="text" name="github" class="form-input" placeholder="Github"
                                   value="{{old('github') ? old('github') : $config->github }}"

                                   data-form-input>                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="paper-plane"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Telegram</p>

                            <input type="text" name="telegram" class="form-input" placeholder="Telegram"
                                   value="{{old('telegram') ? old('telegram') : $config->telegram }}"

                                   data-form-input>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">LinkedIn</p>

                            <input type="text" name="linkedIn" class="form-input" placeholder="LinkedIn"
                                   value="{{old('linkedin') ? old('linkedin') : $config->linkedin }}"

                                   data-form-input>
                        </div>

                    </li>
                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Instagram</p>

                            <input type="text" name="instagram" class="form-input" placeholder="Instagram"
                                   value="{{old('instagram') ? old('instagram') : $config->instagram }}"

                                   data-form-input>
                        </div>

                    </li>


                </ul>

                <br>
                <button style="width:100%" class="form-btn" type="submit"  data-form-btn>
                    <ion-icon name="checkmark"></ion-icon>
                    <span>save</span>
                </button>

            </form>

        </section>

    </article>

@endsection
