@extends('layouts.app')

@section('content')

<aside id="dynamic-sidebar" class="fixed top-0 left-0 h-screen w-[280px] bg-black/95 backdrop-blur-xl border-r border-white/10 z-50 flex flex-col p-6 transition-all duration-700 ease-[cubic-bezier(0.76,0,0.24,1)] opacity-0 pointer-events-none -translate-x-10 shadow-[0_0_50px_rgba(0,0,0,0.5)]">

    <div class="flex flex-col items-center text-center mb-8 border-b border-white/10 pb-6">
        <div class="w-20 h-20 mb-4 rounded-lg overflow-hidden border border-white/10 group hover:border-indigo-500 transition-all">
            <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="Profile">
        </div>
        <h2 class="text-lg font-bold text-white uppercase tracking-widest">A. Bundalian</h2>
        <p class="text-[10px] text-indigo-500 font-mono mt-1">Full Stack Developer</p>
    </div>

    <nav class="flex-1 flex flex-col space-y-2">
        <a href="#hero" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3 group">
            <div class="w-1 h-1 bg-indigo-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <span>Home</span>
        </a>
        <a href="#projects-list" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3 group">
             <div class="w-1 h-1 bg-indigo-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <span>Projects</span>
        </a>
        <a href="#about-section" class="text-xs font-bold uppercase text-gray-400 hover:text-white hover:bg-white/5 p-3 rounded transition-all flex items-center gap-3 group">
             <div class="w-1 h-1 bg-indigo-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <span>About</span>
        </a>
    </nav>

    <div class="pt-6 border-t border-white/10 text-[10px] font-mono text-gray-500 space-y-3">
        <div class="group cursor-pointer">
            <label class="block text-gray-700 uppercase text-[9px] mb-1">Email</label>
            <a href="mailto:athelstanbundalian@gmail.com" class="flex items-center gap-2 hover:text-white transition-colors">
                <span class="truncate">athelstanbundalian@gmail.com</span>
            </a>
        </div>
        
        <div class="group cursor-pointer">
             <label class="block text-gray-700 uppercase text-[9px] mb-1">Phone</label>
            <span class="hover:text-white transition-colors">0968 231 3563</span>
        </div>

        <div class="flex gap-2 mt-4 pt-2">
            <a href="https://www.facebook.com/tels.bundalian" target="_blank" class="flex-1 py-2 flex justify-center bg-white/5 rounded hover:bg-blue-600 hover:text-white transition-all">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
            </a>
            <a href="https://www.instagram.com/telssob/" target="_blank" class="flex-1 py-2 flex justify-center bg-white/5 rounded hover:bg-pink-600 hover:text-white transition-all">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z"></path></svg>
            </a>
            <a href="https://www.linkedin.com/in/athelstan-bundalian-36a43a133/" target="_blank" class="flex-1 py-2 flex justify-center bg-white/5 rounded hover:bg-blue-700 hover:text-white transition-all">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
        </div>
    </div>
</aside>


