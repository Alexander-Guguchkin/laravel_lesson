<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="@yield('metaDescription')">
    <title> {{$title}} </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="wrapper">
            <x-header />
            <x-main.menu.nav />
            <x-main.sidebar.left.info-block/>
            <x-main-content/>
<<<<<<< HEAD
            <x-h1 :title="$title"/>
            <x-logo src="https://e7.pngegg.com/pngimages/41/701/png-clipart-logo-graphic-design-graphy-grapher-logo-graphy-angle-text.png" width="210" height="210" />
=======
            <x-info>info1</x-info>
            <x-logo src = "https://img.razrisyika.ru/kart/94/372802-logo-6.jpg" alt = "Логотип"/>
            <x-log><img src = "https://img.razrisyika.ru/kart/94/372802-logo-6.jpg" alt="Логотип" class="logImgs"></x-log>
            <x-h1 :title="$title"/>
>>>>>>> e721b3a1765057709b11256179692000038f04c9
            <p>Это с loyout</p>
            {{$slot}}
            <x-footer.info />
        </div>
    </body>
</html>
