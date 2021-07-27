@foreach ($portfolioarticles as $portfolioarticle)
<section class="site-section-small portfolio">
    <div class="container">
        <h1 class="section-title-big text-center">{{$portfolioarticle->titlePortfolio}}</h1>
    </div>
    <div class="container-fluid">
        <div class="row" id="grid">
            @foreach ($portfolios as $portfolio)
                <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["illustrations"]'>
                    <a class="portfolio-link" href="#">
                        <img src="{{ asset('img/' . $portfolio->img) }}" alt="" class="img-carousel">
                        <div class="portfolio-info">
                            <div class="portfolio-info-top">
                                <h3>{{ $portfolio->title }}</h3>
                            </div><!-- /.portfolio-info-top -->
                            <div class="portfolio-info-bottom">
                                <p>{{ $portfolio->text }}</p>
                            </div><!-- /.portfolio-info-bottom -->
                        </div><!-- /.portfolio-info  -->
                    </a>
                </div><!-- /.col-lg-fifth  -->
            @endforeach
        </div><!-- /#grid -->
    </div>
</section><!-- /.portfolio -->
@endforeach