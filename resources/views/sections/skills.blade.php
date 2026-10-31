<section id="skills" x-data="{ active: 'all' }" data-aos="fade-up" class="pt-24 relative overflow-hidden">

    <div class="absolute left-[2%] top-10 w-72 h-72 hidden lg:block opacity-25 pointer-events-none select-none">
        <div
            class="absolute left-4 top-4 text-gray-300 text-7xl transform -rotate-12 hover:rotate-12 transition-transform duration-500">
            <i class="fas fa-plus"></i>
        </div>
        <div class="absolute left-24 top-6 text-gray-300 text-5xl handwriting font-bold">
            7
        </div>
        <div class="absolute left-16 top-36 text-gray-300 text-5xl transform -rotate-45">
            <i class="fas fa-percentage"></i>
        </div>
        <svg class="absolute -left-6 -top-6 w-64 h-64 text-gray-200" viewBox="0 0 200 200" fill="none"
            stroke="currentColor" stroke-width="1.5">
            <path d="M100,20 C40,20 20,60 20,100 C20,150 70,180 120,170" stroke-linecap="round"
                stroke-dasharray="3 3" />
        </svg>
    </div>

    <div class="absolute right-[3%] top-10 w-80 h-72 hidden lg:block opacity-25 pointer-events-none select-none">
        <div
            class="absolute right-6 top-6 text-gray-300 text-7xl transform rotate-12 hover:-rotate-12 transition-transform duration-500">
            <i class="fas fa-times"></i>
        </div>
        <div class="absolute right-28 top-8 text-gray-300 text-4xl handwriting font-bold">
            3
        </div>
        <div class="absolute right-16 top-36 text-gray-300 text-5xl transform rotate-45">
            <i class="fas fa-equals"></i>
        </div>
        <svg class="absolute right-16 top-12 w-72 h-48 text-gray-300" viewBox="0 0 200 100" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-dasharray="5 5">
            <path d="M10,80 Q40,20 90,50 T140,20" stroke-linecap="round" />
        </svg>
    </div>

    <div class="absolute left-[18%] top-[22%] w-48 h-32 hidden xl:block opacity-30 pointer-events-none select-none z-0">
        <div class="absolute left-0 top-0 text-gray-300 text-8xl transform rotate-12">
            <i class="fas fa-minus"></i>
        </div>
        <div class="absolute left-24 top-2 text-gray-300 text-4xl handwriting font-bold">
            x²
        </div>
        <div class="absolute left-16 top-16 text-gray-300 text-7xl transform -rotate-12">
            <i class="fas fa-square-root-alt"></i>
        </div>
    </div>

    <div
        class="absolute right-[18%] top-[24%] w-48 h-32 hidden xl:block opacity-30 pointer-events-none select-none z-0">
        <div class="absolute right-0 top-0 text-gray-300 text-8xl transform rotate-45">
            <i class="fas fa-divide"></i>
        </div>
        <div class="absolute right-24 top-4 text-gray-300 text-5xl handwriting font-bold">
            8
        </div>
        <div class="absolute right-20 top-20 text-gray-300 text-6xl transform -rotate-12">
            <i class="fas fa-infinity"></i>
        </div>
    </div>

    <div class="absolute left-[6%] bottom-10 w-72 h-48 hidden lg:block opacity-25 pointer-events-none select-none z-0">
        <div class="absolute left-2 bottom-16 text-gray-300 text-8xl transform -rotate-12">
            <span class="font-serif font-light text-gray-300 text-7xl">∫</span>
        </div>
        <div class="absolute left-14 bottom-28 text-gray-300 text-3xl handwriting font-bold">
            dx
        </div>
        <div class="absolute left-24 bottom-6 text-gray-300 text-6xl transform rotate-12">
            <span class="font-serif font-bold text-gray-300 text-6xl">π</span>
        </div>
    </div>

    <div class="absolute right-[6%] bottom-10 w-72 h-48 hidden lg:block opacity-25 pointer-events-none select-none z-0">
        <div class="absolute right-4 bottom-20 text-gray-300 text-7xl transform rotate-12">
            <span class="font-sans font-semibold text-gray-300 text-7xl">∑</span>
        </div>
        <div class="absolute right-16 bottom-32 text-gray-300 text-4xl handwriting font-bold">
            n
        </div>
        <div class="absolute right-24 bottom-6 text-gray-300 text-6xl transform -rotate-45">
            <i class="fas fa-not-equal"></i>
        </div>
        <div class="absolute right-40 bottom-16 text-gray-300 text-5xl handwriting font-bold">
            2
        </div>
    </div>

    <div class="absolute left-8 top-44 text-gray-150 text-5xl hidden xl:block opacity-10">
        ::::<br>::::<br>::::
    </div>
    <div class="absolute right-8 bottom-16 w-36 h-36 opacity-[0.05] hidden xl:block"
        style="background: repeating-linear-gradient(45deg, transparent, transparent 8px, #000 8px, #000 10px);">
    </div>

    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="text-center mb-12 relative max-w-md mx-auto">
            <h2 class="handwriting text-6xl md:text-7xl text-[#a00000] relative inline-block">
                Skills
                <svg class="absolute -bottom-4 left-0 w-full h-4 text-[#a00000] opacity-40" viewBox="0 0 100 10"
                    preserveAspectRatio="none">
                    <path d="M0,5 Q50,10 100,5 M5,7 Q50,2 95,6" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </h2>
            <div
                class="absolute -left-12 bottom-0 text-gray-300 text-3xl transform rotate-45 hidden md:block opacity-40">
                <i class="fas fa-long-arrow-alt-down"></i>
            </div>
            <div
                class="absolute -right-12 bottom-0 text-gray-300 text-3xl transform rotate-[-40deg] hidden md:block opacity-40">
                <i class="fas fa-long-arrow-alt-down"></i>
            </div>
        </div>

        @php
            $preferred = ['web', 'ai', 'iot', 'mobile', 'tools', 'gaming'];
            $labels = [
                'web' => 'Web',
                'ai' => 'AI',
                'iot' => 'IoT',
                'mobile' => 'Mobile',
                'tools' => 'Tools',
                'gaming' => 'Gaming',
            ];
            $categories = $skills->pluck('category')->unique()->sortBy(function ($category) use ($preferred) {
                $index = array_search($category, $preferred, true);

                return $index === false ? 100 : $index;
            })->values();
        @endphp

        <div class="flex justify-center mb-10">
            <div class="inline-flex bg-white rounded-full shadow-md border p-1 flex-wrap">
                <button @click="active='all'" :class="active == 'all' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition">
                    All
                </button>
                @foreach ($categories as $category)
                    <button type="button" @click='active = @json($category)'
                        :class='active == @json($category) ? "bg-[#a00000] text-white" : "text-gray-600"'
                        class="px-6 py-3 rounded-full font-semibold transition">
                        {{ $labels[$category] ?? ucfirst($category) }}
                    </button>
                @endforeach
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-10 min-h-42.5">
            @foreach ($skills as $skill)
                <div x-show='active == "all" || active == @json($skill->category)'
                    x-transition.opacity.scale.duration.300ms class="group flex flex-col items-center">
                    <div
                        class="w-30 h-30 rounded-full bg-white border border-gray-200 shadow-md flex items-center justify-center transition-all duration-500 hover:-translate-y-3 hover:scale-110 hover:border-[#a00000] hover:shadow-xl">
                        @if ($skill->usesImage() && $skill->iconUrl())
                            <img src="{{ $skill->iconUrl() }}" alt="{{ $skill->name }}"
                                class="w-20 h-20 object-contain grayscale group-hover:grayscale-0 transition-all duration-500" loading="lazy" decoding="async">
                        @elseif ($skill->icon)
                            <i
                                class="{{ $skill->icon }} text-7xl text-gray-700 group-hover:text-[#a00000] transition-all duration-500"></i>
                        @else
                            <span class="text-3xl font-bold text-gray-700">{{ \Illuminate\Support\Str::of($skill->name)->substr(0, 1) }}</span>
                        @endif
                    </div>
                    <p
                        class="mt-3 h-5 text-sm font-semibold text-[#a00000] opacity-0 group-hover:opacity-100 transition-all duration-300">
                        {{ $skill->name }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
