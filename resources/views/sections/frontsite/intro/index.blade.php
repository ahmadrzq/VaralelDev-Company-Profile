<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @forelse ($intros as $key => $intro_item)
                    {{-- <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}"> --}}
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <div class="carousel-background"><img
                                src="{{ url(Storage::url($intro_item->photo)) ?? ''}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{ $intro_item->title ?? ''}}</h2>
                                <p>{{ $intro_item->description ?? ''}}</p>
                                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->
