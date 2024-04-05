@extends('layouts.default')

@section('content')
    <main class="space-y-40 mb-40">
        <div class="relative" id="home">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-400 to-white"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-400"></div>
            </div>
            <div class="max-w-8xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="relative pt-36 ml-auto">
                    <div class="lg:w-3/3 text-center mx-auto">
                        <h1 class="lg:w-2/3 mx-auto text-orange-400 font-bold text-5xl md:text-6xl xl:text-7xl">Автомаг
                            рядом</h1>
                        <p class="lg:w-2/3 mx-auto mt-8 text-lg text-gray-700 text-gray-300">Компания Автомаг работает в г.
                            Камышине
                            более 20 лет. За это время мы наработали надежные и долгосрочные связи с добросовестными,
                            проверенными временем поставщиками. Для нас всегда оставалось главным приоритетом подлинность,
                            оригинальность наших товаров. Мы прилагаем все усилия, чтобы на полки наших магазинов не попала
                            контрафактная или сомнительного происхождения продукция. </p>
                        <div class=" mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                            <a href="#"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-[#fc9760] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                                <span class="relative text-base font-semibold text-white">Get started</span>
                            </a>
                            <a href="#"
                                class="relative before:bg-[#9ca3af]  flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-gray-500 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 before:border-gray-700 before:bg-gray-800 sm:w-max">
                                <span class="relative text-base font-semibold text-primary text-white">Learn
                                    more</span>
                            </a>
                        </div>
                        <div
                            class="row lg:w-3/3 items-center w-full hidden py-8 mt-16 border-y border-gray-100 border-gray-800 sm:flex justify-around">
                            <div class="text-center col-3 text-left">
                                <h6 class="text-lg font-semibold text-orange-400">Низкие цены</h6>
                                <p class="mt-2 text-gray-500">Наша сеть предоставлен низкие цены на товары и услуги</p>
                            </div>
                            <div class="text-center col-3 text-left">
                                <h6 class="text-lg font-semibold text-orange-400">Быстрая доставка</h6>
                                <p class="mt-2 text-gray-500">Закажем и доставим необходимый товар за три дня</p>
                            </div>
                            <div class="text-center col-3 text-left">
                                <h6 class="text-lg font-semibold text-orange-400">Качественная продукция</h6>
                                <p class="mt-2 text-gray-500">Наши магазины предоставлюят только качественный и оригинальный
                                    товар</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6">
                        <div class="p-4 transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/shell.png') }}" class="h-20 w-auto mx-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                        <div class="p-4  transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/mobil.png') }}" class="h-20 w-auto mx-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                        <div class="p-4  transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/motul.png') }}" class="h-20 w-auto m-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                        <div class="p-4 transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/castrol.png') }}" class="h-20 w-auto mx-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                        <div class="p-4  transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/bardahl.png') }}" class="h-20 w-auto m-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                        <div class="p-4  transition duration-200 hover:grayscale-0">
                            <img src="{{ asset('images/repsol.png') }}" class="h-20 w-auto m-auto" loading="lazy"
                                alt="client logo" width="" height="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--



        <!-- Dropdown menu -->
        <div id="dropdownHover"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 text-gray-200" aria-labelledby="dropdownHoverButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 hover:bg-gray-600 hover:text-white">Sign out</a>
                </li>
            </ul>
        </div> --}}


        <div id="features">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="md:w-2/3 lg:w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-sky-500">
                        <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h2 class="my-8 text-2xl font-bold text-orange-400 md:text-4xl">
                        Продукция первой необходимости для вашего автомобиля
                    </h2>
                    <p class="text-gray-600 text-gray-300">Мы предоставляем огромный ассортимент товаров, которые обеспечат
                        вашему автомобилю надежную защиту и безупречную производительность. Мы гордимся предлагаемым выбором
                        высококачественных масел различных марок и вязкостей, фильтров для всех типов и моделей автомобилей,
                        а также надежных аккумуляторов, способных обеспечить бесперебойную работу вашего транспортного
                        средства. Кроме того, у нас имеется широкий ассортимент химических продуктов для технического
                        обслуживания автомобиля</p>
                </div>
                <div class="mt-16 grid overflow-hidden text-gray-600 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                    <div
                        class="group mr-5 border-1 border-orange-400 rounded-3xl relative  transition hover:bg-orange-400 hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" class="w-12" width="512"
                                height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5 class="text-xl font-semibold text-gray-600  ransition group-hover:text-white">
                                    Масла и жидкости
                                </h5>
                                <p class="text-gray-600 group-hover:text-white">
                                    Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                                </p>
                            </div>
                            <a href="{{ url('/oil') }}" class="flex items-center  justify-between group-hover:text-white">
                                <span class="text-sm ">Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="mr-5 border-1 border-orange-400 rounded-3xl relative  transition hover:bg-orange-400 hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                        <div class="group relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341134.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5 class="text-xl font-semibold text-gray-700 transition group-hover:text-white">
                                    Фильтры
                                </h5>
                                <p class="text-gray-600 group-hover:text-white">
                                    Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                                </p>
                            </div>
                            <a href="{{ url('/filters') }}"
                                class="flex items-center justify-between group-hover:text-white">
                                <span class="text-sm">Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group mr-5 border-1 border-orange-400 rounded-3xl relative  transition hover:bg-orange-400 hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341160.png" class="w-12"
                                width="512" height="512" alt="burger illustration">
                            <div class="space-y-2">
                                <h5 class="text-xl font-semibold text-gray-600  ransition group-hover:text-white">
                                    Аккумуляторы
                                </h5>
                                <p class="text-gray-600 group-hover:text-white">
                                    Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                                </p>
                            </div>
                            <a href="{{ url('/accum') }}"
                                class="flex items-center  justify-between group-hover:text-white">
                                <span class="text-sm ">Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group mr-5 border-1 border-orange-400 rounded-3xl relative  transition hover:bg-orange-400 hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12"
                                width="512" height="512" alt="burger illustration">

                            <div class="space-y-2">
                                <h5 class="text-xl font-semibold text-gray-600  ransition group-hover:text-white">
                                    Химия
                                </h5>
                                <p class="text-gray-600 group-hover:text-white">
                                    Neque Dolor, fugiat non cum doloribus aperiam voluptates nostrum.
                                </p>
                            </div>
                            <a href="{{ url('/chemistry') }}"
                                class="flex items-center  justify-between group-hover:text-white">
                                <span class="text-sm ">Read more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="solution">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div
                    class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                    <div class="md:5/12 lg:w-1/3">
                        <img src="./images/pie.svg" alt="image" loading="lazy" width="" height=""
                            class="w-full">
                    </div>
                    <div class="md:7/12 lg:w-2/3">
                        <h2 class="text-3xl font-bold text-orange-400 md:text-4xl ">
                            Удобства и запчасти для вашего автомобиля
                        </h2>
                        <p class="text-lg my-8 text-gray-600 text-gray-300">
                            Широкий выбор антифризов, тосолов, электрооборудования и аксессуаров для вашего автомобиля.
                            Качественные товары по выгодным ценам - защита и комфорт вашего транспортного средства
                        </p>

                        <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                            <div class="divide-y space-y-4 divide-gray-100 divide-gray-800" id="accordion-flush"
                                data-accordion="collapse" data-active-classes="bg-transparent text-gray-900 text-white"
                                data-inactive-classes="text-gray-500 text-gray-400">
                                <div id="accordion-collapse-heading-1 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Антифризы и тосолы
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-1" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div class="py-3 bg-transparent">
                                        <p class="mb-2 text-gray-500 text-gray-400">MOTUL, Felix, Синтек, Аляска, Ravenol,
                                            Toyota, Mannol, Gazpromneft, G-Energy, Luxoil. <br>
                                            Если клиенту нужно что-то другое, доставим в течении 1-3 дней.</p>
                                    </div>
                                </div>
                                <div id="accordion-collapse-heading-2 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-2">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Электрооборудование
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-2" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-2">
                                        <ul>
                                            <li class="mb-2 text-gray-500 text-gray-400">Свечи зажигания. NGK, Denso,
                                                Энгельс ЭЗ, Torch, Brisk, Bosch, Lynx.</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Лампочки (галогенные,
                                                светодиодные, ксеноновые) <br> Osram, Bosch, Filips, Narva, Goodyear, Cikoo,
                                                Маяк, Selen, SCT, AVS.</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Фары</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Провода зажигания</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Предохранители</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="accordion-collapse-heading-3 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-3">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Аксессуары
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-2">
                                        <ul>
                                            <li class="mb-2 text-gray-500 text-gray-400">Щетки стеклоочистителей</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Чехлы и накидки на сиденья</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Колпаки на диски</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Ароматизаторы и освежители</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Брелки</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Оплетки на руль</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Сиденья детские</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Фонари</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Скребки и щетки для снега и льда
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="accordion-collapse-heading-4 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-4">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Запчасти на заказ
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-4" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-2">
                                        <p class="mb-2 text-gray-500 text-gray-400">Привезем любые запчасти для иномарок
                                            под заказ. Время доставки 1-3 дня. <br>
                                            Наши консультанты помогут вам подобрать необходимые запчасти. Если деталь не
                                            подошла, мы ее без проблем вернем обратно. Клиент оплачивает
                                            <strong>после</strong>
                                            поступления и осмотра деталей.
                                        </p>
                                    </div>
                                </div>

                                <div id="accordion-collapse-heading-5 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-5">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Замене масел,
                                                антифризов, фильтров / монтаж шин
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-5" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-5">
                                    <div class="p-2">
                                        <p class="mb-2 text-gray-500 text-gray-400">При наших магазинах работают пункты
                                            замены масла, где быстро, качественно и недорого вам заменят масла, фильтры,
                                            свечи, колодки, лампочки. </p>
                                        <ul>
                                            <li class="mb-2 text-gray-500 text-gray-400">
                                                <strong>Замена масла на улице Базарова, 62</strong> <br>
                                                <a href="tel:+79377089152 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79377089152
                                                </a>
                                                <a href="tel:+79026592765 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79026592765
                                                </a>
                                                <a href="tel:+79044272069 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79044272069
                                                </a>
                                            </li>
                                            <li class="mb-2 text-gray-500 text-gray-400">
                                                <strong>Замены масла на улице 22 Партсьезда, 8А</strong> <br>
                                                <a href="tel:+79272587353 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79272587353
                                                </a>
                                                <a href="tel:+79020905587 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79020905587
                                                </a>
                                            </li>
                                            <li class="mb-2 text-gray-500 text-gray-400">
                                                <strong>Монтаж шин на улице 22 Партсьезда, 8А</strong> <br>
                                                <a href="tel:+79275355315 " class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                                    +79275355315
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <div id="accordion-collapse-heading-6 cursor-pointer">
                                    <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                        data-accordion-target="#accordion-collapse-body-6" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-5">
                                        <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor"
                                                class="w-6 h-6 m-auto text-orange-500 text-orange-400">
                                                <path fill-rule="evenodd"
                                                    d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="w-5/6">
                                            <h3 class="font-semibold text-lg text-orange-400">Другое
                                            </h3>
                                            <p class="text-gray-500 text-gray-400"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion-collapse-body-6" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-6">
                                    <div class="p-2">
                                        <ul>
                                            <li class="mb-2 text-gray-500 text-gray-400">Смазки <br> литол, солидол, ШРУС,
                                                смазка 158, ЦИАТИМ, Фиол, смазки для консервации, высокотемпературные
                                                смазки, вазелин, графитная смазка, смазки для цепей и мн. др. </li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Инструмент <br> ключи, головки,
                                                отвертки, пассатижи, и т. д. </li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Огнетушители</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Хомуты</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Тормозные колодки</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Домкраты</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Шумоизоляция</li>
                                            <li class="mb-2 text-gray-500 text-gray-400">Буксиры и тросы</li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative py-16">
            <div aria-hidden="true"
                class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-400 to-white"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-400"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="relative">

                    <div class="mt-6 m-auto space-y-6 md:w-8/12 lg:w-8/12">
                        <h1 class="text-center text-4xl font-bold text-orange-400 md:text-5xl">Подарочные сетификаты</h1>
                        <p class="text-center text-xl text-gray-600">
                            Подарочный сертификат - идеальный выбор для автолюбителя. Гарантированно приятный подарок,
                            который не оставит равнодушным<br>
                            А для наших постоянных клиентов мы предлагаем уникальные скидочные карты - ваша выгода всегда с
                            нами
                        </p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <a href="#"
                                class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-full before:bg-[#fc9760] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                                <span class="relative text-base font-semibold text-white text-dark">Get
                                    Started</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-600 text-gray-300" id="reviews">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="mb-20 space-y-4 px-6 md:px-0">
                    <h2 class="text-center text-4xl font-bold text-orange-400 md:text-4xl">
                        Отзывы
                    </h2>
                </div>
                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar.webp" alt="user avatar"
                                width="400" height="400" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Daniella Doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Mobile dev</p>
                            </div>
                        </div>
                        <p class="mt-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aliquid quo
                            eum quae quos illo earum ipsa doloribus nostrum minus libero aspernatur laborum cum, a
                            suscipit, ratione ea totam ullam! Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Architecto laboriosam deleniti aperiam ab veniam sint non cumque quis tempore cupiditate.
                            Sint libero voluptas veniam at reprehenderit, veritatis harum et rerum.</p>
                    </div>
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar-1.webp" alt="user avatar"
                                width="200" height="200" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Jane doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Marketing</p>
                            </div>
                        </div>
                        <p class="mt-8"> Lorem ipsum dolor laboriosam deleniti aperiam ab veniam sint non cumque quis
                            tempore cupiditate. Sint libero voluptas veniam at reprehenderit, veritatis harum et rerum.
                        </p>
                    </div>
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar-2.webp" alt="user avatar"
                                width="200" height="200" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Yanick Doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Developer</p>
                            </div>
                        </div>
                        <p class="mt-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto
                            laboriosam deleniti aperiam ab veniam sint non cumque quis tempore cupiditate. Sint libero
                            voluptas veniam at reprehenderit, veritatis harum et rerum.</p>
                    </div>
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar-3.webp" alt="user avatar"
                                width="200" height="200" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Jane Doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Mobile dev</p>
                            </div>
                        </div>
                        <p class="mt-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto
                            laboriosam deleniti aperiam ab veniam sint non cumque quis tempore cupiditate. Sint libero
                            voluptas veniam at reprehenderit, veritatis harum et rerum.</p>
                    </div>
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar-4.webp" alt="user avatar"
                                width="200" height="200" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Andy Doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Manager</p>
                            </div>
                        </div>
                        <p class="mt-8"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto
                            laboriosam deleniti aperiam ab veniam sint non cumque quis tempore cupiditate. Sint libero
                            voluptas veniam at reprehenderit, veritatis harum et rerum.</p>
                    </div>
                    <div
                        class="aspect-auto p-8 border border-gray-100 rounded-3xl   bg-gray-800 border-gray-700 shadow-2xl shadow-gray-600/10 shadow-none">
                        <div class="flex gap-4">
                            <img class="w-12 h-12 rounded-full" src="./images/avatars/avatar-2.webp" alt="user avatar"
                                width="400" height="400" loading="lazy">
                            <div>
                                <h6 class="text-lg font-medium text-gray-700 text-white">Yanndy Doe</h6>
                                <p class="text-sm text-gray-500 text-gray-300">Mobile dev</p>
                            </div>
                        </div>
                        <p class="mt-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto
                            laboriosam deleniti aperiam ab veniam sint non cumque quis tempore cupiditate. Sint libero
                            voluptas veniam at reprehenderit, veritatis harum et rerum.</p>
                    </div>

                </div>
            </div>
        </div>
        <div id="blog">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="mb-12 space-y-2 text-center">
                    <h2 class="text-3xl font-bold text-orange-400 md:text-4xl">Мы здесь</h2>
                    {{-- <p class="lg:mx-auto lg:w-6/12 text-gray-600 text-gray-300">
                        Quam hic dolore cumque voluptate rerum beatae et quae, tempore sunt, debitis dolorum officia
                        aliquid explicabo? Excepturi, voluptate?
                    </p> --}}
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="group rounded-3xl border shadow-none bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <iframe class="mb1 map-item"
                                src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ae446f2fdadb60ae2d8c7c752de210613130055e832044c0b7e8e23eeafc077e0"
                                frameborder="0" allowfullscreen="true" width="100%" height="400px"
                                style="display: block;"></iframe>
                        </div>
                        <div class="mt-6 p-6 sm:p-8  relative">
                            <h3 class="text-2xl font-semibold text-orange-400">
                                Улица Базарова, 62
                            </h3>
                            <p class="mt-6 mb-2 text-gray-600 text-gray-300">
                                8:30 - 18:00, без перерыва
                            </p>
                            <a href="tel:+79044272069"
                                class="text-lg  block mb-2 text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                +79044272069
                            </a>
                        </div>
                    </div>
                    <div
                        class="group  rounded-3xl border shadow-none border-orange-700 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <iframe class="mb1 map-item"
                                src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3A07c0f9dbdb5cfcce0fbd2107df35f6b38f8b7477dbc53f97de1b2583813083a0"
                                frameborder="0" allowfullscreen="true" width="100%" height="400px"
                                style="display: block;"></iframe>
                        </div>
                        <div class="mt-6 relative p-6 sm:p-8">
                            <h3 class="text-2xl font-semibold text-orange-400">
                                Улица 22 Партсъезда, 8а
                            </h3>
                            <p class="mt-6 mb-2 text-gray-600 text-gray-300">
                                8:30 - 18:00, без перерыва
                            </p>
                            <a href="tel:+79585454287"
                                class="text-lg  block mb-2 text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                +79585454287
                            </a>
                            <a href="tel:8-844-57-93200"
                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                8-844-57-93200
                            </a>
                        </div>

                    </div>
                    <div class="group  rounded-3xl   border  shadow-none bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <iframe class="mb1  map-item"
                                src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;um=constructor%3Ad4d7ca78397a7783ab60c2db57ab0665b8c46305ed48de6841395ef42687ef51"
                                frameborder="0" allowfullscreen="true" width="100%" height="400px"
                                style="display: block;"></iframe>
                        </div>
                        <div class="mt-6 relative p-6 sm:p-8">
                            <h3 class="text-2xl font-semibold text-orange-400">
                                Улица Некрасова, 2
                            </h3>
                            <p class="mt-6 mb-2 text-gray-600 text-gray-300">
                                8:30 - 18:00, без перерыва
                            </p>
                            <a href="tel:+79061740453"
                                class="text-lg block  mb-2 text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                +79061740453
                            </a>
                            <a href="tel:8-844-57-47800,"
                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-400 transition">
                                8-844-57-47800
                            </a>
                        </div>

                    </div>
                </div>
                <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                    <a href="#"
                        class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-[#fc9760] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                        <span class="relative text-base font-semibold text-white">Позвоните</span>
                    </a>
                    <a href="#"
                        class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-gray-500 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 before:border-gray-700 before:bg-gray-800 sm:w-max">
                        <span class="relative text-base font-semibold text-primary text-white">Напишите</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
