<section id="certificates" data-aos="fade-up" class="py-32 relative overflow-hidden">

    {{-- Decoration --}}
    <div class="absolute right-8 top-20 text-gray-200 text-5xl hidden xl:block">
        ::::<br>::::<br>::::
    </div>

    <div class="max-w-7xl mx-auto px-8">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <p class="uppercase tracking-[0.4em] text-[#a00000] font-semibold">
                Achievements
            </p>

            <h2 class="text-5xl md:text-6xl font-black mt-4">
                Certificates
            </h2>

            <p class="text-gray-500 max-w-2xl mx-auto mt-6 leading-8">
                Continuous learning is an important part of my journey.
                Here are some certificates that represent my skills and achievements.
            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Certificate --}}
            @for($i = 1; $i <= 6; $i++)

            <div class="group bg-white rounded-3xl overflow-hidden shadow hover:shadow-2xl transition duration-500">

                <div class="overflow-hidden">

                    <img src="{{ asset('images/certificates/certificate'.$i.'.jpg') }}"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">

                </div>

                <div class="p-6">

                    <span class="text-xs uppercase tracking-widest text-[#a00000] font-semibold">
                        Dicoding Indonesia
                    </span>

                    <h3 class="text-2xl font-bold mt-2">
                        Laravel Developer
                    </h3>

                    <p class="text-gray-500 mt-3 leading-7">
                        Successfully completed Laravel Developer learning path.
                    </p>

                    <div class="flex justify-between items-center mt-8">

                        <span class="text-sm text-gray-400">
                            2025
                        </span>

                        <a href="#"
                            class="font-semibold hover:text-[#a00000]">

                            View →

                        </a>

                    </div>

                </div>

            </div>

            @endfor

        </div>

        <div class="text-center mt-20">

            <a href="#"
                class="inline-flex items-center gap-3 border-2 border-black px-8 py-4 rounded-2xl font-semibold hover:bg-black hover:text-white transition">

                View All Certificates →

            </a>

        </div>

    </div>

</section>