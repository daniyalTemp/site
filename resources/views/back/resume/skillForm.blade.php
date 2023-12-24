@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">Skill </h3>

            <form enctype="multipart/form-data"
                  action="{{route('dashboard.resume.saveSkill' , (isset($skill)? $skill->id : -1) )}}"
                  method="post" class="form" data-form>

                {{csrf_field()}}
                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                    <input type="text" name="name" class="form-input" placeholder="Skill Name" required
                           value="{{  isset($skill) ? $skill->name : (old('name') ? old('name') : '')  }}"
                           data-form-input>


                </div>


                <div  class="input-wrapper">
                    <input type="file" name="image" class="form-input" placeholder=" image "
                           value="{{  isset($skill) ? $skill->image : (old('image') ? old('image') : '')  }}"
                           data-form-input>

                    <input type="text" name="percent" class="form-input" placeholder="percent (0 - 100) "
                           value="{{  isset($skill) ? $skill->percent    : (old('percent') ? old('percent') : '')  }}"

                           data-form-input>

                </div>


                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                   <textarea name="text" class="form-input" placeholder="about Skill  "
                             data-form-input>{{isset($skill) ? $skill->text : (old('text') ? old('text') : '')}}</textarea>

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

