<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title inertia>{{ config('app.name', 'AK-DANCE') }}</title>

        <meta charset="utf-8">
        <meta name="keywords" content="AK-DANCE,AIKA,ダンス,ダンススクール,ダンスレッスン"/>
        <meta name="description" content="AK-DANCEは、静岡県浜松市を拠点にダンサーAIKAがレッスンを行うダンススクールです。AK-DANCEの新着情報やコンセプト、レッスン日程、レッスン会場、また、AIKAの経歴等をご覧いただけます。"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="/images/favicon.ico" type="image/vnd.microsoft.icon"/>
        <link rel="icon" href="/images/favicon.ico" type="image/vnd.microsoft.icon"/>
        <link rel="apple-touch-icon" href="/images/app-icon.png"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
