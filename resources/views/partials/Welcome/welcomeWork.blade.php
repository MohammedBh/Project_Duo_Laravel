@foreach ($homearticles as $homearticle)
<section class="site-section-small section-work-with-us yellow-bg text-center">
    <div class="container">
        <p class="section-title-small white-text mb-50">{{$homearticle->para3}}</p>
        <a class="btn" href="#">{{$homearticle->ahref2}}</a>
    </div>
</section><!-- /.section-work-with-us -->
@endforeach