<x-layout>
    <x-slot:title>
        FormUserView
    </x-slot>
    <div class="wraper_form">
        <form action="/Result" method="get" class="forms obj1">
            <div class="wraperr__inp">
                <input type="text" name="name" class="obj1 btn1" placeholder="Имя">
            </div>

            <div class="wraperr__inp">
                <input type="text" name="surname" class="obj1 btn1" placeholder="Фамилия">
            </div>

            <div class="wraperr__inp">
                <input type="email" name="email" class="obj1 btn1" placeholder="Почта">
            </div>

            <div class="wraperr__inp">
                <input type="number" name="age" class="obj1 btn1" placeholder="Возраст">
            </div>

            <div class="wraperr__inp">
                <input type="tel" name="phone" class="obj1 btn1" placeholder="Номер телефона">
            </div>

            <div class="wraperr__inp">
                <input type="text" name="city" class="obj1 btn1" placeholder="Город">
            </div>

            <div class="wraper__button">
                <input type="submit"  class="obj1 btn1 fg1" >
                <button class="obj1 btn1 fg1"> Очистить</button>
            </div>
        </form>
    </div>

</x-layout>
