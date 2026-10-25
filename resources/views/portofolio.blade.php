<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Habib Masyhur | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- @pwaHead --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Caveat:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#fafafa] text-[#111] overflow-x-hidden transition-colors duration-500">
    <div id="loader"
        class="fixed inset-0 bg-white dark:bg-[#0f0f0f] z-9999 flex flex-col items-center justify-center transition-opacity duration-700">
        <h1 class="loader-logo">
            Babbibub<span>.</span>
        </h1>
    </div>
    @include('partials.navbar')
    @include('partials.social-sidebar')
    <main>
        <div class="grid-bg">
            @include('sections.about')
            @include('sections.skills')
            @include('sections.experience')
            @include('sections.projects')
            @include('sections.certificates')
        </div>
    </main>
    @include('partials.footer')
    <script>
        document.body.style.overflow = "hidden";
        window.addEventListener("load", () => {
            const loader = document.getElementById("loader");
            setTimeout(() => {
                loader.classList.add("opacity-0");
                document.body.style.overflow = "auto";
                setTimeout(() => {
                    loader.remove();
                }, 700);
            }, 1800);
        });
    </script>
    {{-- @laravelPwa
    @pwaUpdateNotifier
    @pwaInstallButton --}}
</body>

</html>
