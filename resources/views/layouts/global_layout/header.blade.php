<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UVApilots</title>
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- style -->
        <!-- build:css {{ asset('css/basik_css/site.min.css') }} -->
        <link rel="stylesheet" href="{{ asset('css/basik_css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/basik_css/theme.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/basik_css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
        @if (Request::is('admin/*'))
            <link rel="stylesheet" href="{{asset('/dropzone/dist/min/dropzone.min.css')}}">
            <link rel="stylesheet" href="{{asset('/dropzone/dist/min/dropzone.min.js')}}">
        @endif
        <link rel="stylesheet" href="{{ asset('css/blog.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/singlepage.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <script src="https://use.fontawesome.com/38dfb36663.js"></script>
        <!-- endbuild -->
        {{-- scroll reveal js --}}
        <script src="https://unpkg.com/scrollreveal"></script>
    </head>
    @if (Request::is('admin/*'))
        <body class="layout-row">
    @endif
    <body class="layout-coloum">

