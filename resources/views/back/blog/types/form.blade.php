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
            <h2 class="h2 article-title"> New blog type</h2>
        </header>

        <section class="projects">





            <form enctype="multipart/form-data"
                  action="{{route('dashboard.blogs.type.save' , (isset($type)? $type->id : -1) )}}"
                  method="post" class="form" data-form>

                {{csrf_field()}}
                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                    <input type="text" name="title" class="form-input" placeholder="Title" required
                           value="{{  isset($type) ? $type->name : (old('title') ? old('title') : '')  }}"
                           data-form-input>


                </div>






                <button style="width:100%" class="form-btn" type="submit" data-form-btn>
                    <ion-icon name="checkmark"></ion-icon>
                    <span>save</span>
                </button>

            </form>


            <br>

        </section>


    </article>



@endsection
