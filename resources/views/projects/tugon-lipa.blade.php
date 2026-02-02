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
                    <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/tugon1.jpg') }}" class="w-full h-full object-cover" alt="Reporting Interface">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="order-2 lg:order-1 h-[400px] w-full relative z-20"> 
                    <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/tugon2.jpg') }}" class="w-full h-full object-cover" alt="Heatmap Data">
                    </div>
                </div>

                <div class="order-1 lg:order-2 bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-amber-500 transition duration-500 hover:shadow-[0_0_50px_rgba(245,158,11,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -left-6 w-20 h-20 bg-amber-500/20 rounded-full blur-2xl group-hover:bg-amber-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-amber-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-amber-500 transition duration-300">Data Analytics</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Admins can view real-time data reports and heatmaps of incidents in Lipa City, allowing for faster response times and better resource allocation.
                    </p>
                </div>
            </div>

        </div>

        <div class="mt-40 mb-20 text-center reveal">
            <a href="{{ url('/') }}" class="inline-block group w-full max-w-3xl">
                <div class="relative overflow-hidden px-6 py-8 md:px-16 md:py-10 border border-white/10 bg-[#0a0a0a] rounded-3xl hover:bg-white/5 hover:border-white/30 transition-all duration-500 shadow-[0_0_30px_rgba(0,0,0,0.5)] group-hover:shadow-[0_0_30px_rgba(255,255,255,0.05)]">
                    
                    <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8">
                        <span class="text-4xl md:text-5xl text-white/50 group-hover:text-white transition-all duration-500 group-hover:-translate-x-2">
                            ←
                        </span>
                        
                        <div class="text-center md:text-left">
                            <span class="block text-xs font-mono text-gray-500 group-hover:text-gray-300 mb-2 tracking-[0.3em] uppercase transition-colors">
                                Return to Portfolio
                            </span>
                            <span class="block text-2xl md:text-4xl font-black text-white uppercase tracking-tighter leading-none">
                                Back to Home
                            </span>
                        </div>
                    </div>

                </div>
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