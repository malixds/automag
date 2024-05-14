<header class="astro-ARE2YTNH">
    <nav class="absolute z-10 w-full border-b border-black/5 dark:border-white/5 lg:border-transparent astro-ARE2YTNH">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative flex flex-wrap items-center justify-between gap-6 py-3 md:gap-0 md:py-4 astro-ARE2YTNH">
                <div class="relative z-20 flex w-full justify-between md:px-0 lg:w-max astro-ARE2YTNH">
                    <a href="/#home" aria-label="logo" class="flex items-center space-x-2 astro-ARE2YTNH">
                        <div aria-hidden="true" class="flex space-x-1 astro-ARE2YTNH">
                            <div class="h-4 w-4 rounded-2xl bg-gray-900 dark:bg-white astro-ARE2YTNH"></div>
                            <div class="h-6 w-2 bg-primary astro-ARE2YTNH"></div>
                        </div>
                        <span class="text-2xl font-bold text-orange-500 astro-ARE2YTNH">АВТО<span
                                class="text-black">МАГ</span></span>
                    </a>
                    {{-- onclick="changeStyleNav()" --}}
                    <div class="relative flex max-h-10 items-center lg:hidden astro-ARE2YTNH">
                        <button onclick="" aria-label="humburger" id="hamburger"
                            class="relative -mr-6 p-6 astro-ARE2YTNH">
                            <div aria-hidden="true" id="line"
                                class="m-auto h-0.5 w-5 rounded-2xl bg-sky-900 transition duration-300 dark:bg-gray-300 astro-ARE2YTNH">
                            </div>
                            <div aria-hidden="true" id="line2"
                                class="m-auto mt-2 h-0.5 w-5 rounded-2xl bg-sky-900 transition duration-300 dark:bg-gray-300 astro-ARE2YTNH">
                            </div>
                        </button>
                    </div>
                </div>
                <div id="navLayer" aria-hidden="true"
                    class="fixed inset-0 z-10 h-screen w-screen origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl transition duration-500 lg:hidden astro-ARE2YTNH">
                </div>
                <div id="navlinks"
                    class="navlinks top-full left-0 z-20 w-full origin-top-right flex-col flex-wrap justify-end gap-6 rounded-3xl p-8 shadow-2xl shadow-gray-600/10 transition-all duration-300 lg:visible lg:relative lg:flex lg:w-7/12 lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none astro-ARE2YTNH">
                    <div class="w-full text-gray-600 lg:w-auto lg:pr-4 lg:pt-0 astro-ARE2YTNH">
                        <ul class="flex flex-col gap-6 tracking-wide lg:flex-row lg:gap-0 lg:text-sm astro-ARE2YTNH">
                            <li class="astro-ARE2YTNH">
                                <a href="/"
                                    class="text-gray-500 hover:text-orange-500 block transition md:px-4 astro-ARE2YTNH navlinks__item">
                                    <span class="">Домой</span>
                                </a>
                            </li>
                            <li class="astro-ARE2YTNH">
                                <a href="#features"
                                    class="text-gray-500 hover:text-orange-500 block transition md:px-4 astro-ARE2YTNH navlinks__item">
                                    <span class="">Услуги</span>
                                </a>
                            </li>
                            <li class="astro-ARE2YTNH">
                                <a href="/#gifts"
                                    class="text-gray-500 hover:text-orange-500 block transition md:px-4 astro-ARE2YTNH navlinks__item">
                                    <span class="">Сертификаты</span>
                                </a>
                            </li>
                            <li class="astro-ARE2YTNH">
                                <a href="/#reviews"
                                    class="text-gray-500 hover:text-orange-500 block transition md:px-4 astro-ARE2YTNH navlinks__item">
                                    <span class="astro-ARE2YTNH">Отзывы</span>
                                </a>
                            </li>
                            <li class="astro-ARE2YTNH">
                                <a href="/#blog"
                                    class="text-gray-500 hover:text-orange-500 block transition md:px-4 astro-ARE2YTNH navlinks__item">
                                    <span class="astro-ARE2YTNH">Карты</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 lg:mt-0 astro-ARE2YTNH">
                        <button type="button" data-modal-target="static-modal"
                            data-modal-toggle="static-modal"class="before:bg-orange-500 relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-2xl before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-ARE2YTNH">
                            <span class="relative text-sm font-semibold text-white astro-ARE2YTNH">Контакты</span>
                        </button>
                    </div>
                </div>
                <script>
                    const hamburger = document.getElementById('hamburger');
                    const navlinks = document.getElementById('navlinks');
                    const links = navlinks.getElementsByTagName('a');
                    console.log('links', links)
                    const windowWidth = window.innerWidth;

                    window.addEventListener('resize', function() {
                        console.log('asdasd');
                        if (hamburger.classList.contains('toggled')) {
                            navlinks.style.display = 'flex';
                        } else {
                            // Если класс 'toggled' отсутствует, можно выполнить другие действия
                            navlinks.style.display = 'none';
                        }
                    });
                    hamburger.addEventListener('click', function() {
                        if (navlinks.style.display === 'none' || navlinks.style.display === '') {
                            navlinks.style.display = 'inline-block';
                        } else {
                            navlinks.style.display = 'none';
                        }
                    });

                    if (hamburger)
                        hamburger.addEventListener('click', function() {
                            // Переключаем класс у навигационного меню
                            navlinks.classList.toggle('active');
                        });

                    // Добавляем обработчик события для каждой ссылки
                    for (let i = 0; i < links.length; i++) {
                        links[i].addEventListener('click', function() {
                            navlinks.classList.remove('active');
                        });
                    }
                </script>
            </div>
        </div>
    </nav>
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="mymodal relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-orange-500">
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-2">
                    <h6 class="text-center font-bold leading-relaxed text-orange-500 text-xl">
                        Адреса и график работы магазинов
                    </h6>
                    <div class="modal__services row">
                        <div class="col-lg-4 col-sm-12">
                            <p class="text-md leading-relaxed text-orange-500 font-bold">
                                Город Камышин, улица Базарова, 62
                            </p>
                            <a href='tel:+79044272069' class="text-sm leading-relaxed text-gray-500 ">
                                +79044272069 <br>
                            </a>
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
                        <div class="col-lg-4 col-sm-12">
                            <p class="text-md leading-relaxed text-orange-500 font-bold">
                                Город Камышин, Улица 22 Партсьезда, 8А
                            </p>
                            <a href='tel:+79585454287' class="text-sm leading-relaxed text-gray-500 ">
                                +79585454287 <br>
                            </a>
                            <a href='tel:8-844-57-93200' class="text-sm leading-relaxed text-gray-500 ">
                                +78445793200 <br>
                            </a>
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
                        <div class="col-lg-4 col-sm-12 sm:items-center">
                            <p class="text-md leading-relaxed text-orange-500 font-bold">
                                Офис-склад в Камышине на Улице Некрасова, 2
                            </p>
                            <a href='tel:+79061740453' class="text-sm leading-relaxed text-gray-500 ">
                                +79061740453 <br>
                            </a>
                            <a href='tel:8-844-57-47800' class="text-sm leading-relaxed text-gray-500 ">
                                +78445747800 <br>
                            </a>
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
                <div class="p-4 md:p-5 space-y-2">
                    <h6 class="text-center font-bold leading-relaxed text-orange-500 text-xl">
                        Замена масла и шиномонтаж
                    </h6>
                    <div class="modal__services row">
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-md leading-relaxed text-orange-500 font-bold">
                                Город Камышин, улица Базарова, 62
                            </p>
                            <a href='tel:+79377089152' class="text-sm leading-relaxed text-gray-500 ">
                                +79377089152 Сергей | Мастер <br>
                            </a>
                            <a href='tel:+79026592765' class="text-sm leading-relaxed text-gray-500 ">
                                +79026592765 Сергей | Мастер <br>
                            </a>
                            <a href='tel:+79044272069' class="text-sm leading-relaxed text-gray-500 ">
                                +79044272069 Магазин <br>
                            </a>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="text-md leading-relaxed text-orange-500 font-bold">
                                Город Камышин, улица 22 Партсъезда, 8А
                            </p>
                            <a href='tel:+79272587353' class="text-sm leading-relaxed text-gray-500 ">
                                +79272587353 Юрий | Мастер <br>
                            </a>
                            <a href='tel:+79020905587' class="text-sm leading-relaxed text-gray-500 ">
                                +79020905587 Дмитрий | Мастер <br>
                            </a>
                            <a href='tel:+79585454287' class="text-sm leading-relaxed text-gray-500 ">
                                +79585454287 Магазин <br>
                            </a>
                            <a href='tel:+79275355315' class="text-sm leading-relaxed text-gray-500 ">
                                <strong>+79275355315 Руслан | Шиномонтаж</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    window.addEventListener('resize', function() {
        var screenWidth = window.innerWidth;
        var navLinks = document.getElementById('navlinks');

        if (screenWidth > 1024) {
            navLinks.style.display = 'flex';
        } else {
            toggleNavlinksDisplay = 'none';
        }
    });
</script>