<div class="relative w-full bg-[#050505] min-h-screen text-white selection:bg-indigo-500 selection:text-white">

    <section id="hero" class="min-h-screen flex items-center justify-center p-8 lg:p-24 relative overflow-hidden border-b border-white/5">
        
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-5 flex justify-center lg:justify-start">
                <div class="w-[320px] bg-black/80 backdrop-blur-sm border border-white/10 p-6 rounded-xl shadow-[0_0_50px_-10px_rgba(255,255,255,0.05)] transform hover:scale-105 transition-transform duration-500 group">
                    
                    <div class="flex justify-between items-center mb-5 border-b border-white/10 pb-3">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 group-hover:text-indigo-400 transition-colors">Identity</span>
                        <div class="flex gap-1">
                            <div class="h-1.5 w-1.5 rounded-full bg-red-500/50"></div>
                            <div class="h-1.5 w-1.5 rounded-full bg-yellow-500/50"></div>
                            <div class="h-1.5 w-1.5 rounded-full bg-green-500 animate-pulse"></div>
                        </div>
                    </div>

                    <div class="w-full aspect-square mb-5 rounded bg-zinc-900 overflow-hidden relative border border-white/5">
                        <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" alt="Profile">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-indigo-500/10 to-transparent opacity-0 group-hover:opacity-100 translate-y-[-100%] group-hover:translate-y-[100%] transition-transform duration-1000 ease-linear pointer-events-none"></div>
                    </div>

                    <h3 class="text-white font-bold uppercase tracking-wider text-2xl leading-none mb-1">A. Bundalian</h3>
                    <p class="text-xs text-indigo-500 font-mono mb-5">Full Stack Developer // AI Engineer</p>
                    
                    <div class="space-y-2 text-[10px] text-gray-500 font-mono pt-4 border-t border-white/10">
                         <div class="flex justify-between">
                             <span>ID:</span> <span class="text-gray-300">82-1029-41</span>
                         </div>
                         <div class="flex justify-between">
                             <span>LOC:</span> <span class="text-gray-300">Batangas, PH</span>
                         </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 text-center lg:text-left">
                <h2 class="text-sm font-bold uppercase tracking-[0.4em] text-indigo-500 mb-6 animate-fade-in-up">Portfolio 2026</h2>
                <h1 class="text-5xl md:text-8xl font-black uppercase tracking-tighter leading-[0.9] mb-8 animate-fade-in-up delay-100">
                    Build.<br>
                    Deploy.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-500 to-white">Innovate.</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-xl font-light leading-relaxed animate-fade-in-up delay-200">
                    Bridging the gap between <span class="text-white font-bold">abstract software</span> and <span class="text-white font-bold">concrete hardware</span>.
                </p>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path></svg>
        </div>
    </section>


    <section id="projects-list" class="bg-[#0a0a0a] p-8 lg:p-20 lg:pl-[300px] border-t border-white/10 transition-all duration-300 min-h-screen">
        
        <div class="flex items-end justify-between mb-16 border-b border-white/10 pb-4">
            <div>
                <h2 class="text-3xl font-bold uppercase tracking-tighter text-white">Selected Works</h2>
                <p class="text-sm text-gray-500 mt-2">Hardware & Software Integration</p>
            </div>
            <span class="text-xs font-mono text-indigo-500">01 — 03</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <a href="{{ url('/project/contracts-hub') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-5">
                    <img src="{{ asset('images/contractshub.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700" alt="Contracts">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10 backdrop-blur-md">Database</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">Contracts Hub</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider font-mono">Aboitiz Land System</p>
            </a>

            <a href="{{ url('/project/ai-rigation') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-5">
                    <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700" alt="EcoFlow">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10 backdrop-blur-md">IoT / AI</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">AI-Rigation</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider font-mono">Smart Greenhouse Capstone</p>
            </a>

            <a href="{{ url('/project/tugon-lipa') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-5">
                    <img src="{{ asset('images/tugonlipa.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700" alt="Tugon">
                    <div class="absolute top-3 left-3 bg-amber-500 text-black px-2 py-1 text-[10px] font-bold uppercase rounded shadow-[0_0_15px_rgba(245,158,11,0.4)]">★ Award Winner</div>
                </div>
                <h3 class="text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">TugonLipa</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider font-mono">Innovation Conference 2025</p>
            </a>

        </div>
    </section>

    <section id="about-section" class="p-8 lg:p-20 lg:pl-[300px] bg-[#050505] border-t border-white/10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 lg:order-1">
                <h3 class="text-sm font-bold uppercase tracking-widest text-indigo-500 mb-6">About Me</h3>
                <h4 class="text-3xl text-white font-bold mb-6">Engineering Solutions for the Real World.</h4>
                <p class="text-gray-400 leading-relaxed mb-6">
                    I am a Computer Engineering graduate from the University of Batangas. I specialize in building full-stack applications that don't just live on a server, but interact with the physical world through Embedded Systems and Artificial Intelligence.
                </p>
                
                <div class="space-y-4">
                    <div>
                        <span class="text-xs font-bold uppercase text-white block mb-2">Tech Stack</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 border border-white/10 bg-white/5 rounded text-xs text-gray-300">Laravel</span>
                            <span class="px-3 py-1 border border-white/10 bg-white/5 rounded text-xs text-gray-300">Vue.js</span>
                            <span class="px-3 py-1 border border-white/10 bg-white/5 rounded text-xs text-gray-300">Python</span>
                            <span class="px-3 py-1 border border-white/10 bg-white/5 rounded text-xs text-gray-300">C++ / Arduino</span>
                            <span class="px-3 py-1 border border-white/10 bg-white/5 rounded text-xs text-gray-300">Tailwind CSS</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 relative h-full min-h-[400px] rounded-lg overflow-hidden border border-white/10 group">
                <img src="{{ asset('images/profile2.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity duration-700" alt="About">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
            </div>
        </div>
    </section>

    <footer class="p-8 border-t border-white/10 text-center text-gray-700 text-xs lg:pl-[300px]">
        &copy; 2026 Athelstan Bundalian. All rights reserved.
    </footer>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('dynamic-sidebar');
        const heroSection = document.getElementById('hero');

        // Initial check
        checkScroll();

        window.addEventListener('scroll', checkScroll);

        function checkScroll() {
            if (!heroSection) return;
            
            // Get the bottom position of the hero section relative to the viewport
            const heroBottom = heroSection.getBoundingClientRect().bottom;
            
            // If heroBottom is less than 100px from the top (user has scrolled past most of it)
            // Show the sidebar
            if (heroBottom < 100) {
                sidebar.classList.remove('opacity-0', 'pointer-events-none', '-translate-x-10');
            } else {
                // Hide the sidebar
                sidebar.classList.add('opacity-0', 'pointer-events-none', '-translate-x-10');
            }
        }
    });
</script>

@endsection