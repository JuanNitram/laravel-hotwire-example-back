<button {{ $attributes->merge([
    'type' => 'submit', 
    'class' => 'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-50 bg-black text-white hover:bg-gray-800 h-10 px-4 py-2 border border-transparent',
    'style' => 'background-color: #000000 !important; color: #ffffff !important; padding: 10px 16px !important; border-radius: 6px !important; display: inline-flex !important; min-height: 40px !important;'
]) }}>{{ $slot }}</button>
