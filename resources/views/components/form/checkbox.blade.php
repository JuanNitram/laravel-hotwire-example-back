@props(['id' => null, 'label' => null, 'description' => null])

<div class="flex items-center space-x-2">
    <input {{ $attributes->merge([
        'id' => $id, 
        'type' => 'checkbox', 
        'class' => 'peer h-4 w-4 shrink-0 rounded-sm border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 checked:bg-blue-600 checked:border-blue-600'
    ]) }} />
    @if($label)
        <label for="{{ $id }}" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
            {{ $label }}
        </label>
    @endif
    @if($description)
        <p class="text-sm text-gray-500">{{ $description }}</p>
    @endif
</div>
