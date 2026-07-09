<header class="fixed w-full top-0 z-50 glass-header border-b border-gray-100 dark:border-gray-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-3" data-aos="fade-down">
                <div class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center bg-white dark:bg-gray-800 shadow-sm transition-colors duration-300">
                    <span class="font-bold text-lg tracking-tight text-primary dark:text-white">DP</span>
                </div>
            </div>
            
            <!-- Navigation (Desktop) -->
            <nav class="hidden md:flex space-x-8" data-aos="fade-down" data-aos-delay="100">
                <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-accent dark:hover:text-accent transition-colors font-medium text-sm">About</a>
                <a href="#expertise" class="text-gray-600 dark:text-gray-300 hover:text-accent dark:hover:text-accent transition-colors font-medium text-sm">Expertise</a>
                <a href="#projects" class="text-gray-600 dark:text-gray-300 hover:text-accent dark:hover:text-accent transition-colors font-medium text-sm">Projects</a>
                <a href="#certifications" class="text-gray-600 dark:text-gray-300 hover:text-accent dark:hover:text-accent transition-colors font-medium text-sm">Certifications</a>
            </nav>

            <!-- CTA & Theme Toggle -->
            <div class="flex items-center gap-4" data-aos="fade-down" data-aos-delay="200">
                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-300 transition-colors" aria-label="Toggle Dark Mode">
                    <!-- Sun Icon (shows in Dark Mode) -->
                    <svg x-show="darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <!-- Moon Icon (shows in Light Mode) -->
                    <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>

                <a href="#contact" class="magnetic-btn hidden sm:flex bg-primary dark:bg-accent text-white px-5 py-2.5 rounded-full text-sm font-medium hover:bg-accent dark:hover:bg-teal-500 transition-all shadow-[0_0_15px_rgba(18,18,18,0.2)] hover:shadow-[0_0_20px_rgba(13,148,136,0.4)] items-center gap-2">
                    Let's talk <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</header>
