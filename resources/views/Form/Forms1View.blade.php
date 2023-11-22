<x-layout>
    <x-slot:title>
        Forms1View
    </x-slot>
    <form action="/Forms1Result" method="get">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <input type="submit">
    </form>
</x-layout>
