<x-layout>
    <x-slot:title>
        FormUserView
    </x-slot>
    <form action="/Result" method="get">
        <input type="text" name="name" class="inp" placeholder="Имя">
        <input type="text" name="surname" class="inp" placeholder="Фамилия">
        <input type="email" name="email" class="inp" placeholder="Почта">
        <input type="number" name="age" class="inp" placeholder="Возраст">
        <input type="number" name="phone" class="inp" placeholder="Номер телефона">
        <input type="text" name="city" class="inp" placeholder="Город">
        <div class="wraper__button inp">
            <input type="submit">
            <button>Очистить</button>
        </div>
    </form>
</x-layout>
