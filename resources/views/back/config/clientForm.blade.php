@extends('back.layout.layout')

@section('content')


    <article class="about  active" data-page="about">


        <section class="contact-form">

            <h3 class="h3 form-title">Client</h3>

            <form enctype="multipart/form-data" action="{{route('dashboard.config.client.save' , (isset($client)? $client->id : -1))}}" method="post"  class="form" data-form>

                {{csrf_field()}}


                <div class="input-wrapper">
                    <input type="text" name="name" class="form-input" placeholder=" name" required
                           value="{{ isset($client)? $client->name : (old('name') ? old('name') : '') }}"
                           data-form-input>

                    <input type="file" name="image" class="form-input" placeholder="image"
                           value="{{ isset($client)? $client->logo : (old('image') ? old('image') : '') }}"

                           data-form-input>
                </div>

                <textarea name="link" class="form-input" placeholder=" link"
                          data-form-input>
                    {{ isset($client)? $client->link : (old('link') ? old('link') : '')}}
                </textarea>


                <button style="width:100%" class="form-btn" type="submit" data-form-btn>
                    <ion-icon name="checkmark"></ion-icon>
                    <span>save</span>
                </button>

            </form>


            <br>

            @if(isset($client))
                <section class="clients">

                    <h3 class="h3 clients-title">preview</h3>

                    <ul class="clients-list has-scrollbar">

                        <li class="clients-item">
                            <a href="{{$client->link}}" target="_blank">
                                <img src="{{(asset('storage/images/clients').'/'.$client->logo  )}}" alt="client logo">
                            </a>
                        </li>

                    </ul>

                    <br>


                </section>
            @endif
        </section>


    </article>

@endsection
