@foreach ($homearticles as $homearticle)
<div class="hero background-overlay">
    <div class="hero-text">
        <h1>{{$homearticle->titleHome}}</h1>
    </div>
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div>
</div>
@endforeach