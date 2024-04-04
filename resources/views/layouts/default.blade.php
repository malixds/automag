<!DOCTYPE html>
<html lang="en" class="astro-4L22QGTD">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="generator" content="Astro v1.9.2">
    <meta name="description" content="Template built with tailwindcss using Tailus blocks v2">
    <title>Tailus astro theme</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/index.9d5489f2.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="astro-4L22QGTD">
@include('includes.header')
@yield('content')



<!-- <body class="bg-gray-900 astro-4L22QGTD">
    <main class="space-y-40 mb-40">

    </main>
</body> -->

@include('includes.footer')
<script type="module">
        let e = !1;
        const s = document.querySelector("#navlinks"),
            l = document.querySelector("#hamburger"),
            t = document.querySelector("#navLayer"),
            i = [...s.querySelector("ul").children];

        function a() {
            e ? (s.classList.add("!visible", "!scale-100", "!opacity-100", "!lg:translate-y-0"), l.classList.add("toggled"),
                t.classList.add("origin-top", "scale-y-100")) : (s.classList.remove("!visible", "!scale-100",
                "!opacity-100", "!lg:translate-y-0"), l.classList.remove("toggled"), t.classList.remove(
                "origin-top", "scale-y-100"))
        }
        l.addEventListener("click", () => {
            e = !e, a()
        });
        i.forEach(c => {
            c.addEventListener("click", () => {
                e = !e, a()
            })
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
