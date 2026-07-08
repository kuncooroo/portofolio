<section id="projects" data-aos="zoom-in-up" class="py-32 bg-gray-50 relative overflow-hidden">

    {{-- Decoration --}}
    <div class="absolute left-8 top-20 text-gray-200 text-5xl hidden xl:block">
        ::::<br>::::<br>::::
    </div>

    <div class="max-w-7xl mx-auto px-8">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <p class="uppercase tracking-[0.4em] text-[#a00000] font-semibold">
                Portfolio
            </p>

            <h2 class="text-5xl md:text-6xl font-black mt-4">
                Featured Projects
            </h2>

            <p class="text-gray-500 mt-6 max-w-2xl mx-auto leading-8">
                Here are some selected projects that showcase my experience in
                web development, UI design, and problem solving.
            </p>

        </div>

        {{-- Projects --}}
        <div class="space-y-20">

            {{-- Project 1 --}}
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <div>
                    <img src="{{ asset('images/projects/project1.jpg') }}"
                        class="rounded-3xl shadow-xl w-full"
                        alt="">
                </div>

                <div>

                    <span class="uppercase tracking-widest text-sm text-[#a00000] font-semibold">
                        Laravel • Tailwind CSS
                    </span>

                    <h3 class="text-4xl font-black mt-4">
                        School Information System
                    </h3>

                    <p class="text-gray-500 mt-6 leading-8">
                        A modern school management system that manages students,
                        teachers, attendance, grades, schedules and academic reports
                        using Laravel.
                    </p>

                    <div class="flex gap-3 flex-wrap mt-8">

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Laravel
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            MySQL
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Tailwind CSS
                        </span>

                    </div>

                    <div class="mt-10 flex gap-4">

                        <a href="#"
                            class="bg-black text-white px-6 py-3 rounded-xl">

                            Live Demo ↗

                        </a>

                        <a href="#"
                            class="border px-6 py-3 rounded-xl">

                            Github

                        </a>

                    </div>

                </div>

            </div>

            {{-- Project 2 --}}
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <div class="order-2 lg:order-1">

                    <span class="uppercase tracking-widest text-sm text-[#a00000] font-semibold">
                        Laravel • Bootstrap
                    </span>

                    <h3 class="text-4xl font-black mt-4">
                        E-Commerce Website
                    </h3>

                    <p class="text-gray-500 mt-6 leading-8">
                        Online shopping platform equipped with shopping cart,
                        Midtrans payment gateway, product management and admin dashboard.
                    </p>

                    <div class="flex gap-3 flex-wrap mt-8">

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Laravel
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Midtrans
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Bootstrap
                        </span>

                    </div>

                    <div class="mt-10 flex gap-4">

                        <a href="#"
                            class="bg-black text-white px-6 py-3 rounded-xl">

                            Live Demo ↗

                        </a>

                        <a href="#"
                            class="border px-6 py-3 rounded-xl">

                            Github

                        </a>

                    </div>

                </div>

                <div class="order-1 lg:order-2">

                    <img src="{{ asset('images/projects/project2.jpg') }}"
                        class="rounded-3xl shadow-xl w-full"
                        alt="">

                </div>

            </div>

            {{-- Project 3 --}}
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <div>

                    <img src="{{ asset('images/projects/project3.jpg') }}"
                        class="rounded-3xl shadow-xl w-full"
                        alt="">

                </div>

                <div>

                    <span class="uppercase tracking-widest text-sm text-[#a00000] font-semibold">
                        UI Design
                    </span>

                    <h3 class="text-4xl font-black mt-4">
                        Modern Portfolio Website
                    </h3>

                    <p class="text-gray-500 mt-6 leading-8">
                        Personal portfolio with minimal style, responsive layout,
                        smooth scrolling and modern user experience.
                    </p>

                    <div class="flex gap-3 flex-wrap mt-8">

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Figma
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Tailwind CSS
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white border">
                            Laravel
                        </span>

                    </div>

                    <div class="mt-10 flex gap-4">

                        <a href="#"
                            class="bg-black text-white px-6 py-3 rounded-xl">

                            Live Demo ↗

                        </a>

                        <a href="#"
                            class="border px-6 py-3 rounded-xl">

                            Github

                        </a>

                    </div>

                </div>

            </div>

        </div>

        {{-- Button --}}
        <div class="text-center mt-20">

            <a href="#"
                class="inline-flex items-center gap-3 border-2 border-black px-8 py-4 rounded-2xl font-semibold hover:bg-black hover:text-white transition">

                View All Projects →

            </a>

        </div>

    </div>

</section>