
<!--
          - #BLOG
        -->

<article class="blog" data-page="blog">

    <header>
        <h2 class="h2 article-title">Blog</h2>
    </header>

    <section class="blog-posts">

        <ul class="blog-posts-list">

            @if(isset($blogs))
                @foreach($blogs as $blog)
                    <li class="blog-post-item">
                        <a href="{{route('showBlog', $blog->id)}}">

                            <figure class="blog-banner-box">
                                <img src="/storage/images/blogs/{{$blog->image}}" alt="{{$blog->title}}" loading="lazy">
                            </figure>

                            <div class="blog-content">

                                <div class="blog-meta">
                                    <p class="blog-category">{{$blog->Type()->get()[0]->name}}</p>

                                    <span class="dot"></span>

                                    <time datetime="{{$blog->created_at}}">{{$blog->created_at}}</time>
                                </div>

                                <h3 class="h3 blog-item-title">{{$blog->title}}</h3>

                                <p class="blog-text">
                                    {{$blog->text}}
                                </p>

                            </div>

                        </a>
                    </li>
                @endforeach
            @endif



        </ul>

    </section>

</article>
