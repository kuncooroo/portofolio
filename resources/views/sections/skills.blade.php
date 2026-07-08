<section id="skills" x-data="{ active: 'all' }" data-aos="fade-up" class="pt-24 relative overflow-hidden">
    <div class="absolute left-8 top-16 text-gray-200 text-5xl hidden xl:block">
        ::::<br>::::<br>::::
    </div>
    <div class="absolute right-8 bottom-16 w-36 h-36 opacity-20 hidden xl:block"
        style="background: repeating-linear-gradient(45deg, transparent, transparent 8px, #000 8px, #000 10px);">
    </div>
    <div class="max-w-7xl mx-auto px-8">
        <div class="text-center mb-8">
            <h2 class="handwriting text-6xl md:text-7xl text-[#a00000]">
                Skills
            </h2>
        </div>
        @php
            $skills = [
                ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'category' => 'web'],
                ['name' => 'PHP', 'icon' => 'fab fa-php', 'category' => 'web'],
                ['name' => 'MySQL', 'icon' => 'fas fa-database', 'category' => 'web'],
                ['name' => 'HTML5', 'icon' => 'fab fa-html5', 'category' => 'web'],
                ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt', 'category' => 'web'],
                ['name' => 'JavaScript', 'icon' => 'fab fa-js', 'category' => 'web'],
                ['name' => 'Tailwind CSS', 'icon' => 'fas fa-wind', 'category' => 'web'],
                ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap', 'category' => 'web'],
                ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'category' => 'tools'],
                ['name' => 'GitHub', 'icon' => 'fab fa-github', 'category' => 'tools'],
                ['name' => 'Figma', 'icon' => 'fab fa-figma', 'category' => 'tools'],
                ['name' => 'VS Code', 'icon' => 'fas fa-code', 'category' => 'tools'],
                ['name' => 'Android', 'icon' => 'fa-brands fa-android', 'category' => 'mobile'],
                ['name' => 'Flutter', 'icon' => 'fa-solid fa-mobile-screen-button', 'category' => 'mobile'],
                ['name' => 'Dart', 'icon' => 'fa-solid fa-mobile', 'category' => 'mobile'],
                ['name' => 'IMO 370', 'icon' => 'fas fa-gamepad', 'category' => 'gaming'],
            ];
        @endphp
        <div class="flex justify-center mb-10">
            <div class="inline-flex bg-white rounded-full shadow-md border p-1">
                <button @click="active='all'" :class="active == 'all' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">
                    All
                </button>
                <button @click="active='web'" :class="active == 'web' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">
                    Web
                </button>
                <button @click="active='tools'" :class="active == 'tools' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">
                    Tools
                </button>
                <button @click="active='mobile'"
                    :class="active == 'mobile' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">
                    Mobile
                </button>
                <button @click="active='gaming'"
                    :class="active == 'gaming' ? 'bg-[#a00000] text-white' : 'text-gray-600'"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">
                    Gaming
                </button>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-10 min-h-42.5">
            @foreach ($skills as $skill)
                <div x-show="active == 'all' || active == '{{ $skill['category'] }}'"
                    x-transition.opacity.scale.duration.300ms class="group flex flex-col items-center">
                    <div
                        class="w-28 h-28 rounded-full bg-white border border-gray-200 shadow-sm flex items-center justify-center transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:border-[#a00000] hover:shadow-2xl">
                        <i
                            class="{{ $skill['icon'] }} text-6xl text-gray-700 group-hover:text-[#a00000] transition duration-300"></i>
                    </div>
                    <p
                        class="mt-3 h-5 text-sm font-semibold text-[#a00000] opacity-0 group-hover:opacity-100 transition-all duration-300">
                        {{ $skill['name'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
