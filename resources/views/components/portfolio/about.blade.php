<section id="about" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="mb-12" data-aos="fade-right">
        <h2 class="text-3xl font-bold text-primary dark:text-white mb-2 tracking-tight">About & Experience</h2>
        <p class="text-gray-500 dark:text-gray-400">Perjalanan karir, pendidikan, dan filosofi kerja saya.</p>
    </div>

    <!-- Bento Box Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Large Box: Philosophy & Intro (Span 2) -->
        <div class="md:col-span-2 floating-card p-8 border border-gray-100 dark:border-gray-800 relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-accent/5 rounded-full blur-3xl"></div>
            <h2 class="text-3xl font-bold text-primary dark:text-white tracking-tight mb-4">Analitis secara alami.<br><span class="text-gray-400 dark:text-gray-500">Terstruktur melalui praktik.</span></h2>
            <div class="prose prose-lg text-gray-600 dark:text-gray-400">
                <p>
                    Saya adalah seorang mahasiswa Sistem Informasi di Telkom University yang memiliki passion mendalam pada pengembangan *Full-Stack Web*, desain UI/UX, dan membantu transformasi digital pada sektor UMKM.
                </p>
                <p class="mt-4">
                    Bagi saya, sistem yang hebat bukan hanya sekadar berfungsi, tetapi juga harus membuat kompleksitas bisnis terasa sangat mudah dan intuitif bagi penggunanya.
                </p>
            </div>
        </div>

        <!-- Small Box: Profile Image -->
        <div class="floating-card p-6 border border-gray-100 dark:border-gray-800 relative overflow-hidden flex flex-col items-center justify-center text-center group bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900" data-aos="fade-up" data-aos-delay="200">
            <div class="relative mb-5 mt-2">
                <!-- Glowing ring -->
                <div class="absolute inset-0 bg-accent/30 rounded-full blur-xl animate-pulse group-hover:bg-accent/50 transition-colors duration-500"></div>
                <!-- Frame -->
                <div class="relative w-36 h-36 rounded-full border-[6px] border-white dark:border-gray-700 overflow-hidden shadow-xl transform group-hover:scale-105 transition-transform duration-500 bg-gray-200 dark:bg-gray-800">
                    <img src="{{ asset('images/foto.jpg') }}" alt="Demas Eka Pradhisa" class="w-full h-full object-cover">
                </div>
                <!-- Online badge dot on the frame -->
                <div class="absolute bottom-2 right-2 w-5 h-5 bg-green-500 border-[3px] border-white dark:border-gray-700 rounded-full shadow-sm"></div>
            </div>
            
            <h3 class="font-bold text-primary dark:text-white text-lg tracking-tight mb-1">Demas Eka P.</h3>
            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium mb-4 uppercase tracking-wider">Web Developer</p>
            
            <div class="flex items-center gap-2 text-primary dark:text-gray-300 text-xs px-4 py-1.5 bg-white dark:bg-gray-800 rounded-full border border-gray-200 dark:border-gray-700 shadow-sm font-semibold">
                <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                Available for work
            </div>
        </div>

        <!-- Large Box: Vertical Timeline (Span 2) -->
        <div class="md:col-span-2 floating-card p-8 border border-gray-100 dark:border-gray-800" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-xl font-bold text-primary dark:text-white mb-6 flex items-center gap-2">
                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Experience & Education
            </h3>
            
            <div class="relative border-l-2 border-gray-100 dark:border-gray-700 ml-3 space-y-8">
                <!-- Item 1 -->
                <div class="relative pl-6">
                    <div class="absolute w-4 h-4 bg-white dark:bg-gray-800 rounded-full -left-[9px] top-1 border-2 border-accent timeline-dot"></div>
                    <h4 class="font-bold text-primary dark:text-white text-lg">Web Developer Freelance</h4>
                    <p class="text-sm text-accent font-medium mb-2">2023 - Present</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Membangun berbagai sistem manajemen dan Point of Sale (POS) untuk membantu operasional UMKM secara digital menggunakan Laravel & Tailwind CSS.</p>
                </div>
                <!-- Item 2 -->
                <div class="relative pl-6">
                    <div class="absolute w-4 h-4 bg-white dark:bg-gray-800 rounded-full -left-[9px] top-1 border-2 border-gray-300 dark:border-gray-600"></div>
                    <h4 class="font-bold text-primary dark:text-white text-lg">S1 Sistem Informasi</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 font-medium mb-2">Telkom University • Semester 7</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Fokus pada rekayasa perangkat lunak, analisis sistem, dan desain UI/UX interaktif.</p>
                </div>
            </div>
        </div>

        <!-- Small Box: Contact CTA -->
        <div class="floating-card p-8 border border-gray-100 dark:border-gray-800 bg-primary dark:bg-accent text-white flex flex-col justify-center items-center text-center" data-aos="fade-up" data-aos-delay="400">
            <svg class="w-12 h-12 mb-4 text-accent dark:text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            <h3 class="text-xl font-bold mb-2">Let's build together</h3>
            <p class="text-gray-400 dark:text-teal-100 text-sm mb-6">Punya ide proyek atau butuh bantuan analisis sistem?</p>
            <a href="#contact" class="px-6 py-2 bg-white text-primary rounded-full text-sm font-bold hover:scale-105 transition-transform w-full">Contact Me</a>
        </div>
    </div>
</section>
