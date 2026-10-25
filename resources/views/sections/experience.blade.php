<section id="experience" class="pt-24 relative overflow-hidden" data-aos="fade-up">

    <div class="absolute left-[2%] top-20 w-72 h-80 hidden lg:block opacity-25 pointer-events-none select-none">
        <div
            class="absolute left-6 top-6 text-gray-300 text-7xl transform -rotate-12 hover:rotate-12 transition-transform duration-500">
            <i class="fas fa-plus"></i>
        </div>
        <div class="absolute left-24 top-4 text-gray-300 text-5xl handwriting font-bold select-none">
            7
        </div>
        <div class="absolute left-20 top-48 text-gray-300 text-5xl transform -rotate-45">
            <i class="fas fa-percentage"></i>
        </div>
        <svg class="absolute -left-4 top-4 w-64 h-64 text-gray-200" viewBox="0 0 200 200" fill="none"
            stroke="currentColor" stroke-width="1.5">
            <path d="M30,80 Q60,20 120,40 T170,120" stroke-linecap="round" stroke-dasharray="4 4" />
        </svg>
    </div>

    <div class="absolute right-[2%] top-20 w-72 h-80 hidden lg:block opacity-25 pointer-events-none select-none">
        <div
            class="absolute right-8 top-8 text-gray-300 text-7xl transform rotate-12 hover:-rotate-12 transition-transform duration-500">
            <i class="fas fa-times"></i>
        </div>
        <div class="absolute right-28 top-12 text-gray-300 text-4xl handwriting font-bold">
            3
        </div>
        <div class="absolute right-16 top-48 text-gray-300 text-5xl transform rotate-45">
            <i class="fas fa-equals"></i>
        </div>
        <svg class="absolute right-2 top-6 w-64 h-64 text-gray-200" viewBox="0 0 200 200" fill="none"
            stroke="currentColor" stroke-width="1.5">
            <path d="M170,40 Q120,160 70,120" stroke-linecap="round" stroke-dasharray="3 5" />
        </svg>
    </div>

    <div class="absolute left-[19%] top-[35%] w-48 h-48 hidden xl:block opacity-30 pointer-events-none select-none z-0">
        <div class="absolute left-0 top-0 text-gray-300 text-8xl transform rotate-12">
            <i class="fas fa-minus"></i>
        </div>
        <div class="absolute left-28 top-2 text-gray-300 text-4xl handwriting font-bold">
            x²
        </div>
        <div class="absolute left-20 top-20 text-gray-300 text-7xl transform -rotate-12">
            <i class="fas fa-square-root-alt"></i>
        </div>
    </div>

    <div
        class="absolute right-[19%] top-[40%] w-48 h-48 hidden xl:block opacity-30 pointer-events-none select-none z-0">
        <div class="absolute right-0 top-0 text-gray-300 text-8xl transform rotate-45">
            <i class="fas fa-divide"></i>
        </div>
        <div class="absolute right-24 top-6 text-gray-300 text-5xl handwriting font-bold">
            8
        </div>
        <div class="absolute right-20 top-24 text-gray-300 text-6xl transform -rotate-12">
            <i class="fas fa-infinity"></i>
        </div>
    </div>

    <div class="absolute left-[8%] bottom-12 w-72 h-48 hidden lg:block opacity-25 pointer-events-none select-none z-0">
        <div class="absolute left-4 bottom-12 text-gray-300 text-8xl transform -rotate-12">
            <span class="font-serif font-light text-gray-300 text-7xl">∫</span>
        </div>
        <div class="absolute left-16 bottom-28 text-gray-300 text-3xl handwriting font-bold">
            dx
        </div>
        <div class="absolute left-28 bottom-4 text-gray-300 text-6xl transform rotate-12">
            <span class="font-serif font-bold text-gray-300 text-6xl">π</span>
        </div>
    </div>

    <div class="absolute right-[8%] bottom-12 w-72 h-48 hidden lg:block opacity-25 pointer-events-none select-none z-0">
        <div class="absolute right-4 bottom-16 text-gray-300 text-7xl transform rotate-12">
            <span class="font-sans font-semibold text-gray-300 text-7xl">∑</span>
        </div>
        <div class="absolute right-16 bottom-32 text-gray-300 text-4xl handwriting font-bold">
            n
        </div>
        <div class="absolute right-28 bottom-4 text-gray-300 text-6xl transform -rotate-45">
            <i class="fas fa-not-equal"></i>
        </div>
        <div class="absolute right-44 bottom-12 text-gray-300 text-5xl handwriting font-bold">
            2
        </div>
    </div>

    <div class="absolute left-8 top-[50%] text-gray-150 text-5xl hidden xl:block opacity-10">
        ::::<br>::::<br>::::
    </div>

    <div class="absolute right-12 bottom-20 w-40 h-40 opacity-[0.05] hidden xl:block"
        style="background: repeating-linear-gradient(45deg, transparent, transparent 8px, #000 8px, #000 10px);">
    </div>

    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-6">
                <svg class="w-20 h-6 text-[#a00000] opacity-40" viewBox="0 0 100 20" fill="none">
                    <path d="M98 10 C70 2,40 18,2 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
                </svg>

                <h2 class="handwriting text-6xl md:text-7xl text-[#a00000]">
                    Experience
                </h2>

                <svg class="w-20 h-6 text-[#a00000] opacity-40 scale-x-[-1]" viewBox="0 0 100 20" fill="none">
                    <path d="M98 10 C70 2,40 18,2 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
                </svg>
            </div>
        </div>

        @php
            $experiences = [
                [
                    'year' => '2025',
                    'title' => 'PROVOKS UB',
                    'subtitle' => 'Staff Sekertaris',
                    'image' => 'experience/Provoks.jpg',
                ],
                [
                    'year' => '2024',
                    'title' => 'KOMAKU',
                    'subtitle' => 'Staff Infokom',
                    'image' => 'experience/KOMAKU.jpeg',
                ],
                [
                    'year' => '2024',
                    'title' => 'KMNU',
                    'subtitle' => 'Staff Media & Relation',
                    'image' => 'experience/KMNU.jpeg',
                ],
                [
                    'year' => '2025',
                    'title' => 'Olivia X UB',
                    'subtitle' => 'Participant',
                    'image' => 'experience/Olivia X UB.jpg',
                ],
                [
                    'year' => '2026',
                    'title' => 'Olivia XI Unesa',
                    'subtitle' => 'Participant',
                    'image' => 'experience/Olivia XI Unesa.jpeg',
                ],
                [
                    'year' => '2026',
                    'title' => 'PKM',
                    'subtitle' => 'Participant',
                    'image' => 'experience/PKM.jpeg',
                ],
            ];
        @endphp

        <div class="relative">
            <div class="hidden lg:block absolute top-36 left-28 right-28">
                <div class="border-t-2 border-dashed border-gray-300"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-16 relative z-10">
                @for ($i = 0; $i < count($experiences); $i++)
                    @php
                        $position = match ($i) {
                            0 => 'lg:col-start-1 lg:mt-0',
                            1 => 'lg:col-start-4 lg:mt-6',
                            2 => 'lg:col-start-2 lg:col-span-2 lg:flex lg:justify-center lg:-mt-16',
                            3 => 'lg:col-start-2 lg:-mt-6',
                            4 => 'lg:col-start-3 lg:mt-2',
                            5 => 'lg:col-start-2 lg:col-span-2 lg:flex lg:justify-center lg:-mt-8',
                            6 => 'lg:col-start-1 lg:-mt-10',
                            7 => 'lg:col-start-4 lg:-mt-4',
                        };

                        $rotate = match ($i) {
                            0 => '-rotate-2',
                            1 => 'rotate-2',
                            2 => '-rotate-1',
                            3 => 'rotate-1',
                            4 => '-rotate-1',
                            5 => 'rotate-1',
                            6 => 'rotate-2',
                            7 => '-rotate-2',
                        };
                    @endphp

                    <div class="{{ $position }} flex justify-center" data-aos="zoom-in">
                        <div
                            class="group w-60 {{ $rotate }} transition duration-500 hover:rotate-0 hover:-translate-y-4">
                            <div class="hidden lg:flex justify-center mb-3">
                                <div class="w-5 h-5 rounded-full bg-[#a00000] border-4 border-white shadow-lg"></div>
                            </div>

                            {{-- Image --}}
                            <div class="relative overflow-hidden rounded-2xl shadow-xl">
                                <img src="{{ asset($experiences[$i]['image']) }}" alt="{{ $experiences[$i]['title'] }}"
                                    class="h-40 w-full object-cover transition duration-500 group-hover:scale-110">
                                {{-- Year --}}
                                <div
                                    class="absolute top-3 left-3 bg-[#a00000] text-white px-4 py-1 rounded-full text-xs font-bold">
                                    {{ $experiences[$i]['year'] }}
                                </div>
                            </div>

                            {{-- Text --}}
                            <div class="text-center mt-5">
                                <h3 class="handwriting text-4xl text-[#a00000] leading-none">
                                    {{ $experiences[$i]['title'] }}
                                </h3>
                                <p class="uppercase tracking-[0.25em] text-xs text-gray-500 mt-3">
                                    {{ $experiences[$i]['subtitle'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
