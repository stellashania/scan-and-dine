<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

{{-- @include('layouts.user.header')

<main class="pt-5">
    @yield('content')
</main>

@include('layouts.user.footer') --}}

@if (isset(Auth::user()->id))
    @if (Auth::user()->role == 'member')
        @include('layouts.user.header')

        <main class="pt-5">
            @yield('content')
        </main>

        @include('layouts.user.footer')
    @elseif(Auth::user()->role == 'admin')
        @include('layouts.admin.header')

        <main class="pt-5">
            @yield('content')
        </main>

        @include('layouts.admin.footer')
    @endif
@else
    @include('layouts.user.header')

    <main class="pt-5">
        @yield('content')
    </main>

    @include('layouts.user.footer')
@endif
