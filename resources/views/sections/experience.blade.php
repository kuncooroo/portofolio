<section id="experience" class="py-24 relative overflow-hidden" data-aos="fade-up">
  <div class="absolute left-8 top-16 text-gray-200 text-5xl hidden xl:block">
    ::::<br>::::<br>::::
  </div>
  <div class="absolute right-8 bottom-16 w-36 h-36 opacity-20 hidden xl:block"
    style="background: repeating-linear-gradient(45deg, transparent, transparent 8px, #000 8px, #000 10px);">
  </div>
  <div class="max-w-7xl mx-auto px-8">
    <div class="text-center mb-20">
      <h2 class="handwriting text-6xl md:text-7xl text-[#a00000]">
        Experience
      </h2>
      <p class="mt-4 text-gray-500 max-w-xl mx-auto">
        My professional journey in software development, web development, mobile development and IoT.
      </p>
    </div>
    @php
      $experiences = [
        [
          'year' => '2025 - Present',
          'title' => 'Full Stack Web Developer',
          'company' => 'Freelance',
          'description' => 'Developing responsive websites, dashboards and custom systems using Laravel, PHP, JavaScript and MySQL.',
          'tech' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'Tailwind CSS'],
          'side' => 'left',
        ],
        [
          'year' => '2024',
          'title' => 'IoT Developer',
          'company' => 'Personal Project',
          'description' => 'Building IoT systems using ESP32, Flask API, MQTT and sensor integration.',
          'tech' => ['ESP32', 'Python', 'Flask', 'MQTT', 'Arduino IDE'],
          'side' => 'right',
        ],
        [
          'year' => '2024',
          'title' => 'Mobile Developer',
          'company' => 'Learning Project',
          'description' => 'Developing Android applications using Flutter and Dart while learning modern mobile architecture.',
          'tech' => ['Flutter', 'Dart', 'Firebase'],
          'side' => 'left',
        ],
      ];
    @endphp
    <div class="relative">
      <div class="hidden lg:block absolute left-1/2 top-0 -translate-x-1/2 w-1 h-full bg-linear-to-b from-[#a00000] via-red-300 to-transparent rounded-full"></div>
      @foreach($experiences as $experience)
        <div class="relative mb-16 flex items-center {{ $experience['side'] == 'left' ? 'lg:justify-start' : 'lg:justify-end' }}"
          data-aos="{{ $experience['side'] == 'left' ? 'fade-right' : 'fade-left' }}">
          <div class="hidden lg:flex absolute left-1/2 -translate-x-1/2 w-6 h-6 rounded-full bg-[#a00000] border-4 border-white shadow-lg"></div>
          <div class="w-full lg:w-[45%] bg-white rounded-3xl border border-gray-200 shadow-sm p-8 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-[#a00000]">
            <div class="inline-flex items-center gap-2 text-[#a00000] font-semibold mb-3">
              <span class="w-2 h-2 rounded-full bg-[#a00000]"></span>
              {{ $experience['year'] }}
            </div>
            <h3 class="text-2xl font-bold text-gray-800">
              {{ $experience['title'] }}
            </h3>
            <p class="text-gray-500 mb-5">
              {{ $experience['company'] }}
            </p>
            <p class="leading-8 text-gray-600">
              {{ $experience['description'] }}
            </p>
            <div class="flex flex-wrap gap-2 mt-6">
              @foreach($experience['tech'] as $tech)
                <span class="px-4 py-2 rounded-full border text-sm text-gray-600 hover:bg-[#a00000] hover:text-white transition cursor-default">
                  {{ $tech }}
                </span>
              @endforeach
            </div>

          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>