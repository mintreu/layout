<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head @if(!empty($layout_head)) {{ $layout_head }} @endif>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if($manifest)
        <link rel="manifest" href="{{ asset("manifest.json") }}">@endif
    @if(!empty($layout_keyword))
        <meta name="keyword" content="{{ $layout_keyword }}" />@endif
    @if(!empty($layout_description))
        <meta name="description" content="{{ $layout_description }}" />@endif
    <title>{{ $layout_title ?? config('app.name') }}</title>
    @if(!empty($layout_favicon))
        <link rel="icon" type="image/png" href="{{ asset($layout_favicon) }}" />@endif
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
