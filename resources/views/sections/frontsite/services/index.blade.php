<!--==========================
      Services Section
    ============================-->
<section id="services">
    <div class="container">

        <header class="section-header wow fadeInUp">
            <h3>Services</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus,
                ad
                pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa
                panatarel.</p>
        </header>

        <div class="row">

            @forelse ($services as $key => $service_item)
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h4 class="title"><a href="">{{ $service_item->title ?? '' }}</a></h4>
                    <p class="description">{{ $service_item->description ?? '' }}</p>
                </div>
            @empty

            @endforelse

        </div>

    </div>
</section><!-- #services -->
