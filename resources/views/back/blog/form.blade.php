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
            <h2 class="h2 article-title"> New Project</h2>
        </header>
        <a href="{{route('dashboard.blogs.types')}}" style="width:100%" class="form-btn" type="submit" data-form-btn>
            <ion-icon name="copy"></ion-icon>
            <span>Manage types</span>
        </a>
        <br>
        <section class="projects">


            <form enctype="multipart/form-data"
                  action="{{route('dashboard.blogs.save' , (isset($blog)? $blog->id : -1) )}}"
                  method="post" class="form" data-form>

                {{csrf_field()}}
                <div class="input-wrapper">
                    <input type="text" name="title" class="form-input" placeholder="Title" required
                           value="{{  isset($blog) ? $blog->title : (old('title') ? old('title') : '')  }}"
                           data-form-input>

                    <select style="background-color:#1e1e1f" name="type" class="form-input" data-form-input>
                        @foreach($types as $type)
                            <option
                                value="{{$type->id}}" @if(isset($blog) &&$blog->Type()->get()[0]->id == $type->id)
                                selected
                                @endif >
                                {{$type->name}}
                            </option>
                        @endforeach
                    </select>


                </div>


                <div class="input-wrapper">
                    <input type="file" name="image" class="form-input" placeholder=" image "
                           value="{{  isset($blog) ? $blog->image : (old('image') ? old('image') : '')  }}"
                           data-form-input>

                    <label class="input">
                        Show Post
                        <input type="checkbox" name="show_post" class="form-input"
                               {{  isset($blog) ? ($blog->show_post? 'checked' :''  )    : (old('show_post') ? old('show_post') : '')  }}
                               data-form-input>
                    </label>

                </div>


                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                   <textarea name="text" class="form-input" placeholder="about Project  "
                             data-form-input>{{isset($blog) ? $blog->text : (old('text') ? old('text') : '')}}</textarea>

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
