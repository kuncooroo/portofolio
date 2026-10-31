<footer id="contact" class="border-t border-gray-200 py-10">
    <div class="max-w-7xl mx-auto px-8 flex justify-between">
        <p>
            © {{ date('Y') }}
            {{ $setting->owner_name }}
        </p>
        <p>
            {{ $setting->footer_note }}
        </p>
    </div>
</footer>