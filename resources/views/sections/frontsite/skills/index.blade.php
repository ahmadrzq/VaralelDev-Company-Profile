<!--==========================
      Skills Section
    ============================-->
<section id="skills">
    <div class="container">

        <header class="section-header">
            <h3>Our Skills</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            </p>
        </header>

        <div class="skills-content">

            @forelse ($skills as $key => $skill_item)
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$skill_item->value ?? ''}}" aria-valuemin="0"
                        aria-valuemax="100">
                        <span class="skill">{{$skill_item->name ?? ''}} <i class="val">{{$skill_item->value ?? ''}}%</i></span>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

    </div>
</section>
