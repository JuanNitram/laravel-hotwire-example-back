@props(['id' => null, 'label' => null, 'description' => null])

<div class="flex items-center space-x-2">
    <input {{ $attributes->merge([
        'id' => $id, 
        'type' => 'checkbox', 
        'class' => 'peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground'
    ]) }} />
    @if($label)
        <label for="{{ $id }}" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
            {{ $label }}
        </label>
    @endif
    @if($description)
        <p class="text-sm text-muted-foreground">{{ $description }}</p>
    @endif
</div>
