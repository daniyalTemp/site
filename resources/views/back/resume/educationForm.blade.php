@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">Education </h3>

            <form enctype="multipart/form-data"
                  action="{{route('dashboard.resume.saveEducation' , (isset($education)? $education->id : -1) )}}"
                  method="post" class="form" data-form>

                {{csrf_field()}}


                <div class="input-wrapper">
                    <input type="text" name="uniName" class="form-input" placeholder=" University  Name" required
                           value="{{  isset($education) ? $education->uniName : (old('uniName') ? old('uniName') : '')  }}"
                           data-form-input>


                    <select style="background-color:#1e1e1f" name="grade" class="form-input" data-form-input>
                        <option
                            value="diploma" {{isset($education)? ((($education->grade=='diploma')? 'selected': '')):(old('grade') ? old('grade') : '')}}>
                            Diploma
                        </option>
                        <option
                            value="master"{{isset($education)? ((($education->grade=='master')? 'selected': '')):(old('grade') ? old('grade') : '')}}>
                            Master
                        </option>
                        <option
                            value="bachelor"{{isset($education)? ((($education->grade=='bachelor')? 'selected': '')):(old('grade') ? old('grade') : '')}}>
                            Bachelor
                        </option>
                        <option
                            value="phd"{{isset($education)? ((($education->grade=='phd')? 'selected': '')):(old('grade') ? old('grade') : '')}}>
                            PHD
                        </option>
                    </select>
                </div>
                <div style=" display: grid;
      grid-template-columns: 1fr 1fr max-content;@import " class="input-wrapper">
                    <input type="text" name="yearIN" class="form-input" placeholder=" year IN " required
                           value="{{  isset($education) ? $education->yearIN : (old('yearIN') ? old('yearIN') : '')  }}"
                           data-form-input>

                    <input type="text" name="yearOut" class="form-input" placeholder="year Out "
                           value="{{  isset($education) ? $education->yearOut    : (old('yearOut ') ? old('yearOut ') : '')  }}"

                           data-form-input>
                    <label class="input">
                        Not Done
                        <input type="checkbox" name="active" class="form-input"
                               {{  isset($education) ? ($education->active? 'checked' :''  )    : (old('active ') ? old('active ') : '')  }}
                               data-form-input>
                    </label>
                </div>
                <div class="input-wrapper">


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

