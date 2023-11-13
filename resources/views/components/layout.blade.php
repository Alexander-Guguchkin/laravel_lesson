<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<style>
    .r{
        background: red;
    }
    .tr,td, th{
        border: 1px solid black;
    }
</style>
<body>
    <p>Это с loyout</p>
    {{$slot}}
</body>
</html>
