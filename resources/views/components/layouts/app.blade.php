<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>{{ $title ?? 'Gasthof Bauer' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="{{ asset('images/logos/favicon.png') }}" type="image/png">
</head>
<body class="bg-background">
@livewire('navbar')
{{ $slot }}
@livewire('footer')
<livewire:cookie-consent />

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" /> --}}
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
