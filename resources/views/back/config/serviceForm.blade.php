@extends('back.layout.layout')

@section('content')

    <!--
          - #ABOUT
        -->

    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">Service </h3>

            <form  enctype="multipart/form-data" action="{{route('dashboard.config.services.save' , (isset($service)? $service->id : -1) )}}" method="post" class="form" data-form>

                {{csrf_field()}}



                <div class="input-wrapper">
                    <input type="text" name="name" class="form-input" placeholder=" name" required
                           value="{{  isset($service) ? $service->title : (old('name') ? old('name') : '')  }}"
                           data-form-input>

                    <input type="file" name="image" class="form-input" placeholder="image"
                           value="{{  isset($service) ? $service->image : (old('image') ? old('image') : '')  }}"

                           data-form-input>
                </div>

                <textarea name="text" class="form-input" placeholder="Your Message"
                          data-form-input>{{isset($service) ? $service->text : (old('text') ? old('text') : '')}}</textarea>


                <button style="width:100%" class="form-btn" type="submit" data-form-btn>
                    <ion-icon name="checkmark"></ion-icon>
                    <span>save</span>
                </button>

            </form>


            <br>

            @if(isset($service))
                <section class="service">

                    <h3 class="h3 service-title">preview</h3>


                    <li class="service-item">

                        <div class="service-icon-box">
                            <img src="{{(asset('storage/images/services').'/'.$service->image  )}}" alt="design icon" width="40">
                        </div>

                        <div class="service-content-box">
                            <h4 class="h4 service-item-title">{{$service->title}}</h4>

                            <p class="service-item-text">
                                {{$service->text}}
                            </p>
                        </div>

                    </li>

                </section>
            @endif

        </section>

    </article>

@endsection
