<x-layout>
    <x-slot:title>
        getUserInfos
    </x-slot>

    {{-- @foreach ($queryHasOne->getAttributes() as $q => $value)
        <h2>{{$q}} : {{$value}}</h2>
    @endforeach
    @foreach ($user->getAttributes() as $q => $value)
        <h2>{{$q}} : {{$value}}</h2>
    @endforeach --}}
    @foreach ($user->getAttributes() as $us => $value)
        <h2>{{ $us }}</h2>
    @endforeach
    @foreach ($user->profile->getAttributes() as $q => $value)
        <h2>{{ $q }} : {{ $value }}</h2>
    @endforeach
    <table>
        <tr>
            @foreach ($user->getAttributes() as $us => $value)
                <th>{{ $us }}</th>

            @endforeach
            @foreach ($user->profile->getAttributes() as $us => $value)
                <th>{{ $us }}</th>
            @endforeach
        </tr>
        <tr>
            @foreach ($user->getAttributes() as $us)
                <td>{{ $us }}</td>
            @endforeach
            @foreach ($user->profile->getAttributes() as $us)
                <td>{{ $us }}</td>
            @endforeach
        </tr>
    </table>
</x-layout>
