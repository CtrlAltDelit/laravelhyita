<title>Мои заказы</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Мои заказы') }}
        </h2>
    </x-slot>


    <div class="mt-8">
        @foreach($data as $el)
        @if((Auth::user()->id)==($el->id_user))           
        <div class="alert alert-info max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3><b>Заказ от {{ $el->created_at }}</b></h3>
            <p>Статус: <u>{{ $el->status }} </u></p>
            <p>ФИО отправителя: {{ $el->name_otprav }} </p>
            <p>ФИО получателя: {{ $el->name_polych }} </p>
            <a href="{{ route('order-data-one', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
        @endif
        @endforeach
    
    </div>
</x-app-layout>
