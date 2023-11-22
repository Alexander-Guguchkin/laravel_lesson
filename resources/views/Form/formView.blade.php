<x-layout>
    <x-slot:title>
        Form
    </x-slot>
    <form action="/FormResult" method="get">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit">
    </form>
</x-layout>
