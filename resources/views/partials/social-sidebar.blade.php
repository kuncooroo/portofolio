@if ($setting->hasSocialLinks())
    <div class="social-rail">
        <div class="social-rail-panel">
            <div class="social-rail-links">
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
