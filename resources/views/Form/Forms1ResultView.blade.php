<x-layout>
    <x-slot:title>
        Forms1Result
    </x-slot>
    {{-- @dd($onlyData) --}}
    @foreach ($onlyData as $item =>$value)
      <h2>{{$item}}: {{$value}}</h2>
    @endforeach
    @foreach ($ExceptData as $item => $value)
        <h2>{{$item}}: {{$value}}</h2>
    @endforeach
</x-layout>
