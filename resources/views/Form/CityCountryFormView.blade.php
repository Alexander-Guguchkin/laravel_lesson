<x-layout>
    <x-slot:title>
        CityCountryForm
    </x-slot>
        <h2>{{$city}}</h2>
        <h2>{{$country}}</h2>
        {{-- {{$data}} --}}
        <form action="" method="Post">
            @csrf
            <input type="text" name="city">
            <input type="text" name="country">
            <input type="submit">
        </form>
</x-layout>
