@foreach ($homearticles as $homearticle)
<section class="site-section-small section-services">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title">{{$homearticle->titleBest}}</h3>
            <p class="section-text">{{$homearticle->para2}}</p>
        </div>
        <div class="row">
            @foreach ($homecontents as $homecontent)
            <div class="col-sm-5 col-sm-offset-1 col-xs-6" id="foreachContent">
                <div class="service">
                    <div class="service-icon">
                        <i class="{{ $homecontent->icon }}" aria-hidden="true"></i>
                    </div><!-- /.service-icon -->
                    <div class="service-content">
                        <h4 class="service-title">{{ $homecontent->title }}</h4>
                        <p>{{ $homecontent->text }}</p>
                    </div><!-- /.service-content -->
                </div><!-- /.service -->
            </div>
            @endforeach
        </div>
    </div>
</section><!-- /.section-services -->
@endforeach















<!-- <div class="service">
    <div class="service-icon">
        <i class="fa fa-wrench" aria-hidden="true"></i>
    </div>
    <div class="service-content">
        <h4 class="service-title">Customizable</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
    </div>
</div> -->