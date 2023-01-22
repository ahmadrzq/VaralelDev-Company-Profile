<!--==========================
      Featured Services Section
    ============================-->
<section id="featured-services">
    <div class="container">
        <div class="row">

            @forelse ($filter_services as $key => $filter_services_item)
                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h4 class="title"><a href="">{{ $filter_services_item->title ?? '' }}</a></h4>
                    <p class="description">{{ $filter_services_item->description ?? '' }}</p>
                </div>
            @empty
            
            @endforelse

        </div>
    </div>
</section><!-- #featured-services -->
