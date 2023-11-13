<x-layout>
    <x-slot:title>getwoarrs</x-slot>
    <table>
        @foreach ($d as $elem)
        <tr>
            {{-- {{var_dump($elem)}} --}}
            @foreach ($elem as $subelem)
                <td>{{$subelem}}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
    @forelse ( $d1 as $elem )
        {{$elem}}
    @empty
        в массиве ничего нет
    @endforelse
    @foreach ($arr as $elem)

            @break($elem == 0)

        {{$elem}}
    @endforeach
    <ul>
        @foreach ( $arr as $elem)
            @continue($elem==0)
            <li>{{$elem}}</li>
        @endforeach
    </ul>

        @for ($i=1; $i<=10; $i++)
            <p>{{$i}}</p>
        @endfor
    @php
        echo 'hello world';
    @endphp

</x-layout>

