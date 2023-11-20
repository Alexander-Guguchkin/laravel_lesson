<x-layout>
    <x-slot:title>
        FormPost
    </x-slot>
    <form action="/resultPost" method="post">
        @csrf
        <input type="text" name="name">
        <input type="number" name="age">
        <input type="number" name="salary">
        <input type="submit">
    </form>
</x-layout>
