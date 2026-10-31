<nav class="site-nav fixed top-6 left-1/2 z-50 hidden -translate-x-1/2 lg:block">
    <div class="flex items-center gap-1 rounded-full bg-[#111] p-1.5 text-sm font-medium text-white">
        <a href="#about" data-nav="about" class="is-active rounded-full px-4 py-2 transition hover:bg-white/10">About</a>
        <a href="#skills" data-nav="skills" class="rounded-full px-4 py-2 transition hover:bg-white/10">Skills</a>
        <a href="#experience" data-nav="experience" class="rounded-full px-4 py-2 transition hover:bg-white/10">Experience</a>
        <a href="#projects" data-nav="projects" class="rounded-full px-4 py-2 transition hover:bg-white/10">Projects</a>
        <a href="#certificates" data-nav="certificates" class="rounded-full px-4 py-2 transition hover:bg-white/10">Certificates</a>
    </div>
</nav>
<div class="site-nav-mobile fixed inset-x-0 bottom-4 z-[999] flex justify-center lg:hidden">
    <div class="flex w-[96%] max-w-md items-stretch justify-between rounded-[28px] border border-gray-200 bg-white/90 px-1 py-2 shadow-2xl backdrop-blur-xl">
        <a href="#about" data-nav="about" class="is-active flex flex-1 flex-col items-center gap-1 text-gray-500 transition hover:text-[#a00000]">
            <i class="fa-regular fa-user text-base"></i>
            <span class="text-[9px]">About</span>
        </a>
        <a href="#skills" data-nav="skills" class="flex flex-1 flex-col items-center gap-1 text-gray-500 transition hover:text-[#a00000]">
            <i class="fa-solid fa-code text-base"></i>
            <span class="text-[9px]">Skills</span>
        </a>
        <a href="#experience" data-nav="experience" class="flex flex-1 flex-col items-center gap-1 text-gray-500 transition hover:text-[#a00000]">
            <i class="fa-solid fa-briefcase text-base"></i>
            <span class="text-[9px]">Experience</span>
        </a>
        <a href="#projects" data-nav="projects" class="flex flex-1 flex-col items-center gap-1 text-gray-500 transition hover:text-[#a00000]">
            <i class="fa-regular fa-folder-open text-base"></i>
            <span class="text-[9px]">Projects</span>
        </a>
        <a href="#certificates" data-nav="certificates" class="flex flex-1 flex-col items-center gap-1 text-gray-500 transition hover:text-[#a00000]">
            <i class="fa-regular fa-id-card text-base"></i>
            <span class="text-[9px]">Certificates</span>
        </a>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = [...document.querySelectorAll('[data-nav]')];
        const ids = ['about', 'skills', 'experience', 'projects', 'certificates'];
        const sections = ids.map((id) => document.getElementById(id)).filter(Boolean);

        const setActive = (id) => {
            links.forEach((link) => link.classList.toggle('is-active', link.dataset.nav === id));
        };

        const currentSection = () => {
            const marker = window.scrollY + Math.min(window.innerHeight * 0.35, 220);
            let current = sections[0]?.id;

            sections.forEach((section) => {
                const top = section.getBoundingClientRect().top + window.scrollY;
                if (top <= marker) {
                    current = section.id;
                }
            });

            const nearBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 8;
            if (nearBottom) {
                current = sections[sections.length - 1]?.id;
            }

            return current;
        };

        const update = () => {
            const id = currentSection();
            if (id) {
                setActive(id);
            }
        };

        update();
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('hashchange', update);
    });
</script>