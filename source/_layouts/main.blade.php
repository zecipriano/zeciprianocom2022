<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ $page->baseUrl }}/assets/images/favicon/apple-touch-icon.png?v=ngjYb5No3y">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ $page->baseUrl }}/assets/images/favicon/favicon-32x32.png?v=ngjYb5No3y">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ $page->baseUrl }}/assets/images/favicon/favicon-16x16.png?v=ngjYb5No3y">
        <link rel="manifest" href="{{ $page->baseUrl }}/assets/images/favicon/site.webmanifest?v=ngjYb5No3y">
        <link rel="mask-icon" href="{{ $page->baseUrl }}/assets/images/favicon/safari-pinned-tab.svg?v=ngjYb5No3y" color="#d10007">
        <link rel="shortcut icon" href="{{ $page->baseUrl }}/assets/images/favicon/favicon.ico?v=ngjYb5No3y">
        <meta name="msapplication-TileColor" content="#d10007">
        <meta name="msapplication-config" content="{{ $page->baseUrl }}/assets/images/favicon/browserconfig.xml?v=ngjYb5No3y">
        <meta name="theme-color" content="#fafafa">

        <script defer data-domain="zecipriano.com" src="https://s.zecipriano.com/script.js"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased p-2 flex min-h-screen items-center justify-center">
        @yield('body')
    </body>
</html>
