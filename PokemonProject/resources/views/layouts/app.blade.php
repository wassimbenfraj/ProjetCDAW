<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PokéGame - @yield('title')</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->
    @include('partials._stylesheets')

</head>

<body class="template-color-1 nft-body-connect">
 @include('partials._header')

    @yield('content')


 @include('partials._footer')
 @include('partials._scripts')
 @yield('script')
</body>

</html>
