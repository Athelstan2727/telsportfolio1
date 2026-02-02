@extends('layouts.app')

@section('content')

<div id="floating-id" class="fixed top-6 left-6 z-50 opacity-0 pointer-events-none -translate-y-10 transition-all duration-700 ease-[cubic-bezier(0.76,0,0.24,1)]">
    <div class="group relative">
        
        <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-white/20 cursor-pointer shadow-2xl relative z-20 transition-transform duration-300 group-hover:scale-110">
             <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover">
        </div>

        <div class="absolute top-0 left-0 pt-4 pl-4 w-[320px] opacity-0 invisible -translate-x-4 group-hover:opacity-100 group-hover:visible group-hover:translate-x-0 transition-all duration-500 ease-out z-10">
            <div class="bg-black/90 backdrop-blur-xl border border-white/10 p-6 rounded-2xl shadow-2xl mt-12 text-white relative overflow-hidden">
                
                <div class="absolute -top-10 -right-10 w-20 h-20 bg-indigo-600 blur-3xl opacity-20"></div>

                <div class="relative z-10">
                    <h4 class="font-bold uppercase tracking-[0.2em] text-[10px] text-indigo-400 mb-4">Contact Information</h4>
                    
                    <div class="space-y-4 text-sm text-gray-300">
                        
                        <div class="flex items-start gap-3 group/item">
                            <svg class="w-5 h-5 text-gray-500 group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:athelstanbundalian@gmail.com" class="hover:text-indigo-400 transition-colors break-all">athelstanbundalian@gmail.com</a>
                        </div>

                        <div class="flex items-center gap-3 group/item">
                            <svg class="w-5 h-5 text-gray-500 group-hover/item:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span class="tracking-wider">0968 231 3563</span>
                        </div>
                    </div>

                    <div class="border-t border-white/10 my-5"></div>

                    <div class="flex justify-between items-center gap-2">
                        <a href="https://www.facebook.com/tels.bundalian" target="_blank" class="p-2 bg-white/5 rounded-lg hover:bg-indigo-600 hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                        </a>
                        <a href="https://www.instagram.com/telssob/" target="_blank" class="p-2 bg-white/5 rounded-lg hover:bg-pink-600 hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z"></path></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/athelstan-bundalian-36a43a133/" target="_blank" class="p-2 bg-white/5 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        
        // NEW: Floating ID Element
        const floatingId = document.getElementById('floating-id');
        
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
            // 1. Shrink Nav (Existing)
            navContainer.classList.remove('h-screen', 'items-center', 'justify-center', 'top-0');
            navContainer.classList.add('h-auto', 'top-4', 'right-4', 'p-0');
            menuList.classList.add('bg-black/90', 'backdrop-blur-md', 'border', 'border-white/10', 'p-6', 'shadow-2xl');
            menuList.classList.remove('p-8');
            navLinks.forEach(link => {
                link.classList.remove('text-6xl', 'md:text-8xl');
                link.classList.add('text-sm', 'tracking-widest');
            });

            // 2. SHOW Floating ID (New)
            // Remove 'invisible' and opacity '0', move it into view
            floatingId.classList.remove('opacity-0', 'pointer-events-none', '-translate-y-10');
        }

        function makeBig() {
            // 1. Expand Nav (Existing)
            navContainer.classList.add('h-screen', 'items-center', 'justify-center', 'top-0');
            navContainer.classList.remove('h-auto', 'top-4', 'right-4', 'p-0');
            menuList.classList.remove('bg-black/90', 'backdrop-blur-md', 'border', 'border-white/10', 'p-6', 'shadow-2xl');
            menuList.classList.add('p-8');
            navLinks.forEach(link => {
                link.classList.add('text-6xl', 'md:text-8xl');
                link.classList.remove('text-sm', 'tracking-widest');
            });

            // 2. HIDE Floating ID (New)
            floatingId.classList.add('opacity-0', 'pointer-events-none', '-translate-y-10');
        }

        // Hover Effects for the Nav Menu (Existing)
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