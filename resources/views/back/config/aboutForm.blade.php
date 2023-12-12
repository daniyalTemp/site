@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">About me </h3>


            <section class="about-text">

                <p>
                    {{$config->about}}
                </p>


            </section>


            <form action="{{route('dashboard.config.about.save')}}" method="post" class="form" data-form>

                {{csrf_field()}}


                <textarea name="text"  id="text-editor" class="form-input"  required
                          data-form-input> </textarea>
                <br>

                <button style="width:100%" class="form-btn" type="submit"  data-form-btn>
                    <ion-icon name="checkmark"></ion-icon>
                    <span>save</span>
                </button>

            </form>

        </section>

    </article>

@endsection
