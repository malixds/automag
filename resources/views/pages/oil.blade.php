@extends('layouts.default')

@section('content')
{{-- <main class="space-y-40 mb-40"> --}}
    <div id="solution" class="mt-20">
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
                class="space-y-6 justify-between text-orange-400 md:flex flex-row-reverse md:gap-6 md:space-y-0 lg:gap-12">
                <div class="md:5/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-orange-400 md:text-4xl">
                        Иностранные производители
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Mobil, Shell, CASTROL, Motul, Elf, Ravenol, Repsol, Bardahl, Kixx, Takayama, Addinol, Zic,
                        Oskar, Idemitsu, NGN, Repsol, Totachi, Xado, TAKAYAMA FORD HYUNDAI MAZDA MERCEDES MITSUBISHI
                        NISSAN SKODA SUBARU TOYOTA VOLKSWAGEN
                    </p>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Если чего не окажется, доставим в течении 1-3 дней.
                    </p>
                    <h2 class="text-3xl font-bold text-orange-400 md:text-4xl ">
                        Отечественные производители
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Лукойл, Газпромнефть, Роснефть, Синтек, ВМП-Авто, Rolf, G-energy
                    </p>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Если чего не окажется, доставим в течении 1-3 дней.
                    </p>
                </div>
                <div class="md:7/12 lg:w-1/2">
                    <h2 class="text-3xl font-bold text-orange-400 md:text-4xl">
                        Масла и жидкости
                    </h2>
                    <p class="my-8 text-gray-600 text-gray-300">
                        Всегда в наличии огромный ассортимент масел для автомобилей иностранного и отечественного
                        производства,
                        а также промышленного и станочного оборудования
                    </p>
                    <div class="divide-y space-y-4 divide-gray-100 divide-gray-800">
                        <div class="mt-8 flex gap-4 md:items-center">
                            <div class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-400 m-auto font-bold">1</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Моторные
                                </h3>
                                <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div
                                class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-400 m-auto font-bold">2</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Трансмиссионные</h3>
                                <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div
                                class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-400 m-auto font-bold">3</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300"> Масла для катеров,
                                    моторных лодок, садовой техники, инструмента</h3>
                                <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div
                                class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-400 m-auto font-bold">4</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Промышленные масла
                                    (гидравлические, трансформаторные, СОЖи, компрессорные) </h3>
                                <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p>
                            </div>
                        </div>
                        <div class="pt-4 flex gap-4 md:items-center">
                            <div
                                class="w-12 h-12 flex gap-4 rounded-full bg-orange-100">
                                <p class="text-orange-400 m-auto font-bold">5</p>
                            </div>
                            <div class="w-5/6">
                                <h3 class="font-semibold text-lg text-gray-700 text-teal-300">Гидравлические</h3>
                                <p class="text-gray-500 text-gray-400">Asperiores nemo possimus nesciunt quam
                                    mollitia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.features')
@endsection
