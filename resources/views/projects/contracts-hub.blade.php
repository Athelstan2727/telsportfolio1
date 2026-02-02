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

<div class="min-h-screen bg-[#050505] text-white selection:bg-red-500 selection:text-white">
    
    <div class="relative h-[70vh] w-full overflow-hidden">
        <img src="{{ asset('images/ojt.jpg') }}" class="w-full h-full object-cover opacity-50 scale-105 animate-pulse-slow">
        
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/50 to-transparent"></div>
        
        <div class="absolute bottom-0 left-0 p-8 lg:p-20 w-full">
            <div class="reveal">
                <h1 class="text-5xl md:text-8xl font-bold uppercase tracking-tighter leading-none mb-2">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-500">Contracts</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-orange-500 to-red-500 animate-gradient-x">Management Hub</span>
                </h1>
                <p class="text-gray-400 mt-6 text-xl tracking-[0.2em] uppercase flex items-center gap-4">
                    <span class="h-[1px] w-12 bg-red-600 inline-block"></span>
                    Database Management System
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-8 py-20 relative z-10">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-32 border-b border-white/10 pb-12 reveal">
            <div>
                <h3 class="text-red-500 uppercase tracking-widest text-xs font-bold mb-4">Client</h3>
                <p class="text-3xl font-bold text-white">Aboitiz Land</p>
            </div>
            <div>
                <h3 class="text-orange-500 uppercase tracking-widest text-xs font-bold mb-4">Tech Stack</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 border border-red-500/30 bg-red-500/10 rounded-full text-sm font-medium text-red-400 hover:bg-red-600 hover:text-white transition duration-300 cursor-default">
                        JavaScript
                    </span>
                    <span class="px-4 py-2 border border-orange-500/30 bg-orange-500/10 rounded-full text-sm font-medium text-orange-400 hover:bg-orange-600 hover:text-white transition duration-300 cursor-default">
                        Google Apps Script
                    </span>
                </div>
            </div>
        </div>

        <div class="space-y-40">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-red-600 transition duration-500 hover:shadow-[0_0_50px_rgba(220,38,38,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-red-600/20 rounded-full blur-2xl group-hover:bg-red-600/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-red-600 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-red-500 transition duration-300">Secure & Organized</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Contracts Management Hub is a specialized system developed for the <strong>Aboitiz Land</strong> contracts team. It replaces manual logging with a digital interface, ensuring data is never lost.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/contracts1.jpg') }}" class="w-full h-full object-cover" alt="Contracts Hub Dashboard">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="order-2 lg:order-1 h-[400px] w-full relative z-20"> 
                    <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/contracts2.jpg') }}" class="w-full h-full object-cover" alt="Digital Workflow">
                    </div>
                </div>

                <div class="order-1 lg:order-2 bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-orange-500 transition duration-500 hover:shadow-[0_0_50px_rgba(249,115,22,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -left-6 w-20 h-20 bg-orange-500/20 rounded-full blur-2xl group-hover:bg-orange-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-orange-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-orange-500 transition duration-300">Digital Efficiency</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        The system streamlines the document tracking process with a secure login. It effectively bridges the gap between manual record-keeping and modern digital efficiency.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center reveal">
                <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-3xl relative group hover:border-rose-500 transition duration-500 hover:shadow-[0_0_50px_rgba(244,63,94,0.2)] hover:-translate-y-2">
                    <div class="absolute -top-6 -right-6 w-20 h-20 bg-rose-500/20 rounded-full blur-2xl group-hover:bg-rose-500/40 transition duration-500"></div>
                    <div class="absolute top-8 right-8 text-rose-500 group-hover:scale-110 transition duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                    </div>
                    <h3 class="text-4xl font-bold text-white mb-6 group-hover:text-rose-400 transition duration-300">Searchable Database</h3>
                    <p class="text-gray-400 leading-relaxed text-lg">
                        Public and private contract data is organized and instantly searchable, allowing authorized personnel to retrieve critical documents in seconds.
                    </p>
                </div>
                
                <div class="h-[400px] w-full relative z-20"> 
                    <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/contracts3.jpg') }}" class="w-full h-full object-cover" alt="Search Interface">
                    </div>
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