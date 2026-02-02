@extends('layouts.app')

@section('content')

<aside id="dynamic-sidebar" class="fixed top-0 left-0 h-screen w-[280px] bg-black/95 backdrop-blur-xl border-r border-white/10 z-50 flex flex-col p-6 transition-transform duration-700 ease-[cubic-bezier(0.76,0,0.24,1)] -translate-x-full shadow-2xl">
    
    <div class="flex flex-col items-center text-center mb-8 border-b border-white/10 pb-6">
        <div class="w-20 h-20 mb-4 rounded-lg overflow-hidden border border-white/10">
            <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover grayscale" alt="Profile">
        </div>
        <h2 class="text-lg font-bold text-white uppercase tracking-widest">A. Bundalian</h2>
        <p class="text-[10px] text-indigo-500 font-mono mt-1">Full Stack Developer</p>
    </div>

    <nav class="flex-1 flex flex-col space-y-2">
        <a href="#hero" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3">
            <span>Home</span>
        </a>
        <a href="#projects-list" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3">
            <span>Projects</span>
        </a>
        <a href="#about-section" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3">
            <span>About Me</span>
        </a>
    </nav>

    <div class="pt-6 border-t border-white/10 text-[10px] font-mono text-gray-500 space-y-3">
        <p>athelstanbundalian@gmail.com</p>
        <p>0968 231 3563</p>
        <div class="flex gap-2 mt-4">
            <a href="#" class="w-8 h-8 flex items-center justify-center bg-white/5 rounded hover:bg-white/20 transition-all"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
            <a href="#" class="w-8 h-8 flex items-center justify-center bg-white/5 rounded hover:bg-white/20 transition-all"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg></a>
        </div>
    </div>
</aside>


<nav id="hero-nav" class="fixed top-8 right-8 z-40 transition-all duration-500">
    <div class="bg-black/50 backdrop-blur-md border border-white/10 px-6 py-4 rounded-lg flex gap-6">
        <a href="#projects-list" class="text-[10px] font-bold uppercase tracking-widest text-white hover:text-indigo-400 transition-colors">Projects</a>
        <a href="#about-section" class="text-[10px] font-bold uppercase tracking-widest text-white hover:text-indigo-400 transition-colors">About</a>
        <a href="mailto:athelstanbundalian@gmail.com" class="text-[10px] font-bold uppercase tracking-widest text-white hover:text-indigo-400 transition-colors">Contact</a>
    </div>
</nav>


