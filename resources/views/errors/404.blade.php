<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <title>بزرگترین اعتکاف دانش اموزی کشور - گفتمان رزم</title>
    <link rel="stylesheet" href="{{asset('assets/fonts/vazirmatn/Vazirmatn-font-face.css')}}">
    @fluxAppearance()
    @fluxScripts()
</head>
<body class="flex justify-center items-center flex-col items-center h-screen" dir="rtl" >
    <h2 class="text-2xl font-black" >صفحه ای که به دنبال آن بودید پیدا نشد</h2>
    <flux:button href="{{route('form')}}" >بازگشت به صفحه اصلی</flux:button>
    @vite('resources/js/app.js')

</body>
</html>
