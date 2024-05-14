@extends('layouts.default')

@section('content')
    <div id="about" class="home relative">
        <div class="home relative" id="home">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-orange-500 to-white"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-white to-orange-500"></div>
            </div>
        </div>
        <div class="pt-36 max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="md:w-2/3 lg:w-1/2">
                <h2 class="my-8 text-2xl font-bold text-orange-500 md:text-4xl">
                    О сети магазинов Автомаг
                </h2>
                Компания Автомаг работает в г. Камышине более 20 лет. За это время мы наработали надежные и долгосрочные
                связи с добросовестными, проверенными временем поставщиками. Для нас всегда оставалось главным приоритетом
                подлинность, оригинальность наших товаров. Мы прилагаем все усилия, чтобы на полки наших магазинов не попала
                контрафактная или сомнительного происхождения продукция. </p>
            </div>
        </div>
    </div>

    @include('includes.features')
@endsection
