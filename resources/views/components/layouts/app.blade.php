<!DOCTYPE html>
<html lang="fa">
<head>
    <title>بزرگترین اعتکاف دانش اموزی کشور - گفتمان رزم</title>
    <link rel="stylesheet" href="{{asset('assets/fonts/vazirmatn/Vazirmatn-font-face.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="w-full h-screen flex justify-center items-center gap-4 " dir="rtl">
{{$slot}}
    @livewireScripts
    @fluxAppearance()
    @fluxScripts()
    @vite('resources/js/app.js')
</body>
</html>
