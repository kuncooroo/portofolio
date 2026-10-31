<section id="certificates" class="relative overflow-hidden pt-24 pb-28" data-aos="fade-up">
    <div class="absolute left-[2%] top-20 hidden h-80 w-72 select-none opacity-25 pointer-events-none lg:block">
        <div
            class="absolute left-6 top-6 transform text-7xl text-gray-300 transition-transform duration-500 -rotate-12 hover:rotate-12">
            <i class="fas fa-plus"></i>
        </div>
        <div class="handwriting absolute left-24 top-4 text-5xl font-bold text-gray-300">
            7
        </div>
        <div class="absolute left-20 top-48 transform text-5xl -rotate-45">
            <i class="fas fa-percentage"></i>
        </div>
        <svg class="absolute -left-4 top-4 h-64 w-64 text-gray-200" viewBox="0 0 200 200" fill="none"
            stroke="currentColor" stroke-width="1.5">
            <path d="M30,80 Q60,20 120,40 T170,120" stroke-linecap="round" stroke-dasharray="4 4" />
        </svg>
    </div>

    <div class="absolute right-[2%] top-20 hidden h-80 w-72 select-none opacity-25 pointer-events-none lg:block">
        <div
            class="absolute right-8 top-8 transform text-7xl text-gray-300 transition-transform duration-500 rotate-12 hover:-rotate-12">
            <i class="fas fa-times"></i>
        </div>
        <div class="handwriting absolute right-28 top-12 text-4xl font-bold text-gray-300">
            3
        </div>
        <div class="absolute right-16 top-48 transform text-5xl rotate-45">
            <i class="fas fa-equals"></i>
        </div>
        <svg class="absolute right-2 top-6 h-64 w-64 text-gray-200" viewBox="0 0 200 200" fill="none"
            stroke="currentColor" stroke-width="1.5">
            <path d="M170,40 Q120,160 70,120" stroke-linecap="round" stroke-dasharray="3 5" />
        </svg>
    </div>

    <div class="absolute left-[19%] top-[35%] z-0 hidden h-48 w-48 select-none opacity-30 pointer-events-none xl:block">
        <div class="absolute left-0 top-0 transform text-8xl text-gray-300 rotate-12">
            <i class="fas fa-minus"></i>
        </div>
        <div class="handwriting absolute left-28 top-2 text-4xl font-bold text-gray-300">
            x²
        </div>
        <div class="absolute left-20 top-20 transform text-7xl text-gray-300 -rotate-12">
            <i class="fas fa-square-root-alt"></i>
        </div>
    </div>

    <div
        class="absolute right-[19%] top-[40%] z-0 hidden h-48 w-48 select-none opacity-30 pointer-events-none xl:block">
        <div class="absolute right-0 top-0 transform text-8xl text-gray-300 rotate-45">
            <i class="fas fa-divide"></i>
        </div>
        <div class="handwriting absolute right-24 top-6 text-5xl font-bold text-gray-300">
            8
        </div>
        <div class="absolute right-20 top-24 transform text-6xl text-gray-300 -rotate-12">
            <i class="fas fa-infinity"></i>
        </div>
    </div>

    <div class="absolute left-[8%] bottom-12 z-0 hidden h-48 w-72 select-none opacity-25 pointer-events-none lg:block">
        <div class="absolute left-4 bottom-12 transform text-8xl text-gray-300 -rotate-12">
            <span class="font-serif text-7xl font-light text-gray-300">∫</span>
        </div>
        <div class="handwriting absolute left-16 bottom-28 text-3xl font-bold text-gray-300">
            dx
        </div>
        <div class="absolute left-28 bottom-4 transform text-6xl rotate-12">
            <span class="font-serif text-6xl font-bold text-gray-300">π</span>
        </div>
    </div>

    <div class="absolute right-[8%] bottom-12 z-0 hidden h-48 w-72 select-none opacity-25 pointer-events-none lg:block">
        <div class="absolute right-4 bottom-16 transform text-7xl text-gray-300 rotate-12">
            <span class="font-sans text-7xl font-semibold text-gray-300">∑</span>
        </div>
        <div class="handwriting absolute right-16 bottom-32 text-4xl font-bold text-gray-300">
            n
        </div>
        <div class="absolute right-28 bottom-4 transform text-6xl -rotate-45">
            <i class="fas fa-not-equal"></i>
        </div>
        <div class="handwriting absolute right-44 bottom-12 text-5xl font-bold text-gray-300">
            2
        </div>
    </div>

    <div class="absolute left-10 top-24 hidden text-5xl text-gray-200 opacity-10 xl:block">
        ::::<br>::::<br>::::
    </div>

    <div class="absolute right-12 bottom-20 hidden h-40 w-40 opacity-[0.05] xl:block"
        style="background: repeating-linear-gradient(45deg, transparent, transparent 8px, #000 8px, #000 10px);">
    </div>

    <div class="max-w-7xl relative z-10 mx-auto px-8">
        <div class="mb-20 text-center">
            <div class="relative inline-block">
                <svg class="w-107.5 h-45 absolute -left-12 -top-8 -z-10 text-[#a00000] opacity-30" viewBox="0 0 430 180"
                    fill="none">
                    <path
                        d="M42 40 C55 20,355 18,385 38 C405 55,402 130,380 145 C360 160,72 165,45 145 C20 128,18 58,42 40"
                        stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M48 46 C65 30,350 28,376 46 C392 60,390 122,372 136 C352 150,76 154,52 138 C30 122,28 66,48 46"
                        stroke="currentColor" stroke-width="1.6" opacity=".55" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <h2 class="handwriting relative z-10 text-6xl text-[#a00000] md:text-7xl">
                    Certificates
                </h2>
            </div>
        </div>

        <div class="relative">
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($certificates as $certificate)
                    <div class="group" data-aos="zoom-in">
                        <div class="flip-card w-56">
                            <div class="flip-inner">
                                <div class="flip-face">
                                    <div class="relative overflow-hidden rounded-2xl shadow-lg">
                                        <div class="absolute left-3 top-3 z-10 rounded-full bg-[#a00000] px-3 py-1 text-xs font-semibold text-white">
                                            {{ $certificate->year }}
                                        </div>
                                        @if ($certificate->imageUrl())
                                            <img src="{{ $certificate->imageUrl() }}" alt="{{ $certificate->title }}" class="h-40 w-full object-cover" loading="lazy" decoding="async">
                                        @else
                                            <div class="flex h-40 w-full items-center justify-center bg-gray-100 text-sm text-gray-400">No image</div>
                                        @endif
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h3 class="handwriting text-3xl leading-none text-[#a00000]">{{ $certificate->title }}</h3>
                                        <p class="mt-2 text-[10px] uppercase tracking-[0.25em] text-gray-500">{{ $certificate->issuer }}</p>
                                    </div>
                                </div>
                                <div class="flip-face flip-back">
                                    <h3 class="handwriting text-2xl leading-none text-[#a00000]">{{ $certificate->title }}</h3>
                                    <p class="text-sm leading-relaxed text-[#111]">{{ $certificate->description ?: 'Deskripsi lengkap belum diisi.' }}</p>
                                    @if ($certificate->credential_url)
                                        <a href="{{ $certificate->credential_url }}" target="_blank" rel="noopener noreferrer" class="text-xs font-semibold text-[#a00000]">View credential</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
