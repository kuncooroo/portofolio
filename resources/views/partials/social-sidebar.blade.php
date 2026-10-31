@if ($setting->hasSocialLinks())
    <div class="fixed right-0 top-1/2 z-50 hidden -translate-y-1/2 lg:block">
        <div class="w-14 rounded-l-3xl border border-r-0 border-gray-200 bg-white/90 py-6 shadow-lg backdrop-blur-md">
            <div class="flex flex-col items-center gap-6">
                @if ($setting->github)
                    <a href="{{ $setting->github }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
                        class="text-gray-600 transition duration-300 hover:text-black">
                        <i class="fa-brands fa-github text-xl"></i>
                    </a>
                @endif
                @if ($setting->instagram)
                    <a href="{{ $setting->instagram }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                        class="text-gray-600 transition duration-300 hover:text-pink-500">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                @endif
                @if ($setting->linkedin)
                    <a href="{{ $setting->linkedin }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                        class="text-gray-600 transition duration-300 hover:text-sky-600">
                        <i class="fa-brands fa-linkedin text-xl"></i>
                    </a>
                @endif
                @if ($setting->whatsapp)
                    <a href="{{ $setting->whatsapp }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                        class="text-gray-600 transition duration-300 hover:text-green-500">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </a>
                @endif
                @if ($setting->email)
                    <a href="mailto:{{ $setting->email }}" aria-label="Email"
                        class="text-gray-600 transition duration-300 hover:text-red-500">
                        <i class="fa-solid fa-envelope text-xl"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
@endif
