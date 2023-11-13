<x-layout>
    <x-slot:title>
        CssClass
    </x-slot>
    <p class="{{$redbackground}}">Hi reds</p>
    <input type="text" value="{{$val1}}">
    <input type="text" value="{{$val2}}">
    <input type="text" value="{{$val3}}">
    <p style="{{$cssCode}}">T2</p>
    <a href="{{$valueHrefs}}">{{$text}}</a>
    {{mt_rand(10, 1000)}}
    <p>{{$users['name']}}</p>
    <p>{{$users['age']}}</p>
    <p>{{$users['salary']}}</p>
    <p>{{count($users)}}</p>

</x-layout>
