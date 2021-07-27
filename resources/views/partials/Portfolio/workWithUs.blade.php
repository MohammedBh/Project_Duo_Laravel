@foreach ($portfolioarticles as $portfolioarticle)
<section class="site-section-small section-work-with-us yellow-bg text-center">
    <div class="container">
        <p class="section-title-small white-text mb-50">{{$portfolioarticle->para1}}</p>
        <a class="btn" href="#">{{$portfolioarticle->ahref1}}</a>
    </div>
</section>
@endforeach