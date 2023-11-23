<x-layout>
    <x-slot:title>
        Result
    </x-slot>
    <table>
        <tr>
            @foreach ($alldata as $item => $value)
                <th>{{$item}}</th>
            @endforeach
            <th>Actions</th>
        </tr> <!--ряд с ячейками заголовков-->

        <tr>
            @foreach ($alldata as $item)
                <td>{{$item}}</td>
            @endforeach
        </tr> <!--ряд с ячейками тела таблицы-->
    </table>
    {{-- @dd($alldata) --}}
</x-layout>
