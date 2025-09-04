@props(['class' => ''])

<div class="relative {{ $class }}" data-controller="password-reveal">
    <input {{ $attributes->merge([
        'type' => 'password',
        'class' => 'flex h-10 w-full rounded-md border border-gray-300 bg-white px-3 py-2 pr-10 text-sm placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 disabled:cursor-not-allowed disabled:opacity-50 data-[error]:border-red-500 data-[error]:ring-red-500',
        'data-password-reveal-target' => 'input'
    ]) }} />

    <button 
        class="absolute right-0 top-0 h-full px-3 py-2 hover:bg-gray-100 inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50" 
        aria-label="{{ __('Toggle password visibility') }}" 
        type="button" 
        data-action="password-reveal#toggle turbo:before-cache@document->password-reveal#reset"
    >
        <x-heroicon-o-eye aria-hidden="true" class="[:where([data-password-reveal-revealed-value=true]_&)]:hidden h-4 w-4 text-gray-500"/>
        <x-heroicon-o-eye-slash aria-hidden="true" class="hidden [:where([data-password-reveal-revealed-value=true]_&)]:block h-4 w-4 text-gray-500"/>
        <span class="sr-only">{{ __('Toggle password visibility') }}</span>
    </button>
</div>
