@foreach ($contactarticles as $contactarticle)
<div class="hero hero-max-720 hero-contact background-overlay">
    <div class="hero-text">
        <h1 class="white-text">{{$contactarticle->titleContact}}</h1>
    </div><!-- /.hero-text -->
    <div class="hero-arrow">
        <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div><!-- /.hero-arrow -->
</div><!-- /.hero -->
    @endforeach