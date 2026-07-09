<x-layouts.app>
    <div x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 800)" class="relative">
        
        <!-- Preloader / Skeleton Overlay -->
        <div x-show="!loaded" x-transition.opacity.duration.500ms class="fixed inset-0 z-[200] bg-secondary dark:bg-gray-900 flex items-center justify-center">
            <div class="flex flex-col items-center gap-4">
                <div class="w-16 h-16 border-4 border-gray-200 border-t-accent rounded-full animate-spin"></div>
                <p class="text-gray-500 dark:text-gray-400 font-medium tracking-widest uppercase text-sm animate-pulse">Memuat Portofolio...</p>
            </div>
        </div>

        <div x-show="loaded" x-transition.opacity.duration.800ms>
            
            <!-- Tech/Brutalism Ambient Effects -->
            <canvas id="particleCanvas" class="fixed inset-0 pointer-events-none -z-20 w-full h-full"></canvas>
            
            <!-- Ambient Glow Orbs -->
            <div class="fixed top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-accent/20 dark:bg-accent/10 blur-[120px] animate-pulse -z-30 pointer-events-none"></div>
            <div class="fixed bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-blue-500/10 dark:bg-blue-500/5 blur-[120px] animate-pulse -z-30 pointer-events-none" style="animation-delay: 2s;"></div>
            
            <!-- Noise Texture Overlay -->
            <div class="fixed inset-0 pointer-events-none -z-10 opacity-[0.03] dark:opacity-[0.04]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>

            
            <!-- Hero Section -->
            <x-portfolio.hero />

            <!-- About Section -->
            <x-portfolio.about />

            <!-- Capabilities Section -->
            <x-portfolio.capabilities />

            <!-- Marquee Section -->
            <x-portfolio.marquee />

            <!-- Projects Section -->
            <x-portfolio.projects-grid />

            <!-- Testimonials & Certifications Section -->
            <x-portfolio.testimonials />

            <!-- Contact Section -->
            <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-gray-100 dark:border-gray-800 mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div data-aos="fade-right">
                        <h2 class="text-3xl font-bold text-primary dark:text-white mb-4 tracking-tight">Let's connect.</h2>
                        <p class="text-gray-500 dark:text-gray-400 mb-8">Hubungi saya untuk diskusi proyek atau kolaborasi sistem.</p>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <span>demas.pradhisa@gmail.com</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-600 dark:text-gray-300">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Tangerang, Indonesia</span>
                            </div>
                        </div>
                    </div>

                    <div class="floating-card p-8 border border-gray-100 dark:border-gray-800" data-aos="fade-left">
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama</label>
                                    <input type="text" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white rounded-lg focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors" placeholder="John Doe">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                                    <input type="email" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white rounded-lg focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors" placeholder="john@example.com">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subjek</label>
                                <input type="text" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white rounded-lg focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors" placeholder="Proyek Sistem Baru">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Pesan</label>
                                <textarea rows="4" class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white rounded-lg focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-colors resize-none" placeholder="Ceritakan tentang bisnis Anda..."></textarea>
                            </div>
                            <button type="submit" class="magnetic-btn w-full bg-primary dark:bg-accent text-white py-4 rounded-lg font-bold hover:bg-accent dark:hover:bg-teal-500 transition-colors flex items-center justify-center gap-2">
                                Kirim pesan <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layouts.app>
