<div>
    <label for="{{ $name }}" class="mb-2 block text-sm font-semibold">
        {{ $label }}
        @if (! empty($required))
            <span class="text-[#a00000]">*</span>
        @endif
    </label>
    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        value="{{ $value ?? '' }}"
        @if (! empty($required)) required @endif
        @if (! empty($placeholder)) placeholder="{{ $placeholder }}" @endif
        class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none ring-[#a00000] focus:ring-2">
    @error($name)
        <p class="mt-2 text-sm text-[#a00000]">{{ $message }}</p>
    @enderror
</div>
