@extends('layouts.app')

@section('content')
<style>
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Smooth transition for the image pop-out */
    .pop-out-image {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<div class="min-h-screen bg-[#050505] text-white selection:bg-blue-500 selection:text-white">
    
    <div class="relative h-[70vh] w-full overflow-hidden">
        <img src="{{ asset('images/tugon.jpg') }}" class="w-full h-full object-cover opacity-50 scale-105 animate-pulse-slow">
        
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/50 to-transparent"></div>
        
        <div class="absolute bottom-0 left-0 p-8 lg:p-20 w-full">
            <div class="reveal">
                <h1 class="text-5xl md:text-8xl font-bold uppercase tracking-tighter leading-none mb-2">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-500">TugonLipa</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-amber-400 to-blue-500 animate-gradient-x">Civic Response System</span>
                </h1>
                <p class="text-gray-400 mt-6 text-xl tracking-[0.2em] uppercase flex items-center gap-4">
                    <span class="h-[1px] w-12 bg-blue-500 inline-block"></span>
                    24 hours Hackathon Winner
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-20 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-32 border-b border-white/10 pb-12 reveal">
            <div>
                <h3 class="text-blue-500 uppercase tracking-widest text-xs font-bold mb-4">Location / Scope</h3>
                <p class="text-3xl font-bold text-white">Lipa City</p>
            </div>
            <div>
                <h3 class="text-amber-500 uppercase tracking-widest text-xs font-bold mb-4">Tech Stack</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 border border-blue-500/30 bg-blue-500/10 rounded-full text-sm font-medium text-blue-400 hover:bg-blue-600 hover:text-white transition duration-300 cursor-default">
                        Laravel / PHP
                    </span>
                    <span class="px-4 py-2 border border-amber-500/30 bg-amber-500/10 rounded-full text-sm font-medium text-amber-400 hover:bg-amber-600 hover:text-white transition duration-300 cursor-default">
                        MySQL
                    </span>
                    <span class="px-4 py-2 border border-sky-500/30 bg-sky-500/10 rounded-full text-sm font-medium text-sky-400 hover:bg-sky-600 hover:text-white transition duration-300 cursor-default">
                        Bootstrap
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-40">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-blue-500 transition duration-500 hover:shadow-[0_0_50px_rgba(59,130,246,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-blue-600/20 rounded-full blur-2xl group-hover:bg-blue-600/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-blue-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 1 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.43.872.95 1.114 1.517.247.581.372 1.206.372 1.838 0 .633-.125 1.258-.372 1.838-.242.567-.619 1.087-1.114 1.518" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-blue-400 transition duration-300">AI Chatbot</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Utilized AI Agentic model to chat, ask information and request assistance.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-blue-500/50 hover:shadow-[0_0_100px_rgba(59,130,246,0.3)]">
                        
                        <img src="{{ asset('images/tugon1.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="Reporting Interface">
                        
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="order-2 lg:order-1 h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-amber-500/50 hover:shadow-[0_0_100px_rgba(245,158,11,0.3)]">
                        
                        <img src="{{ asset('images/tugon2.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="Real Time Dashboard">
                             
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-amber-500 transition duration-500 hover:shadow-[0_0_50px_rgba(245,158,11,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -left-6 w-20 h-20 bg-amber-500/20 rounded-full blur-2xl group-hover:bg-amber-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-amber-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-amber-500 transition duration-300">Real-Time Tracking</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Authorities can view tickets as they come in on a live dashboard, prioritizing critical incidents and dispatching response teams immediately.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-sky-500 transition duration-500 hover:shadow-[0_0_50px_rgba(14,165,233,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-sky-500/20 rounded-full blur-2xl group-hover:bg-sky-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-sky-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-sky-400 transition duration-300">2nd Place in 2025 Philippine Innovation Conference Hackathon</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        They earned 2nd Place at the 2025 Philippine Innovation Conference 24-Hour Hackathon, outperforming 144 competing teams through innovation, teamwork, and strong problem-solving under pressure.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-sky-500/50 hover:shadow-[0_0_100px_rgba(14,165,233,0.3)]">
                        
                        <img src="{{ asset('images/tugon3.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="Admin Panel">
                        
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-40 text-center reveal">
            <a href="{{ url('/') }}" class="group relative inline-flex items-center gap-3 px-12 py-5 border border-white/20 text-white hover:border-blue-500 hover:text-blue-400 transition duration-500 uppercase tracking-widest font-bold text-sm rounded-full overflow-hidden">
                <span class="absolute inset-0 bg-blue-600/10 translate-y-full group-hover:translate-y-0 transition duration-500"></span>
                <span class="relative">← Back to Portfolio</span>
            </a>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const reveals = document.querySelectorAll('.reveal');

        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            reveals.forEach((reveal) => {
                const elementTop = reveal.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Trigger once on load
    });
</script>
@endsection