<div class="relative w-full bg-[#050505] min-h-screen text-white selection:bg-indigo-500 selection:text-white">

    <section id="hero" class="min-h-screen flex items-center justify-center p-8 lg:p-24 relative overflow-hidden border-b border-white/5">
        
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <div class="lg:col-span-4 flex justify-center lg:justify-start">
                <div class="w-[300px] bg-black border border-white/10 p-5 rounded shadow-2xl relative">
                    <div class="flex justify-between items-center mb-4 border-b border-white/10 pb-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-500">Identity</span>
                        <div class="flex gap-1">
                            <div class="w-1.5 h-1.5 rounded-full bg-red-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-yellow-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                        </div>
                    </div>
                    <div class="w-full aspect-[4/5] mb-4 bg-zinc-900 overflow-hidden relative grayscale">
                        <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover" alt="Profile">
                    </div>
                    <h3 class="text-white font-bold uppercase tracking-wider text-xl leading-none">A. Bundalian</h3>
                    <p class="text-[10px] text-indigo-500 font-mono mt-1 mb-4">Full Stack Developer // AI Engineer</p>
                    <div class="space-y-2 text-[9px] text-gray-500 font-mono border-t border-white/10 pt-3">
                         <div class="flex justify-between"><span>ID:</span> <span class="text-gray-300">82-1029-41</span></div>
                         <div class="flex justify-between"><span>LOC:</span> <span class="text-gray-300">Batangas, PH</span></div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 text-center lg:text-left">
                <h2 class="text-xs font-bold uppercase tracking-[0.4em] text-indigo-500 mb-6">Portfolio 2026</h2>
                <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-[0.9] mb-8">
                    Build.<br>
                    Deploy.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-500 to-white">Innovate.</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-xl font-light leading-relaxed">
                    Bridging the gap between <span class="text-white font-bold">abstract software</span> and <span class="text-white font-bold">concrete hardware</span>.
                </p>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path></svg>
        </div>
    </section>


    <section id="projects-list" class="bg-[#0a0a0a] p-8 lg:p-20 lg:pl-[320px] border-t border-white/10 min-h-screen transition-all">
        
        <div class="flex items-end justify-between mb-16">
            <div>
                <h2 class="text-3xl font-bold uppercase tracking-tighter text-white">Selected Works</h2>
                <p class="text-sm text-gray-500 mt-2">Hardware & Software Integration</p>
            </div>
            <span class="text-xs font-mono text-indigo-500">01 — 03</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="{{ url('/project/contracts-hub') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/contractshub.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="Contracts">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">Database</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">Contracts Hub</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Aboitiz Land System</p>
            </a>

            <a href="{{ url('/project/ai-rigation') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="EcoFlow">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">IoT / AI</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">AI-Rigation</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Smart Greenhouse</p>
            </a>

            <a href="{{ url('/project/tugon-lipa') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/tugonlipa.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="Tugon">
                    <div class="absolute top-3 left-3 bg-amber-500 text-black px-2 py-1 text-[10px] font-bold uppercase rounded">★ Award Winner</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">TugonLipa</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Innovation Conf. 2025</p>
            </a>
        </div>
    </section>

    <section id="about-section" class="p-8 lg:p-20 lg:pl-[320px] bg-[#050505] border-t border-white/10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div>
                <h3 class="text-sm font-bold uppercase tracking-widest text-indigo-500 mb-6">About Me</h3>
                <p class="text-xl text-gray-300 leading-relaxed mb-6">
                    I am a Computer Engineering graduate from the University of Batangas. I specialize in building full-stack applications that interact with the physical world.
                </p>
                <div class="flex flex-wrap gap-2 mt-8">
                    <span class="px-3 py-1 border border-white/20 rounded-full text-xs text-gray-400">Laravel</span>
                    <span class="px-3 py-1 border border-white/20 rounded-full text-xs text-gray-400">Vue.js</span>
                    <span class="px-3 py-1 border border-white/20 rounded-full text-xs text-gray-400">Python</span>
                </div>
            </div>
            <div class="relative h-full min-h-[300px] rounded-lg overflow-hidden border border-white/10">
                <img src="{{ asset('images/profile2.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-60" alt="About">
            </div>
        </div>
    </section>

    <footer class="p-8 border-t border-white/10 text-center text-gray-700 text-xs lg:pl-[320px]">
        &copy; 2026 Athelstan Bundalian. All rights reserved.
    </footer>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('dynamic-sidebar');
        const heroNav = document.getElementById('hero-nav');
        const heroSection = document.getElementById('hero');

        window.addEventListener('scroll', () => {
            const heroBottom = heroSection.getBoundingClientRect().bottom;
            const threshold = 100; // Pixel buffer

            // Logic: If we are past the hero section...
            if (heroBottom < threshold) {
                // 1. Show Sidebar (remove -translate-x-full)
                sidebar.classList.remove('-translate-x-full');
                
                // 2. Hide Top Nav (opacity 0)
                heroNav.classList.add('opacity-0', 'pointer-events-none', '-translate-y-full');
            } else {
                // 1. Hide Sidebar
                sidebar.classList.add('-translate-x-full');
                
                // 2. Show Top Nav
                heroNav.classList.remove('opacity-0', 'pointer-events-none', '-translate-y-full');
            }
        });
    });
</script>

@endsection