<x-layouts.app :title="__('Profile & Settings')">
    <section class="w-full max-w-md mx-auto space-y-6">
        <x-card class="p-0">
            <div class="divide-y divide-gray-200">
                <a href="{{ route('settings.profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-base text-gray-700 hover:bg-gray-50 transition-colors">
                    <x-icons.user class="text-gray-500" />
                    <span>{{ __('Edit profile') }}</span>
                </a>
                
                <a href="{{ route('settings.password.edit') }}" class="flex items-center gap-3 px-4 py-3 text-base text-gray-700 hover:bg-gray-50 transition-colors">
                    <x-icons.key class="text-gray-500" />
                    <span>{{ __('Change password') }}</span>
                </a>
                
                <a href="{{ route('settings.profile.delete') }}" class="flex items-center gap-3 px-4 py-3 text-base text-red-600 hover:bg-red-50 transition-colors">
                    <x-icons.trash class="text-red-500" />
                    <span>{{ __('Delete profile') }}</span>
                </a>
            </div>
        </x-card>

        <x-card class="p-0">
            <button form="settings-logout" type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-base text-gray-700 hover:bg-gray-50 transition-colors text-left">
                <x-icons.chevron-left class="text-gray-500" />
                <span>{{ __('Logout') }}</span>
            </button>
        </x-card>
    </section>

    <form action="{{ route('logout') }}" method="post" id="settings-logout" data-turbo-action="replace"
        data-action="submit->theme#clear">
        @csrf
    </form>
</x-layouts.app>