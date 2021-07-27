@foreach ($contactarticles as $contactarticle)
<section class="section-contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 yellow-bg">
                <div class="site-section-small">
                    <div class="get-in-touch">
                        <h2 class="section-title">{{$contactarticle->titleTouch}}</h2>
                        <p class="small-title mb-50">{{$contactarticle->para1}}</p>
                        <ul class="list-unstyled mb-0">
                            <li>{{$contactarticle->namePara}}</li>
                            <li>Phone: <a class="gray-text" href="tel:+15417543010">{{$contactarticle->phoneNumber}}</a></li>
                            <li>Fax: <a class="gray-text" href="tel:+15417543010">{{$contactarticle->faxNumber}}</a></li>
                            <li><a class="white-text"
                            href="mailto:hello@businessperfect.com">{{$contactarticle->email}}</a></li>
                        </ul>
                    </div><!-- /.get-in-touch -->
                </div>
            </div>
            <div class="col-md-7">
                <div class="site-section-small">
                    <form class="form-horizontal contact-form text-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="contact-name" placeholder="Name *"
                                required>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="email" name="contact-email" placeholder="E-mail *"
                                required>
                            </div>
                        </div>
                        <input class="form-control" type="text" name="contact-subject" placeholder="Subject">
                        <textarea class="form-control" placeholder="Message *" required></textarea>
                        <button class="btn btn-yellow">Submit</button>
                    </form><!-- /.contact-form -->
                </div>
            </div>
        </div>
    </div>
</section><!-- /.section-contact-us -->
@endforeach