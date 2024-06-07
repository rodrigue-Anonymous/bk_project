<!DOCTYPE html>
<html lang="fr-fr">


<head>
    @include('layout.head')
</head>
<body class="home">
    <div class="master-main">

        @include('layout.navbar')

        @yield('content')

        <title>@yield('title')</title>

        {{-- <x-scroll-button /> --}}

        {{-- <x-bubbles /> --}}
        @include('layout.footer')
    </div>
    @include('layout.script')
</body>
