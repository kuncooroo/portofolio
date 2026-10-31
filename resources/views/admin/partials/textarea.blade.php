<div>
    <label for="{{ $name }}" class="mb-2 block text-sm font-semibold">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows ?? 5 }}"
        class="w-full rounded-xl border border-gray-200 bg-white px-4 py-3 outline-none ring-[#a00000] focus:ring-2">{{ $value ?? '' }}</textarea>
    @if (! empty($hint))
        <p class="mt-2 text-xs text-gray-500">{{ $hint }}</p>
    @endif
    @error($name)
        <p class="mt-2 text-sm text-[#a00000]">{{ $message }}</p>
    @enderror
</div>
