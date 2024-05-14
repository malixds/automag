@extends('layouts.default')

@section('content')
<div class="home relative" id="home">
    <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
        <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-500 to-white"></div>
        <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-500"></div>
    </div>
</div>
<main class="space-y-40 mb-40">
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
                class="space-y-6 justify-between text-gray-600 md:flex md:flex-row md:gap-6 md:space-y-0 lg:gap-12">
                <div class="md:7/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold  text-orange-500 md:text-4xl">
                        Фильтры
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Всегда в наличии огромный ассортимент фильтров для автомобилей и оборудования
                    </p>
                    <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="mt-8 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">1</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Масляные
                                </h3>
                                <p class="text-gray-500 text-gray-400">Удаление загрязнений из моторного масла для защиты двигателя</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">2</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Воздушные</h3>
                                <p class="text-gray-500 text-gray-400">Очистка воздуха, поступающего в двигатель, от пыли и загрязнений</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">3</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300"> Топливные</h3>
                                <p class="text-gray-500 text-gray-400">Очистка топлива перед подачей в двигатель для предотвращения повреждений</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">4</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Салонные</h3>
                                <p class="text-gray-500 text-gray-400">Фильтрация воздуха в салоне от пыли, аллергенов и запахов</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">5</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Гидравлические</h3>
                                <p class="text-gray-500 text-gray-400">Удаление загрязнений из гидравлических систем для обеспечения их надежной работы</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:5/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-orange-500 md:text-4xl">
                        Производители
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        MANN- Filter, Filtron, SCT, Donaldson, Knecht/Mahle, Bosch, Toyota, Hyundai/Kia, Volkswagen,
                        Renault, Sakura и многие др
                    </p>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Если чего-то не окажется, доставим необходимый товар в Камышин в течение 1-3 дней
                    </p>
                    <div class="lg:block sm:hidden">
                        <img src="{{ asset('images/man.svg') }}" alt="image" loading="lazy" width=""
                            height="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.features')
@endsection
