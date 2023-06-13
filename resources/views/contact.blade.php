<title>Контакты</title>
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Контакты') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
          .      </div> -->
            </div>
            <p style="margin-bottom:15px;"><b>Адрес:</b> г. Ижевск, ул. Удмуртская, 304</p>
            <p style="margin-bottom:15px;"><b>Телефон:</b>+7 (904) 587-96-35</p>
            <p><b>Email:</b> email@mail.ru</p>
        </div>
        
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af569bf36e8ec6dc7c55f2b444917b083fb3569c4390771091e3d07bd9988ae58&amp;source=constructor" width="100%" height="408" frameborder="0"></iframe>
</x-app-layout>
