@extends('layouts.app')

@section('content')

<aside id="dynamic-sidebar" class="fixed top-0 left-0 h-screen w-[320px] bg-black/95 backdrop-blur-xl border-r border-white/10 z-50 flex flex-col p-8 transition-all duration-700 ease-[cubic-bezier(0.76,0,0.24,1)] opacity-0 pointer-events-none -translate-x-10 hover:border-indigo-500/50 hover:shadow-[inset_0_0_30px_rgba(99,102,241,0.1)]">

    <div class="flex flex-col items-center text-center mb-8 border-b border-white/10 pb-6">
        <div class="relative w-32 h-32 mb-4 rounded-lg overflow-hidden border-2 border-white/10 group-hover:border-indigo-500 transition-all duration-500">
            <img src="{{ asset('images/profile.jpg') }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" alt="Profile">
        </div>
        <h2 class="text-xl font-bold text-white uppercase tracking-widest">A. Bundalian</h2>
        <p class="text-xs text-indigo-500 font-mono mt-1">Full Stack Developer</p>
    </div>

    <nav class="flex-1 flex flex-col justify-center space-y-4">
        <a href="#about-modal" class="group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-lg font-bold uppercase text-gray-400 group-hover:text-white tracking-widest transition-colors">About Me</span>
            <svg class="w-4 h-4 text-indigo-500 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
        
        <a href="#projects-list" class="group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-lg font-bold uppercase text-gray-400 group-hover:text-white tracking-widest transition-colors">Projects</span>
            <svg class="w-4 h-4 text-indigo-500 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>

        <a href="mailto:athelstanbundalian@gmail.com" class="group flex items-center justify-between p-3 rounded-lg hover:bg-white/5 transition-all cursor-pointer">
            <span class="text-lg font-bold uppercase text-gray-400 group-hover:text-white tracking-widest transition-colors">Contact</span>
            <svg class="w-4 h-4 text-indigo-500 opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </nav>

    <div class="pt-6 border-t border-white/10 text-xs font-mono text-gray-500 space-y-3">
        
        <div class="flex items-center gap-3 hover:text-white transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <span class="truncate">athelstanbundalian@gmail.com</span>
        </div>

        <div class="flex items-center gap-3 hover:text-white transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
            <span>0968 231 3563</span>
        </div>

        <div class="flex gap-2 mt-4">
            <a href="https://www.facebook.com/tels.bundalian" target="_blank" class="flex-1 bg-white/5 py-2 flex justify-center rounded hover:bg-blue-600 hover:text-white transition-all">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
            </a>
            <a href="https://www.instagram.com/telssob/" target="_blank" class="flex-1 bg-white/5 py-2 flex justify-center rounded hover:bg-pink-600 hover:text-white transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M7.5 3h9a4.5 4.5 0 014.5 4.5v9a4.5 4.5 0 01-4.5 4.5h-9A4.5 4.5 0 013 16.5v-9A4.5 4.5 0 017.5 3z"></path></svg>
            </a>
            <a href="https://www.linkedin.com/in/athelstan-bundalian-36a43a133/" target="_blank" class="flex-1 bg-white/5 py-2 flex justify-center rounded hover:bg-blue-700 hover:text-white transition-all">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
        </div>
    </div>
</aside>


