<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>خبری در راه هست - هیئت ابنا الامام</title>
    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen flex justify-center items-center flex-col gap-2">

<div class="bg-seccondary p-3 rounded-4xl w-2/3 2xl:w-1/4">
    <img src="{{ asset('assets/images/typo.jpeg') }}"
         class="mix-blend-screen"
         alt="بزرگترین اعتکاف دهه نودی‌ها - مسجد سید اصفهان">
</div>

<h1 class="font-bold text-2xl">بزرگترین اعتکاف دهه نودی‌ها</h1>

<h2 class="font-bold">تا آغاز ثبت‌نام</h2>

<!-- روز‌شمار -->
<div id="countdown" class="text-xl font-bold" dir="rtl" > </div>

@vite('resources/js/app.js')
</body>
</html>
