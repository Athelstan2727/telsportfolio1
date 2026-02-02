@extends('layouts.app')

@section('content')

<nav class="fixed top-6 right-6 z-50 animate-fade-in-down">
    <div class="bg-black/90 backdrop-blur-md border border-white/10 p-5 rounded-lg shadow-2xl flex flex-col items-end gap-3">
        <a href="#about-section" class="text-[10px] font-bold uppercase tracking-widest text-gray-400 hover:text-white transition-colors">About Me</a>
        <a href="#projects-list" class="text-[10px] font-bold uppercase tracking-widest text-gray-400 hover:text-white transition-colors">Projects</a>
        <a href="mailto:athelstanbundalian@gmail.com" class="text-[10px] font-bold uppercase tracking-widest text-gray-400 hover:text-white transition-colors">Contact</a>
    </div>
</nav>

<div class="relative w-full bg-[#050505] min-h-screen text-white selection:bg-indigo-500 selection:text-white">

    <section id="hero" class="min-h-screen flex items-center justify-center p-6 lg:p-24 relative overflow-hidden border-b border-white/5">
        
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <div class="lg:col-span-4 flex justify-center lg:justify-start">
                <div class="w-[300px] bg-black border border-white/10 p-5 rounded-xl shadow-[0_0_50px_-10px_rgba(255,255,255,0.05)] relative group">
                    
                    <div class="flex justify-between items-center mb-4 border-b border-white/10 pb-2">
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-500">Identification</span>
                        <div class="h-1.5 w-1.5 rounded-full bg-green-500 animate-pulse shadow-[0_0_8px_rgba(34,197,94,0.8)]"></div>
                    </div>

                    <div class="w-full aspect-square mb-4 rounded bg-zinc-900 overflow-hidden relative">
                        <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover grayscale contrast-125" alt="Profile">
                        <div class="absolute inset-0 bg-indigo-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    <h3 class="text-white font-bold uppercase tracking-wider text-xl leading-none">A. Bundalian</h3>
                    <p class="text-[10px] text-indigo-500 font-mono mt-1 mb-6 uppercase">Full Stack Developer // AI Engineer</p>
                    
                    <div class="space-y-2 text-[9px] text-gray-400 font-mono border-t border-white/10 pt-3">
                         <div class="flex items-center gap-2">
                             <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                             <span>athelstanbundalian@gmail.com</span>
                         </div>
                         <div class="flex items-center gap-2">
                             <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                             <span>0968 231 3563</span>
                         </div>
                    </div>

                    <div class="flex gap-2 mt-4 pt-2">
                        <a href="#" class="flex-1 bg-white/5 h-8 flex items-center justify-center rounded hover:bg-white/10 transition-colors"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg></a>
                        <a href="#" class="flex-1 bg-white/5 h-8 flex items-center justify-center rounded hover:bg-white/10 transition-colors"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z"></path></svg></a>
                        <a href="#" class="flex-1 bg-white/5 h-8 flex items-center justify-center rounded hover:bg-white/10 transition-colors"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg></a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 text-center lg:text-left">
                <h2 class="text-xs font-bold uppercase tracking-[0.3em] text-indigo-500 mb-6">Portfolio 2026</h2>
                <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-[0.9] mb-8">
                    Build.<br>
                    Deploy.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-white">Innovate.</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-xl font-light leading-relaxed">
                    Bridging the gap between <span class="text-white font-bold">abstract software</span> and <span class="text-white font-bold">concrete hardware</span>.
                </p>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce cursor-pointer opacity-50 hover:opacity-100 transition-opacity">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path></svg>
        </div>
    </section>

    <section id="projects-list" class="bg-[#0a0a0a] p-8 lg:p-24 border-t border-white/10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex items-end justify-between mb-12">
                <div>
                    <h2 class="text-2xl font-bold uppercase tracking-wide text-white">Notable Projects</h2>
                </div>
                <span class="text-xs font-mono text-gray-500">Selected Works</span>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <a href="{{ url('/project/contracts-hub') }}" class="group block">
                    <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4 transition-transform duration-500 group-hover:-translate-y-2">
                        <img src="{{ asset('images/contractshub.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="Contracts">
                        <div class="absolute top-4 left-4 bg-black/80 backdrop-blur px-3 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">System</div>
                    </div>
                    <h3 class="text-lg font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">Contracts Hub</h3>
                    <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Aboitiz Land Database</p>
                </a>

                <a href="{{ url('/project/ai-rigation') }}" class="group block">
                    <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4 transition-transform duration-500 group-hover:-translate-y-2">
                        <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="EcoFlow">
                        <div class="absolute top-4 left-4 bg-black/80 backdrop-blur px-3 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">IoT / AI</div>
                    </div>
                    <h3 class="text-lg font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">AI-Rigation</h3>
                    <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Smart Greenhouse</p>
                </a>

                <a href="{{ url('/project/tugon-lipa') }}" class="group block">
                    <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4 transition-transform duration-500 group-hover:-translate-y-2">
                        <img src="{{ asset('images/tugonlipa.jpg') }}" class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="Tugon">
                        <div class="absolute top-4 left-4 bg-amber-500/90 text-black px-3 py-1 text-[10px] font-bold uppercase rounded shadow-[0_0_15px_rgba(245,158,11,0.3)]">★ Award Winner</div>
                    </div>
                    <h3 class="text-lg font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">TugonLipa</h3>
                    <p class="text-xs text-gray-500 mt-1 uppercase tracking-wider">Innovation Conf. 2025</p>
                </a>

            </div>
        </div>
    </section>

    <section id="about-section" class="py-24 px-6 bg-[#050505] border-t border-white/10">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div>
                <h3 class="text-xs font-bold uppercase tracking-widest text-indigo-500 mb-6">The Bio</h3>
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    I am Athelstan Bundalian. <br>
                    <span class="text-gray-600">Full Stack & AI Engineer.</span>
                </h2>
                <p class="text-gray-400 leading-relaxed mb-8 text-lg font-light">
                    My passion lies in bridging the gap between intelligent backend systems and real-world hardware. I build modern solutions that don't just exist on a screen, but interact with the world around them.
                </p>
                
                <div class="grid grid-cols-2 gap-8 border-t border-white/10 pt-8">
                    <div>
                        <h4 class="text-white text-sm font-bold uppercase mb-2">Education</h4>
                        <p class="text-gray-500 text-sm">BS Computer Engineering</p>
                        <p class="text-gray-500 text-sm">University of Batangas</p>
                    </div>
                    <div>
                        <h4 class="text-white text-sm font-bold uppercase mb-2">Specialization</h4>
                        <p class="text-gray-500 text-sm">IoT Integration</p>
                        <p class="text-gray-500 text-sm">Web Development (Laravel/Vue)</p>
                    </div>
                </div>
            </div>

            <div class="relative h-[500px] w-full rounded-lg overflow-hidden border border-white/10 group">
                <img src="{{ asset('images/profile2.jpg') }}" alt="Working" class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
            </div>

        </div>
    </section>

    <footer class="py-8 border-t border-white/10 text-center">
        <p class="text-xs text-gray-600 uppercase tracking-widest">&copy; 2026 Athelstan Bundalian. All rights reserved.</p>
    </footer>

</div>

@endsection