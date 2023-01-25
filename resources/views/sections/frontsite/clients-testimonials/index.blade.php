<!--==========================
      Clients Section
    ============================-->
<section id="testimonials" class="section-bg wow fadeInUp">
    <div class="container">

        <header class="section-header">
            <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

            @forelse ($clients as $key => $client_item)
                <div class="testimonial-item">
                    <img src="{{ url(Storage::url($client_item->photo)) ?? '' }}" class="testimonial-img" alt="">
                    <h3>{{ $client_item->name ?? '' }}</h3>
                    <h4>{{ $client_item->position ?? '' }}</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        {{ $client_item->message ?? '' }}
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>
            @empty
            @endforelse

        </div>

    </div>
</section><!-- #testimonials -->