<div class="relative w-full">

    <div class="group/left w-full min-h-screen relative overflow-hidden border-b border-white/10 flex flex-col items-center justify-center text-center">
        
        <div class="absolute inset-0 z-0 bg-black">
             <img src="{{ asset('images/profile.jpg') }}" 
                  class="w-full h-full object-cover opacity-30 grayscale group-hover/left:opacity-50 group-hover/left:grayscale-0 transition duration-1000 ease-in-out scale-105 group-hover/left:scale-100" 
                  alt="Athelstan Profile">
             <div class="absolute inset-0 bg-black/60 group-hover/left:bg-black/40 transition duration-1000"></div>
        </div>

        <div class="relative z-10 p-12">
            <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter text-white mb-4 drop-shadow-2xl">
                Bundalian<span class="text-indigo-600">.</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 font-mono uppercase tracking-widest mb-12">
                Full Stack Developer & AI Engineer
            </p>
            <div class="animate-bounce mt-12">
                <p class="text-xs text-gray-500 uppercase tracking-widest">Scroll to Begin</p>
                <svg class="w-6 h-6 text-indigo-500 mx-auto mt-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7-7-7"></path></svg>
            </div>
        </div>
    </div>

    <section id="projects-list" class="bg-[#0a0a0a] min-h-screen p-8 lg:p-20 relative z-20 transition-all duration-500 lg:pl-20">
        <div class="max-w-6xl mx-auto pl-0 lg:pl-[250px] transition-all duration-500">
            
            <div class="flex items-end justify-between mb-16 border-b border-white/10 pb-4">
                <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-500">Notable Projects</h2>
                <span class="text-xs text-gray-600 uppercase tracking-widest hidden md:block">Selected Works 2023-2026</span>
            </div>
            
            <div class="grid grid-cols-1 gap-16">
                
                <a href="{{ url('/project/contracts-hub') }}" class="group relative block h-[400px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer hover:border-indigo-500/50 transition-all">
                    <img src="{{ asset('images/contractshub.jpg') }}" class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-105" alt="Contracts Hub">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="text-3xl font-bold text-white mb-2">Contracts Hub</h3>
                        <p class="text-gray-400 text-sm">Database Management System</p>
                    </div>
                </a>

                <a href="{{ url('/project/ai-rigation') }}" class="group relative block h-[400px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer hover:border-indigo-500/50 transition-all">
                    <img src="{{ asset('images/ecoflow.jpg') }}" class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-105" alt="AI-Rigation">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="text-3xl font-bold text-white mb-2">AI-Rigation</h3>
                        <p class="text-gray-400 text-sm">IoT & Machine Learning Integration</p>
                    </div>
                </a>

                <a href="{{ url('/project/tugon-lipa') }}" class="group relative block h-[400px] w-full bg-zinc-900 border border-white/10 overflow-hidden rounded-lg cursor-pointer hover:border-indigo-500/50 transition-all">
                    <img src="{{ asset('images/tugonlipa.jpg') }}" class="w-full h-full object-cover opacity-50 grayscale transition duration-700 ease-out group-hover:opacity-100 group-hover:grayscale-0 group-hover:scale-105" alt="Tugon Lipa">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <span class="text-amber-400 text-xs font-bold uppercase tracking-widest mb-2 block">★ Award Winner</span>
                        <h3 class="text-3xl font-bold text-white mb-2">TugonLipa</h3>
                        <p class="text-gray-400 text-sm">Innovation Conference Winner</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section id="about-modal" class="min-h-screen bg-[#050505] p-8 lg:p-20 flex items-center relative z-20 lg:pl-20 border-t border-white/10">
        <div class="max-w-6xl mx-auto pl-0 lg:pl-[250px] w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div>
                <h2 class="text-sm font-bold uppercase text-indigo-500 mb-8 tracking-widest">The Bio</h2>
                <p class="text-3xl md:text-4xl font-bold leading-tight text-white mb-8">
                    I am Athelstan Bundalian. An Aspiring <span class="text-gray-500">Full Stack Developer</span> and <span class="text-gray-500">AI Engineer</span>.
                </p>
                <p class="text-gray-400 leading-relaxed mb-8">
                    My passion lies in bridging the gap between intelligent backend systems and real-world hardware. I build modern solutions that don't just exist on a screen, but interact with the world.
                </p>
                
                <div class="grid grid-cols-2 gap-8 text-sm">
                    <div>
                        <h4 class="text-white font-bold uppercase mb-2">Education</h4>
                        <p class="text-gray-500">BS Computer Engineering</p>
                        <p class="text-gray-500">University of Batangas</p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold uppercase mb-2">Core Tech</h4>
                        <p class="text-gray-500">Laravel, Vue, Python</p>
                        <p class="text-gray-500">IoT (Arduino/ESP32)</p>
                    </div>
                </div>
            </div>

            <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden border border-white/10">
                <img src="{{ asset('images/profile2.jpg') }}" alt="About" class="w-full h-full object-cover">
            </div>

        </div>
    </section>

    <footer class="p-8 bg-black border-t border-white/10 text-center text-gray-600 text-sm relative z-20 pl-0 lg:pl-[320px]">
        &copy; 2026 Athelstan Bundalian.
    </footer>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sidebar = document.getElementById('dynamic-sidebar');

        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;

            // Threshold: When scroll is greater than 50px
            if (scrollY > 50) {
                // Show Sidebar (Fade in + Slide in)
                sidebar.classList.remove('opacity-0', 'pointer-events-none', '-translate-x-10');
            } else {
                // Hide Sidebar (Fade out + Slide out)
                sidebar.classList.add('opacity-0', 'pointer-events-none', '-translate-x-10');
            }
        });
    });
</script>

@endsection