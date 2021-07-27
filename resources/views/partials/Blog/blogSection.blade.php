@foreach ($blogarticles as $blogarticle)
<section class="site-section-small section-blog">
    <div class="container">
        <div class="text-center">
            <h1 class="section-title-big">{{$blogarticle->titleBlog}}</h1>
            <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog</li>
        </ol>
        <div class="row">
            <div class="col-md-9">
                @foreach ($blogcontents as $blogcontent)
                    <div class="blog-post">
                        <a href="blog-post.html"><img class="img-carousel post-img"
                                src="{{ asset('img/' . $blogcontent->img) }}" alt=""></a>
                        <div class="post-content">
                            <h3><a class="post-title" href="blog-post.html">{{ $blogcontent->title }}</a></h3>
                            <p class="section-text">{{ $blogcontent->text }}</p>
                        </div><!-- /.post-content -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section><!-- /.section-blog -->
@endforeach