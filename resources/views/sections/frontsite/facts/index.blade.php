<!--==========================
      Facts Section
    ============================-->
<section id="facts" class="wow fadeIn">
    <div class="container">

        <header class="section-header">
            <h3>Facts</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

            @forelse ($facts as $key => $fact_item)
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">{{ $fact_item->value ?? ''}}</span>
                    <p>{{ $fact_item->name ?? ''}}</p>
                </div>
            @empty
            @endforelse

        </div>

        <div class="facts-img">
            <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

    </div>
</section><!-- #facts -->
