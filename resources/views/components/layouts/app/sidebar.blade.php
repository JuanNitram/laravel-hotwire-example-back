@props(['transitions' => true, 'scalable' => false, 'title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (session('theme')) data-theme="{{ session('theme') }}"
    @endif>

<head>
    @include('partials.head', [
    'transitions' => $transitions,
    'scalable' => $scalable,
    'title' => $title,
    ])
</head>

<body data-controller="sidebar theme" data-layout="sidebar" data-theme-active-class="btn-active [&_svg]:visible!"
    data-action="turbo:before-cache@document->sidebar#close" @class(["min-h-screen bg-base-300", "hotwire-native"=>
    Turbo::isHotwireNativeVisit()])>
    <div class="w-full min-h-screen flex">
        @include('partials.notifications')

        <div class="flex-1 m-0 lg:m-2 rounded shadow bg-base-200 lg:border lg:dark:border-white/5 lg:border-black/10">
            {{ $slot }}
        </div>
    </div>
</body>

</html>