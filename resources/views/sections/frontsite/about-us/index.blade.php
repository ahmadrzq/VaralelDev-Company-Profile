<!--==========================
      About Us Section
    ============================-->
<section id="about">
    <div class="container">

        <header class="section-header">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

            @forelse ($abouts as $key => $abouts_item)
                <div class="col-md-4 wow fadeInUp"
                @if ($abouts_item->id == 1)

                @elseif ($abouts_item->id == 2)
                    data-wow-delay="0.1s"
                @else
                    data-wow-delay="0.2s"
                @endif>
                    <div class="about-col">
                        <div class="img">
                            <img src="img/about-plan.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">{{ $abouts_item->title ?? '' }}</a></h2>
                        <p>
                            {{ $abouts_item->description ?? '' }}
                        </p>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

    </div>
</section><!-- #about -->
