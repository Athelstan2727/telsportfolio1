@extends('layouts.app')

@section('content')

<nav id="dynamic-nav" class="fixed z-50 flex flex-col items-end justify-center transition-all duration-700 ease-[cubic-bezier(0.76,0,0.24,1)]
    top-0 right-0 h-screen w-full lg:w-1/2 p-12 pointer-events-none">
    
    <div id="menu-list" class="flex flex-col space-y-4 items-end pointer-events-auto group/menu p-8 rounded-2xl transition-all duration-500">
        
        <a href="#about-modal" class="nav-link block font-bold uppercase leading-none text-white transition-all duration-500 
            text-6xl md:text-8xl 
            hover:text-indigo-500 group-hover/menu:text-gray-800 hover:!text-indigo-500">
            About Me
        </a>

        <a href="#projects-list" class="nav-link block font-bold uppercase leading-none text-white transition-all duration-500 
            text-6xl md:text-8xl 
            hover:text-indigo-500 group-hover/menu:text-gray-800 hover:!text-indigo-500">
            Projects
        </a>

        <a href="mailto:athelstanbundalian@gmail.com" class="nav-link block font-bold uppercase leading-none text-white transition-all duration-500 
            text-6xl md:text-8xl 
            hover:text-indigo-500 group-hover/menu:text-gray-800 hover:!text-indigo-500">
            Contact
        </a>

    </div>
</nav>

