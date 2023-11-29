<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
    <body>
        <div class="wrapper">
            <x-header />
            <x-main.menu.nav />
            <x-main-content/>
            <x-h1 :title="$title"/>
            <x-logo src="https://e7.pngegg.com/pngimages/41/701/png-clipart-logo-graphic-design-graphy-grapher-logo-graphy-angle-text.png" width="210" height="210" />
            <p>Это с loyout</p>
            {{$slot}}
            <x-footer.info />
        </div>
    </body>
</html>
