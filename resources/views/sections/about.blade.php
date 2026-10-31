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
            <img src="{{ $setting->photoUrl() }}" alt="{{ $setting->owner_name }}" class="hero-portrait">
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
