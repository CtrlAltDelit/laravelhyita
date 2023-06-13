<title>Оформить заказ</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создание заказа') }}
        </h2>
    </x-slot>







    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Заполните форму
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('order-form')}}" class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
        @csrf
        <div class="form-group mt-2">
            <label for="name_otprav">Введите ФИО отправителя</label>
            <input type="text" name="name_otprav" placeholder="Введите ФИО отправителя" id="name_otprav" class="form-control"  required>
        </div>

        <div class="form-group mt-2">
            <label for="address_otprav">Адрес отправителя</label>
            <input type="text" name="address_otprav" placeholder="Адрес отправителя" id="address_otprav" class="form-control"  required>
        </div>


        <div class="form-group mt-2">
            <label for="number_otprav">Номер телефона отправителя</label>
            <input type="text" name="number_otprav" placeholder="Номер телефона отправителя" id="number_otprav" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label for="name_polych">Введите ФИО получателя</label>
            <input type="text" name="name_polych" placeholder="Введите ФИО получателя" id="name_polych" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label for="address_polych">Адрес получателя</label>
            <input type="text" name="address_polych" placeholder="Адрес получателя" id="address_polych" class="form-control" required>
        </div>


        <div class="form-group mt-2">
            <label for="number_polych">Номер телефона получателя</label>
            <input type="text" name="number_polych" placeholder="Номер телефона получателя" id="number_polych" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>* После оформления заказа с вами свяжется представитель компании, уточнит иформацию по заказу и озвучит точную стоимость</label>
            <input>
        </div>
         


        <button style="" type="submit" class="btn butn mt-2">Оформить заказ</button>
    </form>
</x-app-layout>
<style>
.butn {
 
    border: 1px solid #3CA9FF;
    cursor: pointer;
    animation: glowing 1300ms infinite;
    font-weight: bold;
}
@keyframes glowing {
    0% {background-color: #93D0FF;box-shadow: 0 0 5px #93D0FF;}
    50% {background-color: #6FC0FF;box-shadow: 0 0 40px #6FC0FF;}
    100% {background-color: #3CA9FF;box-shadow: 0 0 5px #3CA9FF;}
}
</style>