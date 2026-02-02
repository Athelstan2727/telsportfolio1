@extends('layouts.app')

@section('content')

<button id="mobile-menu-toggle" class="lg:hidden fixed top-4 right-4 z-[60] p-3 bg-indigo-600 rounded-lg text-white shadow-lg hover:bg-indigo-500 transition-colors">
    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>

<div id="mobile-overlay" class="fixed inset-0 bg-black/80 z-[40] hidden backdrop-blur-sm transition-opacity duration-300 lg:hidden"></div>

<aside id="sidebar" class="fixed top-0 left-0 h-screen w-[280px] md:w-[320px] bg-[#050505] border-r border-white/10 z-[50] flex flex-col p-6 md:p-8 transition-transform duration-500 ease-[cubic-bezier(0.76,0,0.24,1)] -translate-x-full lg:translate-x-0 shadow-2xl">
    
    <div class="flex flex-col items-center text-center mb-8 md:mb-10">
        <div class="w-20 h-20 md:w-24 md:h-24 mb-5 rounded-xl overflow-hidden border-2 border-white/10 shadow-2xl">
            <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover" alt="Profile">
        </div>
        <h2 class="text-lg md:text-xl font-bold text-white uppercase tracking-widest">Athelstan Bundalian</h2>
        <div class="px-3 py-1 mt-2 border border-indigo-500/30 rounded-full bg-indigo-500/10">
            <p class="text-[9px] md:text-[10px] text-indigo-400 font-bold uppercase tracking-wider">Computer Engineering Graduate</p>
        </div>
    </div>

    <nav class="flex-1 flex flex-col space-y-2 mb-8 overflow-y-auto">
        <a href="#hero" class="mobile-link group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-xs md:text-sm font-bold uppercase text-gray-400 group-hover:text-white transition-colors">Home</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-indigo-500 transition-colors opacity-100 lg:opacity-0 lg:group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
        <a href="#projects-list" class="mobile-link group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-xs md:text-sm font-bold uppercase text-gray-400 group-hover:text-white transition-colors">Projects</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-indigo-500 transition-colors opacity-100 lg:opacity-0 lg:group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
        <a href="#about-section" class="mobile-link group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-xs md:text-sm font-bold uppercase text-gray-400 group-hover:text-white transition-colors">About Me</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-indigo-500 transition-colors opacity-100 lg:opacity-0 lg:group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </nav>

    <div class="border-t border-white/10 pt-6 md:pt-8 mt-auto">
        <h4 class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-4">Contact Details</h4>
        
        <div class="space-y-4 mb-6">
            <a href="mailto:athelstanbundalian@gmail.com" class="flex items-center gap-4 group">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-white/5 flex items-center justify-center text-indigo-500 border border-white/5 group-hover:bg-indigo-600 group-hover:text-white group-hover:border-indigo-500 transition-all duration-300">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div class="overflow-hidden">
                    <p class="text-[9px] text-gray-500 uppercase tracking-wider mb-0.5">Email Me</p>
                    <p class="text-[10px] md:text-xs font-bold text-gray-200 group-hover:text-white truncate w-32 md:w-auto transition-colors">athelstanbundalian@gmail.com</p>
                </div>
            </a>
            
             <a href="tel:09682313563" class="flex items-center gap-4 group">
                <div class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-white/5 flex items-center justify-center text-green-500 border border-white/5 group-hover:bg-green-600 group-hover:text-white group-hover:border-green-500 transition-all duration-300">
                      <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div class="overflow-hidden">
                    <p class="text-[9px] text-gray-500 uppercase tracking-wider mb-0.5">Call Me</p>
                    <p class="text-[10px] md:text-sm font-bold text-gray-200 group-hover:text-white transition-colors">0968 231 3563</p>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-4 gap-2">
            <a href="https://www.facebook.com/tels.bundalian" target="_blank" class="h-10 flex items-center justify-center bg-white/5 rounded-lg text-gray-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
            </a>
            <a href="https://www.instagram.com/telssob/" target="_blank" class="h-10 flex items-center justify-center bg-white/5 rounded-lg text-gray-400 hover:bg-[#E4405F] hover:text-white transition-all duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z"></path></svg>
            </a>
            <a href="https://www.linkedin.com/in/athelstan-bundalian-36a43a133/" target="_blank" class="h-10 flex items-center justify-center bg-white/5 rounded-lg text-gray-400 hover:bg-[#0A66C2] hover:text-white transition-all duration-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
            <a href="https://github.com/Athelstan2727" target="_blank" class="h-10 flex items-center justify-center bg-white/5 rounded-lg text-gray-400 hover:bg-white hover:text-black transition-all duration-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</aside>

