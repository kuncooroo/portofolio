<section id="about" class="hero-stage">
    @php
    $bioPlain = trim(preg_replace('/\s+/', ' ', strip_tags((string) $setting->bio)));
    $roles = collect(preg_split('/\s*[•|]\s*/', (string) $setting->roles) ?: [])
    ->map(fn ($role) => trim($role))
    ->filter()
    ->values();
    @endphp

    <div class="hero-doodles" aria-hidden="true">
        <span class="hero-doodle hero-doodle-a">issue 01</span>
        <span class="hero-doodle hero-doodle-b">{{ $setting->caption_secondary }}</span>
        <span class="hero-doodle hero-doodle-c">read on</span>
    </div>

    <div class="hero-sheet">
        <aside class="hero-col hero-col-left">
            <p class="hero-kicker">a little profile</p>
            <h1>{{ $setting->owner_name }}</h1>
            <p class="hero-lead">{{ $bioPlain }}</p>
        </aside>

        @if ($setting->photoUrl())
        <div class="hero-portrait-wrap">
            <img src="{{ $setting->photoUrl() }}" alt="{{ $setting->owner_name }}" class="hero-portrait" fetchpriority="high" decoding="async">
            @if ($setting->cvUrl())
            <a href="{{ $setting->cvUrl() }}" class="hero-cv" download>
                <svg class="hero-cv-arrow" viewBox="0 0 90 70" aria-hidden="true">
                    <path d="M8 58C30 60 38 22 78 16" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/>
                    <path d="M62 6l18 10-16 12" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>unduh cv</span>
            </a>
            @endif
        </div>
        @endif

        <aside class="hero-col hero-col-right">
            <p class="hero-kicker">in this issue</p>
            <ul class="hero-roles">
                @foreach ($roles as $role)
                <li>{{ \Illuminate\Support\Str::lower($role) }}</li>
                @endforeach
            </ul>
            <p class="hero-note">{{ $setting->caption_primary }}</p>
            <p class="hero-sign">let's build</p>
        </aside>
    </div>

</section>