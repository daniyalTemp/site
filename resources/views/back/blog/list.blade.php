@extends('back.layout.layout')

@section('content')

    <article class="blog active" data-page="blog">

        <header>
            <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">
            <a href="#"  style="width: 100%;@import" class="form-btn" type="submit"  data-form-btn>
                <ion-icon name="add"></ion-icon>
                <span>Add</span>
            </a>
            <br>
            <ul class="blog-posts-list">

                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>

                    </a>
                </li>


                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>

                    </a>
                </li>

                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>

                    </a>
                </li>

                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>

                    </a>
                </li>

                <li class="blog-post-item">
                    <a href="#">

                        <figure class="blog-banner-box">
                            <img src="{{asset('assets/images/blog-1.jpg')}}" alt="Design conferences in 2022" loading="lazy">
                        </figure>

                        <div class="blog-content">

                            <div class="blog-meta">
                                <p class="blog-category">Design</p>

                                <span class="dot"></span>

                                <time datetime="2022-02-23">Fab 23, 2022</time>
                            </div>

                            <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                            <p class="blog-text">
                                Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                            </p>

                        </div>

                    </a>
                </li>


            </ul>

        </section>

    </article>


@endsection
