@foreach ($homearticles as $homearticle)
<section class="section-we-are-creative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <img class="img-carousel" src="{{asset('img/'.$homearticle->img)}}" alt="We are creative">
            </div>
            <div class="col-sm-6 project yellow-bg">
                <div class="project-content">
                    <h3 class="section-title">{{$homearticle->titleCreative}}</h3>
                    <p class="small-title mb-30">{{$homearticle->para1}}</p>
                    <a href="#" class="white-text">{{$homearticle->ahref1}}</a>
                </div> <!-- /.project-content-->
            </div>
        </div>
    </div>
</section><!-- /.section-we-are-creative -->
@endforeach