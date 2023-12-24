@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">

        <header>
            <h2 class="h2 article-title">Blog types</h2>
        </header>




        <section class="">


            <ul style="grid-template-columns: 1fr 1fr;" class="contacts-list">

                @if(isset($types))
                @foreach($types as $type)
                        <li class="contact-item">

                            <div class="icon-box">
                            </div>

                            <div class="contact-info">
                                <a href="{{route('dashboard.blogs.type.edit',$type->id)}}" class="contact-link">
                                    <p class="contact-title">{{$type->name}}</p>

                               </a>
                            </div>

                        </li>



                    @endforeach
                @endif

            </ul>
            <br>



            <br>

            <a href="{{route('dashboard.blogs.type.new')}}" style="width: 100%;@import" class="form-btn" type="submit"
               data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>

        </section>



    </article>

@endsection
