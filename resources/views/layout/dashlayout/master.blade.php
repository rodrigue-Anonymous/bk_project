<!DOCTYPE html>
<html lang="fr-fr">

<head>
    @include('layout.head')
</head>
<body class="home">
    <div class="master-main">

      {{-- @include('layouts.nav') --}}

        @yield('content')

       {{-- <title>@yield('title')</title> --}}

        {{-- <x-scroll-button /> --}}

        {{-- <x-bubbles /> --}}
        

    </div>
    @include('layout.script')
</body>