<div id="main-content" class="relative w-full lg:w-auto lg:ml-[320px] bg-[#050505] min-h-screen text-white selection:bg-indigo-500 selection:text-white transition-all duration-300">

    <section id="hero" class="min-h-screen flex items-center justify-center p-6 md:p-12 lg:p-24 relative overflow-hidden border-b border-white/5">
        
        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-5 flex justify-center lg:justify-start order-1 lg:order-1 mt-16 lg:mt-0">
                <div class="w-full max-w-[340px] bg-black border border-white/10 p-6 rounded-xl shadow-[0_0_60px_-15px_rgba(255,255,255,0.05)] relative transform transition-transform hover:scale-[1.02] duration-500 mx-auto lg:mx-0">
                    
                    <div class="flex justify-between items-center mb-5 border-b border-white/10 pb-3">
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500">Identity</span>
                        <div class="flex gap-1.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-red-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-yellow-500"></div>
                            <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                        </div>
                    </div>

                    <div class="w-full aspect-square mb-5 bg-zinc-900 overflow-hidden relative rounded border border-white/5">
                        <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover" alt="Profile">
                    </div>

                    <h3 class="text-white font-bold uppercase tracking-wider text-xl md:text-2xl leading-none">Athelstan Bundalian</h3>
                    <p class="text-[10px] md:text-xs text-indigo-500 font-mono mt-1 mb-6">Computer Engineering Graduate</p>
                    
                    <div class="space-y-3 text-[10px] md:text-[11px] text-gray-400 font-mono border-t border-white/10 pt-4">
                         <div class="flex items-center gap-3 group cursor-pointer hover:text-white transition-colors">
                             <div class="w-6 h-6 rounded bg-white/5 flex items-center justify-center text-gray-500 group-hover:text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                             </div>
                             <span class="truncate">athelstanbundalian@gmail.com</span>
                         </div>
                         <div class="flex items-center gap-3 group cursor-pointer hover:text-white transition-colors">
                            <div class="w-6 h-6 rounded bg-white/5 flex items-center justify-center text-gray-500 group-hover:text-white">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                             </div>
                             <span>0968 231 3563</span>
                         </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 flex flex-col justify-center items-center lg:items-start space-y-6 md:space-y-4 order-2 lg:order-2 text-center lg:text-left">
                <a href="#projects-list" class="group block relative overflow-hidden">
                    <span class="block text-5xl md:text-7xl lg:text-8xl font-black text-white uppercase tracking-tighter leading-[0.9] group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-500 group-hover:to-white transition-all duration-300 transform group-hover:translate-x-0 lg:group-hover:translate-x-4 group-hover:italic">
                        Projects
                    </span>
                    <span class="hidden lg:inline-block text-sm font-mono text-gray-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pl-2">View Notable Projects -></span>
                </a>

                <a href="#about-section" class="group block relative overflow-hidden">
                    <span class="block text-5xl md:text-7xl lg:text-8xl font-black text-white uppercase tracking-tighter leading-[0.9] group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-500 group-hover:to-white transition-all duration-300 transform group-hover:translate-x-0 lg:group-hover:translate-x-4 group-hover:italic">
                        About Me
                    </span>
                      <span class="hidden lg:inline-block text-sm font-mono text-gray-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pl-2">My Journey & Skills -></span>
                </a>

                <a href="mailto:athelstanbundalian@gmail.com" class="group block relative overflow-hidden">
                    <span class="block text-5xl md:text-7xl lg:text-8xl font-black text-white uppercase tracking-tighter leading-[0.9] group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-indigo-500 group-hover:to-white transition-all duration-300 transform group-hover:translate-x-0 lg:group-hover:translate-x-4 group-hover:italic">
                        Contact Me
                    </span>
                      <span class="hidden lg:inline-block text-sm font-mono text-gray-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pl-2">Let's Work Together -></span>
                </a>
            </div>
        </div>

        <div class="absolute bottom-6 md:bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path></svg>
        </div>
    </section>


    <section id="projects-list" class="bg-[#0a0a0a] p-6 md:p-12 lg:p-20 border-t border-white/10 min-h-screen transition-all">
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-10 md:mb-16 gap-4">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold uppercase tracking-tighter text-white">Notable Projects</h2>
                <p class="text-xs md:text-sm text-gray-500 mt-2">Hardware & Software Integration</p>
            </div>
            <span class="text-xs font-mono text-indigo-500">2022 — 2026</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <a href="{{ url('/project/contracts-hub') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/contractshub.jpg') }}" class="w-full h-full object-cover opacity-80 md:opacity-60 grayscale md:grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="Contracts">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">Database</div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">Contracts Hub</h3>
                <p class="text-[10px] md:text-xs text-gray-500 mt-1 uppercase tracking-wider">Aboitiz Land System</p>
            </a>
            
            <a href="{{ url('/project/ai-rigation') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-80 md:opacity-60 grayscale md:grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="EcoFlow">
                    <div class="absolute top-3 left-3 bg-black/80 px-2 py-1 text-[10px] font-bold uppercase text-white rounded border border-white/10">IoT / AI</div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">EcoFlow</h3>
                <p class="text-[10px] md:text-xs text-gray-500 mt-1 uppercase tracking-wider">AI Powered Greenhouse System</p>
            </a>
            
            <a href="{{ url('/project/tugon-lipa') }}" class="group block">
                <div class="relative w-full aspect-[4/3] bg-zinc-900 rounded-lg overflow-hidden border border-white/10 mb-4">
                    <img src="{{ asset('images/tugonlipa.jpg') }}" class="w-full h-full object-cover opacity-80 md:opacity-60 grayscale md:grayscale group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700" alt="Tugon">
                    <div class="absolute top-3 left-3 bg-amber-500 text-black px-2 py-1 text-[10px] font-bold uppercase rounded">★ Award Winner</div>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-white uppercase group-hover:text-indigo-400 transition-colors">TugonLipa</h3>
                <p class="text-[10px] md:text-xs text-gray-500 mt-1 uppercase tracking-wider">Philippine Innovation Conf. 2025</p>
            </a>
        </div>
    </section>

    <section id="about-section" class="p-6 md:p-12 lg:p-20 bg-[#050505] border-t border-white/10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            <div class="order-2 lg:order-1">
                <h3 class="text-sm font-bold uppercase tracking-widest text-indigo-500 mb-6">About Me</h3>
                <p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-6">
                    I am a Computer Engineering graduate from the University of Batangas. I specialize in building full-stack applications. I am passionate in machine learning and utilizing AI Models and putting them into practice.
                </p>
                <div class="flex flex-wrap gap-2 mt-8">
                    <span class="px-3 py-1 border border-white/20 rounded-full text-[10px] md:text-xs text-gray-400">Python, C++, PHP, JavaScript</span>
                    <span class="px-3 py-1 border border-white/20 rounded-full text-[10px] md:text-xs text-gray-400">Embedded Systems</span>
                    <span class="px-3 py-1 border border-white/20 rounded-full text-[10px] md:text-xs text-gray-400">Troubleshooting</span>
                    <span class="px-3 py-1 border border-white/20 rounded-full text-[10px] md:text-xs text-gray-400">AI Models / ML</span>
                </div>
            </div>
            <div class="order-1 lg:order-2 relative h-64 md:h-[400px] lg:h-auto min-h-[300px] rounded-lg overflow-hidden border border-white/10">
                <img src="{{ asset('images/profile2.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-60" alt="About">
            </div>
        </div>
    </section>

    <footer class="p-8 border-t border-white/10 text-center text-gray-700 text-xs">
        &copy; 2026 Athelstan Bundalian. All rights reserved.
    </footer>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Elements
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content'); // New Element Select
        const overlay = document.getElementById('mobile-overlay');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        // Functions
        function toggleMenu() {
            // Note: On desktop (lg), the sidebar has 'lg:translate-x-0' so this logic primarily affects mobile
            const isClosed = sidebar.classList.contains('-translate-x-full');
            
            if (isClosed) {
                // Open Menu
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                // Close Menu
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }

        // NEW: Scroll Handler for Desktop Sidebar
        function handleDesktopScroll() {
            // Only apply this logic on desktop screens (lg breakpoint is 1024px)
            if (window.innerWidth >= 1024) {
                // Threshold: 50px (you can adjust this number)
                if (window.scrollY < 50) {
                    // AT TOP: Hide Sidebar & Expand Content
                    
                    // 1. Hide Sidebar: remove the forcing class (lg:translate-x-0) and add hide class
                    sidebar.classList.remove('lg:translate-x-0');
                    sidebar.classList.add('-translate-x-full');
                    
                    // 2. Expand Content: Remove the left margin
                    mainContent.classList.remove('lg:ml-[320px]');
                    
                } else {
                    // SCROLLED DOWN: Show Sidebar & Shrink Content
                    
                    // 1. Show Sidebar
                    sidebar.classList.add('lg:translate-x-0');
                    sidebar.classList.remove('-translate-x-full');
                    
                    // 2. Shrink Content (Add margin back)
                    mainContent.classList.add('lg:ml-[320px]');
                }
            } else {
                 // On mobile, ensure we don't accidentally leave desktop classes messing up the layout
                 // if resizing the window
                 mainContent.classList.remove('lg:ml-[320px]');
            }
        }

        // Event Listeners
        toggleBtn.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);

        // Scroll Listener
        window.addEventListener('scroll', handleDesktopScroll);
        // Run once on load in case page is refreshed halfway down
        handleDesktopScroll();
        // Run on resize to fix layout if window size changes
        window.addEventListener('resize', handleDesktopScroll);

        // Close menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) { // Only on mobile/tablet
                    toggleMenu();
                }
            });
        });

        // Smooth Scrolling (Standard)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

@endsection