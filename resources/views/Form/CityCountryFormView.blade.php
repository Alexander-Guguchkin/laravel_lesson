<x-layout>
    <x-slot:title>
        CityCountryForm
    </x-slot>
    {{-- {{$city}}
    {{$country}} --}}
        <form action="" method="post">
            @csrf
            <input type="text" name="city">
            <input type="text" name="country">
            <input type="submit">
        </form>
</x-layout>
