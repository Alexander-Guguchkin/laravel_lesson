<x-layout>
    <x-slot:title>
        Form12
    </x-slot>
    <form action="/f12Result/12/user12" method="POST">
        @csrf
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit">
    </form>
</x-layout>

