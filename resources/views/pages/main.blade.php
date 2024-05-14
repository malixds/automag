@extends('layouts.default')

@section('content')
    <div class="home relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-500 to-white"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-500"></div>
        </div>
        <div class="max-w-8xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-3/3 text-center mx-auto">
                    <h1 class="lg:w-2/3 mx-auto text-orange-500 font-bold text-5xl md:text-6xl xl:text-7xl">Сеть магазинов
                        Автомаг</h1>
                    <p class="main__text lg:w-2/3 mx-auto mt-8 text-lg text-gray-700 text-gray-300">Компания Автомаг
                        работает в г.
                        Камышине
                        более 20 лет. За это время мы наработали надежные и долгосрочные связи с добросовестными,
                        проверенными временем поставщиками. Для нас всегда оставалось главным приоритетом подлинность,
                        оригинальность наших товаров. Мы прилагаем все усилия, чтобы на полки наших магазинов не попала
                        контрафактная или сомнительного происхождения продукция. </p>
                    <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">

                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="relative flex h-12 w-full items-center justify-center px-12 before:absolute before:inset-0 before:rounded-2xl before:bg-[#ff5a1f] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-base font-semibold text-white">Контакты</span>
                        </button>
                        <a href="{{ route('about') }}"
                            class="link__about relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-2xl before:border before:border-transparent before:bg-gray-500 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 before:border-gray-700 before:bg-gray-800 sm:w-max">
                            <span class="relative text-base font-semibold text-primary text-white">О нас</span>
                        </a>

                        {{-- <a href="#"
                                class="relative before:bg-[#9ca3af]  flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-gray-500 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 before:border-gray-700 before:bg-gray-800 sm:w-max">
                                <span class="relative text-base font-semibold text-primary text-white">Learn
                                    more</span>
                            </a> --}}
                    </div>
                    <div
                        class="row lg:w-3/3 items-center w-full hidden py-8 mt-16 border-y border-gray-100 border-gray-800 sm:flex justify-around">
                        <div class="text-center col-3 text-left">
                            <h6 class="text-lg font-semibold text-orange-500">Низкие цены</h6>
                            <p class="mt-2 text-gray-500">Наша сеть предоставлен низкие цены на товары и услуги</p>
                        </div>
                        <div class="text-center col-3 text-left">
                            <h6 class="text-lg font-semibold text-orange-500">Быстрая доставка</h6>
                            <p class="mt-2 text-gray-500">Закажем и доставим требуемый товар в магазин за три дня</p>
                        </div>
                        <div class="text-center col-3 text-left">
                            <h6 class="text-lg font-semibold text-orange-500">Качественные товары</h6>
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
    {{-- <div
                class="mt-16 grid overflow-hidden text-gray-600 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                <div
                    class="group mb-3 mr-5 border-1 bg-orange-500 rounded-3xl relative  transition hover:bg-white hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold text-gray-50 transition group-hover:text-orange-500">
                                Масла и жидкости
                            </h5>
                            <p class="text-gray-50 group-hover:text-gray-600">
                                Смело повышайте производительность и срок службы своего двигателя
                            </p>
                        </div>
                        <a href="{{ url('/oil') }}"
                            class=" text-gray-50 flex items-center  justify-between group-hover:text-orange-500">
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
                    class="group mb-3 mr-5 border-1 bg-orange-500 rounded-3xl relative  transition hover:bg-white hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold text-gray-50 transition group-hover:text-orange-500">
                                Фильтры
                            </h5>
                            <p class="text-gray-50 group-hover:text-gray-600">
                                Предотварите попадание загрязнений, обеспечивая безопасность и долговечность своего
                                автомобиля
                            </p>
                        </div>
                        <a href="{{ url('/filters') }}"
                            class=" text-gray-50 flex items-center  justify-between group-hover:text-orange-500">
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
                    class="group mb-3 mr-5 border-1 bg-orange-500 rounded-3xl relative  transition hover:bg-white hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold text-gray-50 transition group-hover:text-orange-500">
                                Аккумуляторы
                            </h5>
                            <p class="text-gray-50 group-hover:text-gray-600">
                                Обеспечьте надежную работу электрооборудования и запуск двигателя
                            </p>
                        </div>
                        <a href="{{ url('/accum') }}"
                            class=" text-gray-50 flex items-center  justify-between group-hover:text-orange-500">
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
                    class="group mb-3 mr-5 border-1 bg-orange-500 rounded-3xl relative  transition hover:bg-white hover:z-[1] hover:shadow-2xl hover:shadow-orange-600/10 400">
                    <div class="relative space-y-8 py-12 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-xl font-semibold text-gray-50 transition group-hover:text-orange-500">
                                Химия
                            </h5>
                            <p class="text-gray-50 group-hover:text-gray-600">
                                Защитите кузов свой любимой машины от коррозии и износа
                            </p>
                        </div>
                        <a href="{{ url('/chemistry') }}"
                            class=" text-gray-50 flex items-center  justify-between group-hover:text-orange-500">
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
            </div> --}}


    <div id="features" class="mt-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="md:w-2/3 lg:w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-6 h-6 text-sky-500">
                    <path fill-rule="evenodd"
                        d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                        clip-rule="evenodd"></path>
                </svg>
                <h2 class="my-8 text-2xl font-bold text-orange-500 md:text-4xl">
                    Продукция первой необходимости для вашего автомобиля
                </h2>
                Мы предлагаем широкий выбор высококачественных масел, фильтров и аккумуляторов для вашего автомобиля, а
                также большой ассортимент химических и косметических средств для его обслуживания</p>
            </div>
            <div
                class="mt-16 grid lg:divide-x sm:divide-x divide-y divide-orange-500 overflow-hidden rounded-3xl border-1 border-orange-500 text-gray-600 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                <div
                    class="group relative hover:bg-orange-500 transition hover:z-[1]  hover:shadow-2xl hover:shadow-gray-600/10 transition duration-300">
                    <div class="relative space-y-8 pt-12 pb-4 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2 lg:min-h-48 sm:min-h-36 ">
                            <h5 class="text-xl font-semibold text-gray-700 transition group-hover:text-white">
                                Масла и жидкости
                            </h5>
                            <p class="text-gray-600 group-hover:text-white">
                                Смело повышайте производительность и срок службы своего двигателя
                            </p>
                        </div>
                        <a href="{{ route('oil') }}"
                            class="h-24 mt-0 flex items-center justify-between group-hover:text-white">
                            <span class="text-sm">Подробнее</span>
                            <i class="fa-solid fa-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div
                    class="group relative hover:bg-orange-500 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10 transition duration-300">
                    <div class="relative space-y-8 pt-12 pb-4 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341134.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2 lg:min-h-48 sm:min-h-36 ">
                            <h5 class="text-xl font-semibold text-gray-700 transition group-hover:text-white">
                                Фильтры
                            </h5>
                            <p class="text-gray-600 group-hover:text-white">
                                Обеспечьте безопасность и долговечность автомобиля, используя качественные фильтры
                            </p>
                        </div>
                        <a href="{{ route('filters') }}"
                            class="h-24 mt-0 flex items-center justify-between group-hover:text-white">
                            <span class="text-sm">Подробнее</span>
                            <i class="fa-solid fa-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div
                    class="group relative hover:bg-orange-500 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10 transition duration-300">
                    <div class="relative space-y-8 pt-12 pb-4 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341160.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="lg:min-h-48 sm:min-h-36 space-y-2">
                            <h5 class="text-xl font-semibold text-gray-700 transition group-hover:text-white">
                                Аккумуляторы
                            </h5>
                            <p class="text-gray-600 group-hover:text-white">
                                Обеспечьте надежную работу электрооборудования и уверенный запуск двигателя
                            </p>
                        </div>
                        <a href="{{ route('accum') }}"
                            class="h-24 mt-0 flex items-center justify-between group-hover:text-white">
                            <span class="text-sm">Подробнее</span>
                            <i class="fa-solid fa-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div
                    class="group hover:bg-orange-500 relative transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10 transition duration-300">
                    <div class="relative space-y-8 pt-12 pb-4 p-8">
                        <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12" width="512"
                            height="512" alt="burger illustration">

                        <div class="space-y-2 lg:min-h-48 sm:min-h-36 ">
                            <h5 class="text-xl font-semibold text-gray-700 transition group-hover:text-white">
                                Химия
                            </h5>
                            <p class="text-gray-600 group-hover:text-white">
                                Защитите кузов своей любимой машины от коррозии и износа
                            </p>
                        </div>
                        <a href="{{ route('chemistry') }}"
                            class="h-24 mt-0 flex items-center justify-between group-hover:text-white">
                            <span class="text-sm">Подробнее</span>
                            <i class="fa-solid fa-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="solution" class="mt-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="md:w-2/3 lg:w-1/2">
                <h2 class="my-8 text-2xl font-bold text-orange-500 md:text-4xl">
                    Другие необходимые товары для вашего автомобиля
                </h2>
                <p class="text-gray-600 text-gray-300">Широкий выбор антифризов, тосолов, электрооборудования и
                    аксессуаров для вашего автомобиля.
                    Качественные товары по выгодным ценам - защита и комфорт вашего транспортного средства
                </p>
            </div>
            <div
                class="space-y-6 justify-between text-gray-600 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                <div class="trans__img md:w-5/12 lg:w-4/9 my-auto">
                    <img class="" src="{{ asset('images/comfort.svg') }}" alt="image" loading="lazy"
                        width="" height="" class="w-full">
                </div>
                <div class="trans__content sm:w-12/12 md:w-7/12 lg:w-5/9">
                    <div class=" divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="divide-y space-y-4 divide-gray-100 divide-gray-800" id="accordion-flush"
                            data-accordion="collapse" data-active-classes="bg-transparent text-gray-900 text-white"
                            data-inactive-classes="text-gray-500 text-gray-400">
                            <div id="accordion-collapse-heading-1 cursor-pointer">
                                <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                        <img class="w-10 h-10 m-auto" src="{{ asset('images/cog-svgrepo-com.svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-orange-500">Антифризы и тосолы
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
                                        Если клиенту нужно что-то другое, доставим в течение 1-3 дней.</p>
                                </div>
                            </div>
                            <div id="accordion-collapse-heading-2 cursor-pointer">
                                <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-2">
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                        <img class="w-9 h-9 m-auto" src="{{ asset('images/lightning-bolt-weather-storm-energy-electricity-svgrepo-com(2).svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-orange-500">Электрооборудование
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
                                        <img class="w-9 h-9 m-auto" src="{{ asset('images/brush-svgrepo-com(2).svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-orange-500">Аксессуары
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
                            <div id="accordion-collapse-heading-6 cursor-pointer">
                                <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                    data-accordion-target="#accordion-collapse-body-6" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-5">
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                        <img class="w-11 h-11 m-auto" src="{{ asset('images/fire-extinguisher-solid-svgrepo-com(3).svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-orange-500">Другое
                                        </h3>
                                        <p class="text-gray-500 text-gray-400"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="accordion-collapse-body-6" class="hidden"
                                aria-labelledby="accordion-collapse-heading-6">
                                <div class="p-2">
                                    <ul>
                                        <li class="mb-2 text-gray-500 text-gray-400">Смазки: литол, солидол, ШРУС,
                                            смазка 158, ЦИАТИМ, Фиол, смазки для консервации, высокотемпературные
                                            смазки, вазелин, графитная смазка, смазки для цепей и мн. др. </li>
                                        <li class="mb-2 text-gray-500 text-gray-400">Инструменты: ключи, головки,
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
                            <div id="accordion-collapse-heading-4 cursor-pointer">
                                <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-4">
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-blue-100">
                                        <img class="w-9 h-9 m-auto" src="{{ asset('images/wrench-svgrepo-com.svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-[#3476ff]">Запчасти на заказ
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
                                        получения и осмотра деталей.
                                    </p>
                                    <p class="mb-2 text-gray-500 text-gray-400 ">
                                        <strong>Примечание: при заказе запчастей может понадобится VIN-код вашего
                                            автомобиля</strong>
                                    </p>
                                </div>
                            </div>

                            <div id="accordion-collapse-heading-5 cursor-pointer">
                                <div class="mt-8 flex gap-4 md:items-center cursor-pointer"
                                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-5">
                                    <div class="w-12 h-12 flex gap-4 rounded-full bg-purple-100">
                                        <img class="w-10 h-10 m-auto" src="{{ asset('images/wheel-svgrepo-com.svg') }}" alt="image" loading="lazy" width=""
                                        height="" class="w-full">
                                    </div>
                                    <div class="w-5/6">
                                        <h3 class="font-semibold text-lg text-purple-400">
                                            Пункты замены масел, антифризов, фильтров <br> Шиномонтаж
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
                                            <strong>Пункт замены масла на улице Базарова, 62</strong> <br>
                                            <a href="tel:+79377089152 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79377089152
                                            </a>
                                            <a href="tel:+79026592765 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79026592765
                                            </a>
                                            <a href="tel:+79044272069 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79044272069
                                            </a>
                                        </li>
                                        <li class="mb-2 text-gray-500 text-gray-400">
                                            <strong>Пункт замены на улице 22 Партсъезда, 8А</strong> <br>
                                            <a href="tel:+79272587353 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79272587353
                                            </a>
                                            <a href="tel:+79020905587 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79020905587
                                            </a>
                                        </li>
                                        <li class="mb-2 text-gray-500 text-gray-400">
                                            <strong>Монтаж шин на улице 22 Партсъезда, 8А</strong> <br>
                                            <a href="tel:+79275355315 "
                                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                                +79275355315
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gifts" class="relative mt-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <h1 class="text-center text-4xl font-bold text-orange-500 md:text-5xl">
                <strong class="text-gray-700">Всегда в продаже <br> </strong>
                Подарочные сертификаты
            </h1>
            <div class="relative row mt-10">
                <div class="mt-6 m-auto space-y-6 md:w-5/12 lg:w-5/12 ">
                    <p class=" text-xl text-gray-600 leading-loose" style="line-height: 2rem;">
                        Подарочный сертификат - идеальный выбор для автолюбителя. Гарантированно полезный подарок,
                        который не оставит равнодушным ни одного автовладельца.
                        Для наших постоянных клиентов мы предлагаем уникальные скидочные карты
                    </p>
                </div>
                <div class="mt-6 m-auto space-y-6 md:w-5/12 lg:w-5/12">
                    <img src="{{ asset('images/gift.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="text-gray-600 text-gray-300 mt-40" id="reviews">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="mb-20 space-y-4 px-6 md:px-0">
                <h2 class="text-center text-4xl font-bold text-orange-500 md:text-4xl">
                    Отзывы
                </h2>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4">
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">
                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Алексей Бычков</h6>
                            <p class="text-sm text-gray-500 text-gray-600">5 сентября 2023 г.</p>
                        </div>
                    </div>
                    <p class="mt-8">Большой выбор фильтров, масел, как моторных, так и трансмиссионных, а так же
                        жидкости для гидроусилителей и гидроподвески. Разные виды пластичных смазок и антифризов. Так же
                        здесь есть автохимия и присадки, и многое другое. Если в чем-то сомневаетесь - сотрудники Вам
                        помогут сделать выбор</p>
                </div>
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">
                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Jack Daniels</h6>
                            <p class="text-sm text-gray-500 text-gray-300">29 марта 2024 г.</p>
                        </div>
                    </div>
                    <p class="mt-8">Отличный магазин! Постоянный клиент. От инструмента до масел и химии, всегда
                        выручает! Персонал вежливый, профи своего дела, всегда помогут в выборе товара! Рекомендую!!!
                    </p>
                </div>
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">

                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Людмила</h6>
                            <p class="text-sm text-gray-500 text-gray-300">6 декабря 2023 г.</p>
                        </div>
                    </div>
                    <p class="mt-8">Хорошее обслуживание. Помогли подобрать масло для авто. Так же продают дворники
                        лампы аккумуляторы смазки т.д. так же выдают скидочные карты</p>
                </div>
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">

                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Pavel Mihaliov</h6>
                            <p class="text-sm text-gray-500 text-gray-300">21 сентября 2023 г.</p>
                        </div>
                    </div>
                    <p class="mt-8">Менял здесь масло. Молодцы ребята, быстро и качественно. Предлагают на выбор за
                        400₽ путем откачки аппаратом и 600₽ классическим способом. Дороже, потому что защиту снимать
                        надо.</p>
                </div>
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">
                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Роман Роман</h6>
                            <p class="text-sm text-gray-500 text-gray-300">19 октября 2023 г.</p>
                        </div>
                    </div>
                    <p class="mt-8"> Адекватные ребята !! Цены норм! Пару раз зашёл, на мои тупые вопросы
                        ответили-разжевали .
                        Теперь только сюда !
                        Не как в других магазинах воды</p>
                </div>
                <div
                    class="aspect-auto inline-block p-8 border rounded-3xl bg-white border-orange-500 shadow-2xl shadow-none">
                    <div class="flex gap-4">
                        <div>
                            <h6 class="text-lg font-medium text-orange-500">Роман Тынянский</h6>
                            <p class="text-sm text-gray-500 text-gray-300">28 января 2023 г.</p>
                        </div>
                    </div>
                    <p class="mt-8">Самый лучший магазин , обслуживание на высоте , посоветуют, приветливое общение,
                        скидки приятные, всем советую этот чудесный магазин. Мне очень нравится этот магазин.</p>
                </div>
            </div>
            <div class="mt-5  mb-16 flex justify-center ">
                <a href="https://yandex.ru/maps/org/avtomag/1035992373/reviews/?ll=45.394878%2C50.081285&z=14" target="_blank"
                    class=" hover:color-black relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-2xl before:bg-[#ff5a1f] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                    <span class="relative text-base font-semibold text-white text-dark">Смотреть еще</span>
                </a>
            </div>
        </div>
    </div>
    <div id="blog" class="mt-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-orange-500 md:text-4xl">Мы здесь</h2>
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
                        <h3 class="text-2xl font-semibold text-orange-500 map__title">
                            Город Камышин, улица Базарова, 62
                        </h3>
                        <div class="map__phones">
                            <a href="tel:+79044272069"
                                class="text-lg  block mb-2 text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                +79044272069
                            </a>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Понедельник-суббота
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 18:00, без перерыва
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Воскресенье
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 16:00, без перерыва
                        </p>
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
                        <h3 class="text-2xl font-semibold text-orange-500 map__title">
                            Город Камышин, Улица 22 Партсъезда, 8А
                        </h3>
                        <div class="map__phones">
                            <a href="tel:+79585454287"
                                class="text-lg  block mb-2 text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                +79585454287
                            </a>
                            <a href="tel:8-844-57-93200"
                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                +78445793200
                            </a>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Понедельник-суббота
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 18:00, без перерыва
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Воскресенье
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 16:00, без перерыва
                        </p>

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
                        <h3 class="text-2xl font-semibold text-orange-500 map__title">
                            Город Камышин, Улица Некрасова, 2
                        </h3>
                        <div class="map__phones">
                            <a href="tel:+79061740453"
                                class="text-lg block  mb-2 text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                +79061740453
                            </a>
                            <a href="tel:8-844-57-47800,"
                                class="text-lg  block text-gray-600 text-gray-300 hover:text-orange-500 transition">
                                +78445747800
                            </a>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Понедельник-пятница
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 18:00, без перерыва
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Суббота
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            8:30 - 16:00, без перерыва
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500 font-bold">
                            Воскресенье
                        </p>
                        <p class="text-sm leading-relaxed text-gray-500">
                            Выходной
                        </p>
                    </div>

                </div>
            </div>
            <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                <a href="tel:"
                    class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-2xl before:bg-[#ff5a1f] before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                    <span class="relative text-base font-semibold text-white">Позвоните</span>
                </a>
                <a href="mailto:"
                    class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-2xl before:border before:border-transparent before:bg-gray-500 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 before:border-gray-700 before:bg-gray-800 sm:w-max">
                    <span class="relative text-base font-semibold text-primary text-white">Напишите</span>
                </a>
            </div>
        </div>
    </div>
@endsection
