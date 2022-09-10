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
    @if($ogTags)
    @if(!empty($og_title))<meta property="og:title" content="{{ $og_title ."\n".$layout_title ?? config('app.name') }}" />@endif
    @if(!empty($og_description))<meta property="og:description" content="{{ $og_description }}" />@endif
    @if(!empty($og_image))<meta property="og:image" content="{{ asset($og_image) }}" />@endif
    <meta property="og:url" content="{{ request()->route()->getName() }}" />
    <meta property="og:site_name" content="{{ $layout_title ?? config('app.name') }}" />
    {{ $og_tag_slot }}
    @endif
    {{-- Application Title--}}
    <title>{{ $layout_title ?? config('app.name') }}</title>
    {{-- Application Favicon--}}
    @if(!empty($layout_favicon))<link rel="icon" type="image/png" href="{{ asset($layout_favicon) }}" />@endif
    {{-- Application Manifest--}}
    @if($manifest) <link rel="manifest" href="{{ asset("manifest.json") }}">@endif
    <!-- Default Stylesheets -->
    @if(!$jsStyle)
    @vite('resources/css/app.css')
    @endif
    @if(!empty($stylesheet))
    <!-- Layout Stylesheets -->
        {{ $stylesheet }}
    @endif
    <livewire:styles />
    @if(!empty($style))
    <!-- OnDemand Styles -->
        {{ $style }}
    @endif
</head>
<body @if(!empty($layout_body)) {{ $layout_body }} @endif>
@if(!empty($header))
    <!-- OnDemand Slot (Header) -->
    {{ $header }}
@endif

{{ $slot }}

@if(!empty($footer))
    <!-- OnDemand Slot (Footer) -->
    {{ $footer }}
@endif
<!-- Default Javascript -->
@vite('resources/js/app.js')
@if(!empty($javascript))
    <!-- Layout Javascript -->
    {{ $javascript }}
@endif
<livewire:scripts />
@if(!empty($script))
    <!-- OnDemand Scripts -->
    {{ $script }}
@endif
</body>
</html>
