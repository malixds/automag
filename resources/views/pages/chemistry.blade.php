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
            <h2 class="text-3xl font-bold text-orange-500 md:text-4xl">
                Химия
            </h2>
            <p class="my-8 text-gray-600 text-gray-300">
                Всегда в наличии широкий ассортимент автомобильной химии для ухода за вашим автомобилем
            </p>
            <div
                class="space-y-6 justify-between text-gray-600 md:flex md:flex-row md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                <div class="md:7/12 lg:w-1/2">
                    <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="mt-8 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">1</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Присадки в масла
                                </h3>
                                <p class="text-gray-500 text-gray-400">Улучшение свойств и производительности моторных масел</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">2</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Очистители различных
                                    систем (охлаждающих, маслянных, тормозных) </h3>
                                <p class="text-gray-500 text-gray-400">Удаление загрязнений для поддержания эффективной работы систем</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">3</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Раскоксовки поршневых
                                    колец</h3>
                                <p class="text-gray-500 text-gray-400">Устранение углеродных отложений для восстановления производительности двигателя</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">4</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Полироли</h3>
                                <p class="text-gray-500 text-gray-400">Повышение блеска и защита поверхностей от коррозии</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">5</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Герметики</h3>
                                <p class="text-gray-500 text-gray-400">Создание герметичных соединений для предотвращения утечек</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">6</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Жидкие ключи</h3>
                                <p class="text-gray-500 text-gray-400">Смазка и защита различных соединений и механизмов</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:7/12 lg:w-1/2">
                    <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">7</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Размораживатели</h3>
                                <p class="text-gray-500 text-gray-400">Разрушение льда и обледенения для обеспечения безопасности на дороге</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">8</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Шампуни</h3>
                                <p class="text-gray-500 text-gray-400">Очистка и уход за поверхностями различных материалов</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">9</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Краска в баллончиках
                                </h3>
                                <p class="text-gray-500 text-gray-400">Легкое и равномерное нанесение краски на различные поверхности</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">10</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Антигели и
                                    размораживатели для дизеля</h3>
                                <p class="text-gray-500 text-gray-400">Предотвращение замерзания дизельного топлива и выхода из строя топливной аппаратуры</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">11</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Антигравий</h3>
                                <p class="text-gray-500 text-gray-400">Защита кузова автомобиля от ударов и сколов, от камней и гравия</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-500 m-auto font-bold">12</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Мастика/Растворители
                                </h3>
                                <p class="text-gray-500 text-gray-400">Создание герметичных соединений и заполнение трещин и щелей. Разбавление красок, лаков и других растворимых веществ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.features')
@endsection
