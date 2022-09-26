{{-- Mintreu Blade Layout System For All Kind of Laravel Application  - Read More at https://github.com/mintreu/layout --}}
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head @if(!empty($layout_head)) {{ $layout_head }} @endif>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Meta KeyWords--}}
    @if(!empty($layout_keyword))<meta name="keyword" content="{{ $layout_keyword }}" />@endif
    {{-- Meta Description--}}
    @if(!empty($layout_description))<meta name="description" content="{{ $layout_description }}" />@endif
    {{-- Open Graph Meta Tags (learn more from https://ogp.me/)--}}
    @if($ogTagSupport)
    {{-- Default OG TAGS --}}
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:site_name" content="{{ $layout_title ?? config('app.name') }}" />
    {{-- Custom Per Page OG Tags--}}
    @if(!empty($og_title))<meta property="og:title" content="{{ $og_title ."\n".$layout_title ?? config('app.name') }}" />@endif
    @if(!empty($og_description))<meta property="og:description" content="{{ $og_description }}" />@endif
    @if(!empty($og_image))<meta property="og:image" content="{{ asset($og_image) }}" />@endif
        {{-- Bulk OG Meta Tags--}}
        @if(!empty($og_tag_slot))
            {{ $og_tag_slot }}
        @endif
    @endif
    {{-- Application Title--}}
    <title>{{ $layout_title ?? config('app.name') }}</title>
    {{-- Application Favicon--}}
    @if(!empty($layout_favicon))<link rel="icon" type="image/png" href="{{ asset($layout_favicon) }}" />@endif
    {{--Application Custom Header--}}
    @if(!empty($layout_header)) {{ $layout_header }} @endif
    @if(!empty($layout_header_raw) && $hasRawSupport) {!! $layout_header_raw !!} @endif
    {{-- Application Manifest--}}
    @if($manifest) <link rel="manifest" href="{{ asset("manifest.json") }}">@endif
    {{-- Preloader Support --}}
    @if($hasPreloaderSupport)
        <style>
            #preloader {
                @if(empty($preloaderPath))
                background-color: {{$preloaderColor['bg']}};
                border: 12px solid {{$preloaderColor['primary']}};
                border-radius: 50%;
                border-top: 12px solid {{$preloaderColor['secondary']}};
                width: 70px;
                height: 70px;
                position: absolute;
                animation: spin 1s linear infinite;
                @else
                position: fixed;
                background: url('{{$preloaderPath}}') 50% 50% no-repeat rgb(249,249,249);
                z-index: 9999;
                @endif
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
            }
            @if(empty($preloaderPath))
                @keyframes spin {
                100% {
                    transform: rotate(360deg);
                }
            }
            @endif
        </style>
    @endif
    <!-- Default Stylesheets -->
    @if(!$hasViteSupport && $hasMixSupport)
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    @endif

    @if(!$jsStyle && $hasViteSupport)
    @vite('resources/css/app.css')
    @endif

    @if(!empty($stylesheet))
    <!-- Layout Stylesheets -->
        {{ $stylesheet }}
    @endif
    @if($hasLivewireSupport)
    <livewire:styles />
    @endif

    @if(!empty($style))
    <!-- OnDemand Styles -->
        {{ $style }}
    @endif
</head>
<body @if(!empty($layout_body)) {{ $layout_body }}@endif>

@if($hasPreloaderSupport)<div id="preloader"></div>@endif
{{-- Body Navbar,loader etc goes here --}}
@if(!empty($header))
    <!-- OnDemand Slot (Header) -->
    {{ $header }}
@endif
{{--Main Content Of Body Goes Here--}}
{{ $slot }}
{{-- Body Footer,Chat Button etc goes here --}}
@if(!empty($footer))
    <!-- OnDemand Slot (Footer) -->
    {{ $footer }}
@endif

{{-- Preloader Support --}}
@if($hasPreloaderSupport)
    <script>
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";
                document.querySelector(
                    "#preloader").style.visibility = "visible";
            } else {
                document.querySelector(
                    "#preloader").style.display = "none";
                document.querySelector(
                    "body").style.visibility = "visible";
            }
        };
    </script>
@endif

<!-- Default Javascript -->
@if($hasViteSupport)
    @vite('resources/js/app.js')
@endif
@if(!$hasViteSupport && $hasMixSupport)
    <script src="{{asset('/js/app.js')}}"></script>
@endif
@if(!empty($javascript))
    <!-- Layout Javascript -->
    {{ $javascript }}
@endif
@if( $hasLivewireSupport)
    <livewire:scripts />
@endif
@if(!empty($script))
    <!-- OnDemand Scripts -->
    {{ $script }}
@endif
{{-- Application Custom Footer --}}
@if(!empty($layout_footer)) {{ $layout_footer }} @endif
@if(!empty($layout_footer_raw)  && $hasRawSupport) {!! $layout_footer_raw !!} @endif
</body>
</html>
