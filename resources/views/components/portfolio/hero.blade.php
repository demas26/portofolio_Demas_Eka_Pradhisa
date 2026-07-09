<section class="relative pt-40 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden min-h-[90vh] flex flex-col justify-center">
    <!-- Orbital Background Elements -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150%] max-w-4xl aspect-square pointer-events-none z-0 opacity-20 dark:opacity-30">
        <!-- Orbit 1 -->
        <div class="absolute inset-10 border border-dashed border-gray-400 dark:border-gray-500 rounded-full animate-[spin_40s_linear_infinite]"></div>
        <!-- Orbit 2 -->
        <div class="absolute inset-24 border border-gray-300 dark:border-gray-600 rounded-full animate-[spin_60s_linear_infinite_reverse]"></div>
        <!-- Orbit 3 -->
        <div class="absolute inset-40 border border-dashed border-accent/50 rounded-full animate-[spin_80s_linear_infinite]"></div>
    </div>

    <div class="relative z-10 text-center max-w-4xl mx-auto mb-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/50 dark:bg-gray-800/50 backdrop-blur-md rounded-full text-xs font-semibold text-gray-600 dark:text-gray-300 tracking-wide uppercase mb-8 border border-gray-200 dark:border-gray-700 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
            Available for opportunities
        </div>
        
        <h1 class="text-5xl md:text-7xl font-black tracking-tight text-primary dark:text-white mb-6 leading-tight font-sans">
            I design systems.<br>
            <span class="text-gray-400 dark:text-gray-500">I build experiences.</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto leading-relaxed mb-8">
            Halo, saya Demas Eka Pradhisa. Saya mengubah alur bisnis yang kompleks menjadi produk digital dan sistem yang terstruktur, efisien, dan ramah pengguna.
        </p>

        <!-- Typing Effect -->
        <div class="text-lg font-mono text-accent dark:text-teal-400 mb-10 h-8 font-semibold"
             x-data="{ 
                text: '',
                words: ['Web Developer.', 'System Analyst.', 'UI/UX Designer.'],
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
                        typeSpeed = 2000;
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
        
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#projects" class="magnetic-btn px-8 py-4 bg-primary dark:bg-white text-white dark:text-primary text-sm font-bold rounded-full hover:scale-105 transition-transform flex items-center gap-2 shadow-lg hover:shadow-xl">
                View projects <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="#" class="magnetic-btn px-8 py-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border border-gray-200 dark:border-gray-700 text-primary dark:text-white text-sm font-bold rounded-full hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                Download CV
            </a>
        </div>
    </div>

    <!-- Floating Orbital Elements -->
    <div class="relative w-full max-w-5xl mx-auto h-0" data-aos="fade-up" data-aos-delay="400">
        <!-- Floating Profile Avatar -->
        <div class="absolute -top-32 md:-top-56 right-4 md:right-32 w-20 md:w-28 h-20 md:h-28 rounded-full border-[3px] border-white dark:border-gray-700 shadow-2xl overflow-hidden z-20 animate-[bounce_6s_infinite]">
            <img src="{{ asset('images/foto.jpg') }}" alt="Demas Eka Pradhisa" class="w-full h-full object-cover">
        </div>
        
        <!-- Floating Tags -->
        <div class="absolute -top-64 left-2 md:left-20 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg z-20 animate-[bounce_5s_infinite_reverse]">
            <span class="text-[10px] font-bold text-gray-500 dark:text-gray-400 block mb-1 uppercase tracking-wider">Primary Role</span>
            <strong class="text-sm text-primary dark:text-white flex items-center gap-2">
                <span class="text-accent font-mono">&lt;/&gt;</span> Web Developer
            </strong>
        </div>
        
        <div class="absolute -top-10 left-10 md:left-40 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg z-20 animate-[bounce_7s_infinite]">
            <span class="text-[10px] font-bold text-gray-500 dark:text-gray-400 block mb-1 uppercase tracking-wider">Based in</span>
            <strong class="text-sm text-primary dark:text-white flex items-center gap-2">
                <span class="text-accent font-mono">ID</span> Indonesia
            </strong>
        </div>
    </div>

    <!-- Animated Counters -->
    <div class="mt-auto pt-24 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto border-t border-gray-200 dark:border-gray-800 w-full relative z-10"
         x-data="{ shown: false }" 
         x-intersect.once="shown = true; 
            new countUp.CountUp($refs.exp, 3).start();
            new countUp.CountUp($refs.proj, 10).start();
            new countUp.CountUp($refs.tech, 5).start();
            new countUp.CountUp($refs.coffee, 500).start();">
        
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="text-4xl font-extrabold text-accent mb-2"><span x-ref="exp">0</span>+</div>
            <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Years Experience</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="text-4xl font-extrabold text-accent mb-2"><span x-ref="proj">0</span>+</div>
            <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Projects Done</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="text-4xl font-extrabold text-accent mb-2"><span x-ref="tech">0</span>+</div>
            <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Tech Stacks</div>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="text-4xl font-extrabold text-accent mb-2"><span x-ref="coffee">0</span>+</div>
            <div class="text-sm text-gray-500 dark:text-gray-400 font-medium">Cups of Coffee</div>
        </div>
    </div>
</section>
