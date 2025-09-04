<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-50 text-blue-600 underline-offset-4 hover:underline h-10 px-4 py-2 bg-transparent'
]) }}>{{ $slot }}</button>
