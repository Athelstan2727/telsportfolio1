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

<div class="min-h-screen bg-[#050505] text-white selection:bg-emerald-500 selection:text-white">
    
    <div class="relative h-[70vh] w-full overflow-hidden">
        <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-50 scale-105 animate-pulse-slow">
        
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/50 to-transparent"></div>
        
        <div class="absolute bottom-0 left-0 p-8 lg:p-20 w-full">
            <div class="reveal">
                <h1 class="text-5xl md:text-8xl font-bold uppercase tracking-tighter leading-none mb-2">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-500">AI-Rigation</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-teal-400 to-emerald-400 animate-gradient-x">EcoFlow System</span>
                </h1>
                <p class="text-gray-400 mt-6 text-xl tracking-[0.2em] uppercase flex items-center gap-4">
                    <span class="h-[1px] w-12 bg-emerald-500 inline-block"></span>
                    Smart Greenhouse Capstone
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-20 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-32 border-b border-white/10 pb-12 reveal">
            <div>
                <h3 class="text-emerald-400 uppercase tracking-widest text-xs font-bold mb-4">Project Type</h3>
                <p class="text-3xl font-bold text-white">Academic Capstone</p>
            </div>
            <div>
                <h3 class="text-teal-400 uppercase tracking-widest text-xs font-bold mb-4">Tech Stack</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 border border-emerald-500/30 bg-emerald-500/10 rounded-full text-sm font-medium text-emerald-300 hover:bg-emerald-500 hover:text-white transition duration-300 cursor-default">
                        Python / Machine Learning
                    </span>
                    <span class="px-4 py-2 border border-teal-500/30 bg-teal-500/10 rounded-full text-sm font-medium text-teal-300 hover:bg-teal-500 hover:text-white transition duration-300 cursor-default">
                        Raspberry Pi 5
                    </span>
                    <span class="px-4 py-2 border border-cyan-500/30 bg-cyan-500/10 rounded-full text-sm font-medium text-cyan-300 hover:bg-cyan-500 hover:text-white transition duration-300 cursor-default">
                        MySQL
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-40">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-emerald-500 transition duration-500 hover:shadow-[0_0_50px_rgba(16,185,129,0.15)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-emerald-500/20 rounded-full blur-2xl group-hover:bg-emerald-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-emerald-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-emerald-400 transition duration-300">AI Powered Automation</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        The system automates greenhouse management by utilizing <strong>Raspberry Pi 5</strong> to monitor soil moisture, temperature, and humidity in real-time, triggering automated irrigation only when necessary.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-emerald-500/50 hover:shadow-[0_0_100px_rgba(16,185,129,0.2)]">
                        
                        <img src="{{ asset('images/ecoflow1.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="Greenhouse Setup">
                        
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="order-2 lg:order-1 h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-teal-500/50 hover:shadow-[0_0_100px_rgba(20,184,166,0.2)]">
                        
                        <img src="{{ asset('images/ecoflow2.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="Machine Learning Diagnostics">
                             
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-teal-400 transition duration-500 hover:shadow-[0_0_50px_rgba(20,184,166,0.15)] hover:-translate-y-2">
                    <div class="absolute -top-6 -left-6 w-20 h-20 bg-teal-500/20 rounded-full blur-2xl group-hover:bg-teal-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-teal-400 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-teal-400 transition duration-300">Manual and AI Automated Irrigation</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Integrated <strong>Q-Learning and Linear Regression AI models</strong> to analyze plant health via sesnsors and camera feeds to automatically decide irrigation.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-cyan-500 transition duration-500 hover:shadow-[0_0_50px_rgba(6,182,212,0.15)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-cyan-500/20 rounded-full blur-2xl group-hover:bg-cyan-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-cyan-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-cyan-400 transition duration-300">MySql Database</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        MySQL is used to store and manage irrigation data such as device commands, schedules, and timestamps, enabling the EcoFlow AI system to monitor, analyze, and automate watering operations efficiently.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="pop-out-image absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl cursor-zoom-in 
                                hover:fixed hover:inset-4 hover:z-[9999] hover:bg-black/95 hover:border-cyan-500/50 hover:shadow-[0_0_100px_rgba(6,182,212,0.2)]">
                        
                        <img src="{{ asset('images/ecoflow3.jpg') }}" 
                             class="w-full h-full object-cover transition-all duration-700 
                                    hover:object-contain hover:scale-100" 
                             alt="ESP32 Hardware">
                        
                        <div class="absolute bottom-10 left-0 w-full text-center opacity-0 hover:opacity-100 transition duration-500 text-white/50 text-sm uppercase tracking-widest pointer-events-none">
                            Move cursor away to close
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-40 text-center reveal">
            <a href="{{ url('/') }}" class="group relative inline-flex items-center gap-3 px-12 py-5 border border-white/20 text-white hover:border-emerald-500 hover:text-emerald-400 transition duration-500 uppercase tracking-widest font-bold text-sm rounded-full overflow-hidden">
                <span class="absolute inset-0 bg-emerald-500/10 translate-y-full group-hover:translate-y-0 transition duration-500"></span>
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