<x-layouts.app>
    <div x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 800)" class="relative">
        
        <!-- Preloader / Skeleton Overlay -->
        <div x-show="!loaded" x-transition.opacity.duration.500ms class="fixed inset-0 z-[200] bg-secondary dark:bg-gray-900 flex items-center justify-center">
            <div class="flex flex-col items-center gap-4">
                <div class="w-16 h-16 border-4 border-gray-200 border-t-accent rounded-full animate-spin"></div>
                <p class="text-gray-500 dark:text-gray-400 font-medium tracking-widest uppercase text-sm animate-pulse">Loading Portfolio...</p>
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

            <!-- Technical Toolkit Section -->
            <x-portfolio.toolkit />

            <!-- Marquee Section -->
            <x-portfolio.marquee />

            <!-- Projects Section -->
            <x-portfolio.projects-grid />

            <!-- Testimonials & Certifications Section -->
            <x-portfolio.testimonials />

            <!-- GitHub Dashboard Section -->
            <x-portfolio.github />

            <!-- Contact Section -->
            <x-portfolio.contact />
        </div>
    </div>
</x-layouts.app>
