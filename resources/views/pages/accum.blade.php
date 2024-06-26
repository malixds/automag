@extends('layouts.default')

@section('content')
    <div class="home relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-500 to-white"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-500"></div>
        </div>
    </div>
    <div id="solution" class="pt-36">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-sky-500">
                <path fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                    clip-rule="evenodd"></path>
                <path fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                    clip-rule="evenodd"></path>
            </svg>
            <div
                class="space-y-6 lg:flex justify-between text-gray-600 md:flex md:flex-row md:gap-6 md:space-y-0 lg:gap-12">
                <div class="md:7/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-orange-500 md:text-4xl">
                        Аккумуляторы
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Всегда в наличии большой выбор аккумуляторов для любой техники
                    </p>
                    <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="mt-8 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">1</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Емкость
                                </h3>
                                <p class="text-gray-500 text-gray-400">от 55 Ам/час до 225 Ам/час</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">2</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Производители</h3>
                                <p class="text-gray-500 text-gray-400">АКОМ, Solite, Тюмень, Актех, Зубр, Delta,
                                    Hankook, Titan, Black Hourse, Dominator, TAB</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">3</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300"> Зарядные и пусковые
                                    устройства для аккумуляторов</h3>
                                <p class="text-gray-500 text-gray-400">Зарядка и запуск разряженных аккумуляторов
                                    автомобилей и другой техники</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">4</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Проверяем каждый
                                    аккумулятор перед выдачей клиенту</h3>
                                {{-- <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p> --}}
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">5</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">На все аккумуляторы
                                    предоставляется гарантия</h3>
                                {{-- <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p> --}}
                            </div>
                        </div>
                        <p class="pt-3 text-gray-500 text-gray-400">По желанию клиента доставим любой другой аккумулятор
                            в магазин в течениe 1-3 дней</p>
                    </div>
                </div>
                <div class="md:5/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-orange-500 md:text-4xl">
                        Возникли вопросы?
                    </h2>
                    <p class="mt-8 text-gray-600 text-gray-300">
                        Претензии по гарантийному обслуживанию аккумуляторов принимаются в офисе по адресу улица Некрасова,
                        дом 2
                    </p>
                    <div class="mt-3 text-gray-600">Звоните по номерам телефонов: <br>
                        <div class="flex mt-2">
                            <i class="fa-solid fa-phone mr-2 mt-1"></i>
                            <a href="tel:8-844-57-47800" class="text-orange-500">
                                8-844-57-47800
                            </a>
                        </div>
                        <div class="flex mt-2">
                            <i class="fa-solid fa-phone mr-2 mt-1"></i>
                            <a href="tel:+79061740453" class="text-orange-500">
                                +79061740453
                            </a>
                        </div>
                    </div>
                    <div class="lg:block sm:hidden">
                        <img src="{{ asset('images/bat.svg') }}" alt="image" loading="lazy" width="" height=""
                            class="w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.features')
@endsection
