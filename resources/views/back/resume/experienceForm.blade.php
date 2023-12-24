@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">Experience </h3>

            <form enctype="multipart/form-data"
                  action="{{route('dashboard.resume.saveExperience' , (isset($experience)? $experience->id : -1) )}}"
                  method="post" class="form" data-form>

                {{csrf_field()}}
                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                    <input type="text" name="position" class="form-input" placeholder=" position  Name" required
                           value="{{  isset($experience) ? $experience->position : (old('position') ? old('position') : '')  }}"
                           data-form-input>


                </div>


                <div style=" display: grid;
      grid-template-columns: 1fr 1fr max-content;@import " class="input-wrapper">
                    <input type="text" name="yearIN" class="form-input" placeholder=" year IN " required
                           value="{{  isset($experience) ? $experience->yearIN : (old('yearIN') ? old('yearIN') : '')  }}"
                           data-form-input>

                    <input type="text" name="yearOut" class="form-input" placeholder="year Out "
                           value="{{  isset($experience) ? $experience->yearOut    : (old('yearOut ') ? old('yearOut ') : '')  }}"

                           data-form-input>
                    <label class="input">
                        Present
                        <input type="checkbox" name="active" class="form-input"
                               {{  isset($experience) ? ($experience->active? 'checked' :''  )    : (old('active ') ? old('active ') : '')  }}
                               data-form-input>
                    </label>
                </div>


                <div class="input-wrapper" style="    grid-template-columns: 1fr;@import ">
                   <textarea name="text" class="form-input" placeholder="about experience  "
                             data-form-input>{{isset($experience) ? $experience->text : (old('text') ? old('text') : '')}}</textarea>

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

