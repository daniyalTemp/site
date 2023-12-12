@extends('front.layouts.main')


@section('content')

    <!--
      - #SIDEBAR
    -->

    <aside style="width: 50%;@import" class="sidebar">

        <div class="sidebar-info">

            <figure class="avatar-box">
                <img style="  border-radius:30%" src="./assets/images/login.png" alt="daniyal roomiyani" width="80">
            </figure>

            <div class="info-content">
                <h1 class="name" title="register">register</h1>

                <p class="title">Panel</p>
            </div>

            <button class="info_more-btn" data-sidebar-btn>
                <span>Show Contacts</span>

                <ion-icon name="chevron-down"></ion-icon>
            </button>

        </div>

        <div class="sidebar-info_more">

            <div class="separator"></div>

            <section class="contact-form">


                <form action="{{route('doRegister')}}" method="post" class="form" data-form>
{{csrf_field()}}
                    <div>
                        <input type="text" name="email" class="form-input" placeholder="Email" required
                               data-form-input>
                    </div>
                    <br>
                    <div>
                        <input type="password" name="password" class="form-input" placeholder="password" required
                               data-form-input>
                    </div>
                    <br>

                    <button  style="width: 100%;@import" class="form-btn" type="submit"  data-form-btn>
                        <ion-icon name="paper-plane"></ion-icon>
                        <span>register</span>
                    </button>

                </form>

            </section>

            <div class="separator"></div>


        </div>

    </aside>

@endsection
