<div class="mb-4">
    <label for="{{ $name }}" class="block font-medium text-gray-700 mb-2">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}" class="form-textarea w-full" rows="4">{{ $value }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-input w-full" value="{{ $value }}">
    @endif
</div>