<div class="relative w-full flex flex-col lg:flex-row">

    <div class="group/left w-full lg:w-1/2 min-h-screen relative overflow-hidden border-r border-white/10">
        
        <div class="absolute inset-0 z-0 bg-black">
             <img src="{{ asset('images/profile.jpg') }}" 
                  class="w-full h-full object-cover opacity-40 grayscale group-hover/left:opacity-100 group-hover/left:grayscale-0 transition duration-1000 ease-in-out scale-100 group-hover/left:scale-105" 
                  alt="Athelstan Profile">
             <div class="absolute inset-0 bg-black/80 group-hover/left:bg-black/10 transition duration-1000"></div>
        </div>

        <div class="relative z-10 p-12 h-full flex flex-col justify-between pointer-events-none">
            <div>
                <h1 class="text-xl font-bold uppercase tracking-widest text-gray-500 group-hover/left:text-white transition duration-700">
                    Bundalian<span class="text-indigo-600">.</span>
                </h1>
                <p class="text-xs text-gray-600 mt-2 uppercase tracking-widest group-hover/left:text-gray-300 transition duration-700">
                    Computer Engineering Graduate
                </p>
            </div>

            <div class="lg:hidden mt-20">
                <p class="text-sm text-gray-500">Scroll to explore</p>
            </div>

            <div class="marquee-container hidden lg:block">
                <div class="marquee-content text-6xl font-bold uppercase tracking-tighter text-gray-800 group-hover/left:text-white transition duration-700">
                    • FullStack Developer • Hardware Diagnostics • IoT Solutions • Artificial Intelligence • Web Development
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:block w-1/2 min-h-screen bg-[#0a0a0a]"></div>

</div>

<section id="projects-list" class="bg-[#0a0a0a] border-t border-white/10 p-8 lg:p-20 relative z-20">
    <div class="flex items-end justify-between mb-16">
        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-500">Notable Projects</h2>
        <span class="text-xs text-gray-600 uppercase tracking-widest hidden md:block">Selected Works 2023-2026</span>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <a href="{{ url('/project/contracts-hub') }}" class="group relative block h-[500px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer">
            <div class="absolute inset-0">
                <img src="{{ asset('images/contractshub.jpg') }}" 
                     class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-110" 
                     alt="Contracts Hub">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition duration-700"></div>
            </div>
            <div class="absolute bottom-0 left-0 p-8 w-full z-10 transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                <span class="text-indigo-400 text-xs font-bold uppercase tracking-widest mb-2 block">Database</span>
                <h3 class="text-3xl font-bold text-white mb-4">Contracts Hub</h3>
                <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100">
                    A management system for Aboitiz Land contracts team.
                </p>
            </div>
        </a>

        <a href="{{ url('/project/ai-rigation') }}" class="group relative block h-[500px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer">
            <div class="absolute inset-0">
                <img src="{{ asset('images/ecoflow.jpg') }}" 
                     class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-110" 
                     alt="AI-Rigation">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition duration-700"></div>
            </div>
            <div class="absolute bottom-0 left-0 p-8 w-full z-10 transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                <span class="text-indigo-400 text-xs font-bold uppercase tracking-widest mb-2 block">IoT / AI</span>
                <h3 class="text-3xl font-bold text-white mb-4">AI-Rigation</h3>
                <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100">
                    Smart greenhouse capstone utilizing Machine Learning.
                </p>
            </div>
        </a>

        <a href="{{ url('/project/tugon-lipa') }}" class="group relative block h-[500px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer">
            <div class="absolute inset-0">
                <img src="{{ asset('images/tugonlipa.jpg') }}" 
                     class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-110" 
                     alt="Tugon Lipa">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90 group-hover:opacity-60 transition duration-700"></div>
            </div>
            <div class="absolute bottom-0 left-0 p-8 w-full z-10 transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                <span class="text-amber-400 text-xs font-bold uppercase tracking-widest mb-2 block">★ Award Winner</span>
                <h3 class="text-3xl font-bold text-white mb-4">TugonLipa</h3>
                <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition duration-500 delay-100">
                    Awarded 3rd Place at the Philippine Innovation Conference 2025.
                </p>
            </div>
        </a>

    </div>
</section>

<section id="about-modal" class="min-h-screen bg-[#050505] p-8 lg:p-20 flex items-center relative z-20">
    
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div>
            <h2 class="text-sm font-bold uppercase text-indigo-500 mb-8 tracking-widest">The Bio</h2>
            <p class="text-3xl md:text-5xl font-bold leading-tight text-white mb-12">
                I am Athelstan Bundalian. An Aspiring <span class="text-gray-500">Full Stack Developer</span> and <span class="text-gray-500">AI Engineer</span> who bridges intelligent backend systems with real-world hardware and software to <span class="text-gray-500"> build modern solutions</span>.
            </p>
            <div class="grid md:grid-cols-2 gap-12 text-gray-400">
                <div>
                    <h3 class="text-white font-bold uppercase mb-4">Education</h3>
                    <p>BS Computer Engineering (2022-2026)</p>
                    <p>University of Batangas</p>
                </div>
                <div>
                    <h3 class="text-white font-bold uppercase mb-4">Skills</h3>
                    <p>Python, C++, JavaScript, PHP, Laravel</p>
                    <p>Embedded Systems</p>
                    <p>AI and Machine Learning Development</p>
                </div>
            </div>
        </div>

        <div class="relative w-full h-full flex justify-center lg:justify-end">
            <div class="w-full max-w-[500px] aspect-[3/4] overflow-hidden rounded-lg bg-zinc-900 border border-white/10 relative group">
                <img src="{{ asset('images/profile2.jpg') }}" 
                     alt="About Athelstan" 
                     class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition duration-700 ease-in-out">
            </div>
        </div>

    </div>
</section>

<footer class="p-8 bg-black border-t border-white/10 text-center text-gray-600 text-sm relative z-20">
    &copy; 2026 Athelstan Bundalian.
</footer>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navContainer = document.getElementById('dynamic-nav');
        const menuList = document.getElementById('menu-list');
        const navLinks = document.querySelectorAll('.nav-link');
        let isScrolled = false;

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            if (scrollY > 50) {
                if (!isScrolled) { makeSmall(); isScrolled = true; }
            } else {
                if (isScrolled) { makeBig(); isScrolled = false; }
            }
        });

        function makeSmall() {
            navContainer.classList.remove('h-screen', 'items-center', 'justify-center', 'top-0');
            navContainer.classList.add('h-auto', 'top-4', 'right-4', 'p-0');
            menuList.classList.add('bg-black/90', 'backdrop-blur-md', 'border', 'border-white/10', 'p-6', 'shadow-2xl');
            menuList.classList.remove('p-8');
            navLinks.forEach(link => {
                link.classList.remove('text-6xl', 'md:text-8xl');
                link.classList.add('text-sm', 'tracking-widest');
            });
        }

        function makeBig() {
            navContainer.classList.add('h-screen', 'items-center', 'justify-center', 'top-0');
            navContainer.classList.remove('h-auto', 'top-4', 'right-4', 'p-0');
            menuList.classList.remove('bg-black/90', 'backdrop-blur-md', 'border', 'border-white/10', 'p-6', 'shadow-2xl');
            menuList.classList.add('p-8');
            navLinks.forEach(link => {
                link.classList.add('text-6xl', 'md:text-8xl');
                link.classList.remove('text-sm', 'tracking-widest');
            });
        }

        menuList.addEventListener('mouseenter', () => {
            if (isScrolled) {
                navLinks.forEach(link => {
                    link.classList.remove('text-sm', 'tracking-widest');
                    link.classList.add('text-4xl');
                });
            }
        });

        menuList.addEventListener('mouseleave', () => {
            if (isScrolled) {
                navLinks.forEach(link => {
                    link.classList.remove('text-4xl');
                    link.classList.add('text-sm', 'tracking-widest');
                });
            }
        });
    });
</script>

@endsection