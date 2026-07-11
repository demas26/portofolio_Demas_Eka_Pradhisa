<section class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden min-h-[800px] flex flex-col justify-center items-center text-center">
    <!-- Starry/Particle Background -->
    <div class="absolute inset-0 z-0 pointer-events-none bg-[#0f172a] dark:bg-[#0f172a]">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MDAiIGhlaWdodD0iNDAwIj4KICA8cGF0aCBkPSJNMTAwIDEwMCBMIDMwMCAzMDAiIHN0cm9rZT0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIiAvPgogIDxjaXJjbGUgY3g9IjEwMCIgY3k9IjEwMCIgcj0iMSIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjIpIiAvPgogIDxjaXJjbGUgY3g9IjMwMCIgY3k9IjMwMCIgcj0iMSIgZmlsbD0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjIpIiAvPgo8L3N2Zz4=')] bg-repeat opacity-50"></div>
    </div>
    
    <!-- Ambient Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

    <div class="relative z-10 w-full max-w-4xl flex flex-col items-center mt-12">
        <!-- Availability Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-gray-900/50 backdrop-blur-md rounded-full text-xs font-semibold text-gray-300 tracking-wider uppercase mb-10 border border-gray-700 shadow-lg" data-aos="fade-up">
            <span class="relative flex h-2.5 w-2.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
            </span>
            Available for opportunities
        </div>
        
        <!-- Main Headline -->
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight mb-8 leading-[1.1] font-sans" data-aos="fade-up" data-aos-delay="100">
            <span class="text-white block">I design systems.</span>
            <span class="text-gray-500 block mt-2">I build experiences.</span>
        </h1>
        
        <!-- Sub-headline -->
        <p class="text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="200">
            Halo, saya Demas Eka Pradhisa. Saya mengubah alur bisnis yang kompleks menjadi produk digital dan sistem yang terstruktur, efisien, dan ramah pengguna.
        </p>

        <!-- Typing Effect -->
        <div class="text-lg md:text-xl font-mono text-cyan-400 mb-12 h-8 font-semibold" data-aos="fade-up" data-aos-delay="300"
             x-data="{ 
                text: '',
                words: ['UI/UX & Web Development'],
                wordIndex: 0,
                charIndex: 0,
                isDeleting: false,
                type() {
                    let currentWord = this.words[this.wordIndex];
                    if(this.isDeleting) {
                        this.text = currentWord.substring(0, this.charIndex - 1);
                        this.charIndex--;
                    } else {
                        this.text = currentWord.substring(0, this.charIndex + 1);
                        this.charIndex++;
                    }
                    
                    let typeSpeed = this.isDeleting ? 50 : 100;
                    
                    if(!this.isDeleting && this.charIndex === currentWord.length) {
                        typeSpeed = 4000;
                        this.isDeleting = true;
                    } else if(this.isDeleting && this.charIndex === 0) {
                        this.isDeleting = false;
                        this.wordIndex++;
                        if(this.wordIndex === this.words.length) this.wordIndex = 0;
                        typeSpeed = 500;
                    }
                    
                    setTimeout(() => this.type(), typeSpeed);
                }
             }" x-init="type()">
            Focused on <strong x-text="text"></strong><span class="animate-pulse">_</span>
        </div>
        
        <!-- Buttons & Profile Picture Area -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 w-full relative" data-aos="fade-up" data-aos-delay="400">
            
            <div class="flex flex-col sm:flex-row gap-4 z-20">
                <a href="#projects" class="px-8 py-4 bg-white text-black text-sm font-bold rounded-full hover:scale-105 transition-transform flex items-center gap-2 shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)]">
                    View Projects <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="{{ asset('assets/CV _ Demas Eka Pradhisa.pdf') }}" download class="px-8 py-4 bg-transparent border border-gray-600 text-white text-sm font-bold rounded-full hover:bg-gray-800 transition-colors shadow-lg">
                    Download CV
                </a>
            </div>

            <!-- Profile Picture -->
            <div class="relative mt-8 md:mt-0 md:ml-8 z-20 hidden md:block">
                <div class="w-20 h-20 rounded-full border-2 border-gray-600 overflow-hidden shadow-2xl hover:scale-110 transition-transform cursor-pointer bg-red-600">
                    <img src="{{ asset('images/foto.jpg') }}" alt="Demas Eka Pradhisa" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Badges (Glassmorphism) -->
    <div class="absolute inset-0 w-full h-full pointer-events-none z-20 overflow-hidden hidden md:block">
        <!-- Top Left Corner Badge: Web Developer -->
        <div class="absolute top-[15%] lg:top-[20%] left-[2%] lg:left-[4%] bg-gray-900/60 backdrop-blur-xl px-5 py-3 border border-gray-700/50 rounded-2xl shadow-[0_8px_32px_rgba(0,0,0,0.5)] animate-[bounce_6s_infinite] flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            </div>
            <div>
                <strong class="text-sm text-white block">Web Developer</strong>
            </div>
        </div>

        <!-- Top Right Corner Badge: UI/UX Designer -->
        <div class="absolute top-[15%] lg:top-[20%] right-[2%] lg:right-[4%] bg-gray-900/60 backdrop-blur-xl px-5 py-3 border border-gray-700/50 rounded-2xl shadow-[0_8px_32px_rgba(0,0,0,0.5)] animate-[bounce_5s_infinite_reverse] flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
            </div>
            <div>
                <strong class="text-sm text-white block">UI/UX Designer</strong>
            </div>
        </div>

        <!-- Bottom Left Corner Badge: BNSP System Analyst -->
        <div class="absolute bottom-[30%] lg:bottom-[35%] left-[2%] lg:left-[4%] bg-gray-900/60 backdrop-blur-xl px-5 py-3 border border-gray-700/50 rounded-2xl shadow-[0_8px_32px_rgba(0,0,0,0.5)] animate-[bounce_7s_infinite] flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center text-cyan-400 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <strong class="text-sm text-white block">BNSP System Analyst</strong>
            </div>
        </div>

        <!-- Bottom Right Corner Badge: Tangerang Selatan -->
        <div class="absolute bottom-[30%] lg:bottom-[35%] right-[2%] lg:right-[4%] bg-gray-900/60 backdrop-blur-xl px-5 py-3 border border-gray-700/50 rounded-2xl shadow-[0_8px_32px_rgba(0,0,0,0.5)] animate-[bounce_4s_infinite_reverse] flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <div>
                <strong class="text-sm text-white block">Tangerang Selatan, ID</strong>
            </div>
        </div>
    </div>

    <!-- Animated Counters -->
    <div class="mt-auto pt-16 md:pt-24 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 max-w-4xl mx-auto border-t border-gray-800 w-full relative z-10" id="stats-container">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="text-3xl md:text-5xl font-extrabold text-cyan-400 mb-1 md:mb-2"><span class="stat-counter" data-target="8">0</span>+</div>
            <div class="text-[10px] md:text-sm text-gray-500 uppercase tracking-widest font-semibold">Proyek</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="text-3xl md:text-5xl font-extrabold text-cyan-400 mb-1 md:mb-2"><span class="stat-counter" data-target="5">0</span>+</div>
            <div class="text-[10px] md:text-sm text-gray-500 uppercase tracking-widest font-semibold">Riset</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="text-3xl md:text-5xl font-extrabold text-cyan-400 mb-1 md:mb-2"><span class="stat-counter" data-target="12">0</span>+</div>
            <div class="text-[10px] md:text-sm text-gray-500 uppercase tracking-widest font-semibold">Sertifikat</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="text-3xl md:text-5xl font-extrabold text-cyan-400 mb-1 md:mb-2"><span class="stat-counter" data-target="4">0</span>+</div>
            <div class="text-[10px] md:text-sm text-gray-500 uppercase tracking-widest font-semibold">Tahun Belajar</div>
        </div>
    </div>
</section>

<!-- Vanilla JS Counter Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.stat-counter');
        
        const animateCounters = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        let count = 0;
                        // Animate over 2 seconds
                        const duration = 2000; 
                        const stepTime = Math.abs(Math.floor(duration / target));
                        
                        const timer = setInterval(() => {
                            count += 1;
                            counter.innerText = count;
                            if (count >= target) {
                                clearInterval(timer);
                                counter.innerText = target;
                            }
                        }, stepTime);
                    });
                    // Stop observing once animation has run
                    observer.disconnect();
                }
            });
        };

        const observer = new IntersectionObserver(animateCounters, { threshold: 0.5 });
        const statsContainer = document.getElementById('stats-container');
        if (statsContainer) observer.observe(statsContainer);
    });
</script>
