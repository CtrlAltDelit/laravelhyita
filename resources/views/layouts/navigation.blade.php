<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="height:80px;">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        <img src="/img/logo.png" class="logo" alt="2" style="width: 75px; margin-top:10px;">
                    </a>
                </div>

                <!-- Navigation Links -->
                


                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('uslugi')" :active="request()->routeIs('uslugi')">
                        {{ __('Товары') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Контакты') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" >
                    <x-nav-link :href="route('order')" :active="request()->routeIs('order')" style="font-weight:bold;font-size:16px;">
                        {{ __('Оформить заказ') }}
                    </x-nav-link>
                </div>

                @auth
                @if(Auth::user()->isAdmin())
                 <div class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex">
                 <x-nav-link :href="route('admin-data')" :active="request()->routeIs('admin-data')">
                   {{ __('Админ панель')}}
               </x-nav-link>
           </div>

             
           @endif
           @endauth


                




            </div>

            <!-- Settings Dropdown -->
            @if(Auth::user())
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                       
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                           
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Профиль') }}
                        </x-dropdown-link>

                       
                        <x-dropdown-link :href="route('order-data')">
                            {{ __('Мои заказы') }}
                        </x-dropdown-link>
                    

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выйти') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @else
            @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex" style="margin-top:20px;font-weight:bold;">Авторизация</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex" style="margin-top:20px;font-weight:bold;">Регистрация</a>
                        @endif
            @endif
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('calculator')" :active="request()->routeIs('calculator')">
                {{ __('Рассчитать стоимость') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('uslugi')" :active="request()->routeIs('uslugi')">
                {{ __('Услуги') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Контакты') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('order')" :active="request()->routeIs('order')">
                {{ __('Оформить заказ') }}
            </x-responsive-nav-link>
        </div>
        
         @auth
                @if(Auth::user()->isAdmin())
                <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin-data')" :active="request()->routeIs('admin-data')">
                {{ __('Админ панель') }}
            </x-responsive-nav-link>
        </div>

             
           @endif
           @endauth

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
            @if(Auth::user())
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            
                
                @else
                        <div><a href="{{ route('login') }}" class="font-medium text-base text-gray-800">Авторизация</a></div>
                        <div><a href="{{ route('register') }}" class="font-medium text-base text-gray-800">Регистрация</a></div>
                @endif
            </div>
            
            
            @if(Auth::user())
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Профиль') }}
                </x-responsive-nav-link>

                
                <x-responsive-nav-link :href="route('order-data')">
                    {{ __('Мои заказы') }}
                </x-responsive-nav-link>
               

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Выйти') }}
                    </x-responsive-nav-link>
                </form>
            
            </div>
            
             @endif
        </div>
    </div>
</nav>
