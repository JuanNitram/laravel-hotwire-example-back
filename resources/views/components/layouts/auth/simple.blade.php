@props(['transitions' => true, 'scalable' => false, 'title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (session('theme')) data-theme="{{ session('theme') }}" @endif  >
    <head>
        @include('partials.head', [
            'transitions' => $transitions,
            'scalable' => $scalable,
            'title' => $title,
        ])
    </head>
    <body data-controller="theme" @class(["min-h-screen antialiased bg-base-200", "hotwire-native" => Turbo::isHotwireNativeVisit()])>
        <div class="flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            @include('partials.notifications')

            <div class="flex w-full max-w-sm flex-col gap-2">
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
