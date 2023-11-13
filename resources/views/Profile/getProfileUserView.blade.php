<x-layout>
    <x-slot:title>
        getProfileUser
    </x-slot>
        @foreach ( $profile->getAttributes() as $p)
            <p>{{$p}}</p>
        @endforeach
        @foreach ( $profile->user->getAttributes() as $p)
            <p>{{$p}}</p>
        @endforeach
    </x-layout>
