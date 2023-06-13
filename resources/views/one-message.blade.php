<title>Заказ от {{ $data->created_at }}</title>
<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Заказ от {{ $data->created_at }}
        </h2>
    </x-slot> 


    <div class="mt-8">
        <div class="alert alert-info max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p><b>Статус: <u>{{ $data->status }} </u></b></p>
            <p>ФИО отправителя: {{ $data->name_otprav }} </p>
            <p>Адрес отправителя: {{ $data->address_otprav }} </p>
            <p>Номер телефона отправителя: {{ $data->number_otprav }} </p>
            <p>ФИО получателя: {{ $data->name_polych }} </p>
            <p>Адрес получателя: {{ $data->address_polych }} </p>
            <p>Номер телефона получателя: {{ $data->number_polych }} </p>
            <p><small>{{ $data->created_at }}</small> </p>
        </div>
    </div>
</x-app-layout>
