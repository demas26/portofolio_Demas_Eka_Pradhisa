<section class="py-12 bg-accent/5 dark:bg-accent/10 border-y border-gray-100 dark:border-gray-800 overflow-hidden relative">
    <!-- Decorative gradients -->
    <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-secondary dark:from-gray-900 to-transparent z-10"></div>
    <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-secondary dark:from-gray-900 to-transparent z-10"></div>

    <div class="w-[200%] flex animate-marquee whitespace-nowrap cursor-default">
        <!-- We duplicate the content to make the infinite loop seamless -->
        <div class="flex items-center gap-12 px-6">
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">Web Development</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">System Analysis</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">UI/UX Design</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">Open For Work</span>
            <span class="text-3xl text-accent">✦</span>
        </div>
        <div class="flex items-center gap-12 px-6">
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">Web Development</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">System Analysis</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">UI/UX Design</span>
            <span class="text-3xl text-accent">✦</span>
            <span class="text-6xl md:text-8xl font-black text-outline uppercase tracking-tight">Open For Work</span>
            <span class="text-3xl text-accent">✦</span>
        </div>
    </div>
    
    <!-- Script for Scroll-Interactive Marquee -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let lastScrollY = window.scrollY;
            let currentDirection = -1; // -1 for left, 1 for right
            let currentPosition = 0;
            const marqueeElement = document.querySelector('.animate-marquee');
            
            // Disable the CSS animation to take over with JS
            if(marqueeElement) {
                marqueeElement.style.animation = 'none';
                
                const animate = () => {
                    // Base speed
                    let speed = 1.5;
                    currentPosition += (speed * currentDirection);
                    
                    // Reset if it goes out of bounds (assuming 2 copies, it needs to loop at 50%)
                    if (currentPosition <= -50) currentPosition = 0;
                    if (currentPosition >= 0) currentPosition = -50;
                    
                    marqueeElement.style.transform = `translateX(${currentPosition}%)`;
                    requestAnimationFrame(animate);
                };
                
                requestAnimationFrame(animate);
                
                window.addEventListener('scroll', () => {
                    const scrollY = window.scrollY;
                    if (scrollY > lastScrollY) {
                        currentDirection = -1; // Scrolling down -> move left
                    } else if (scrollY < lastScrollY) {
                        currentDirection = 1; // Scrolling up -> move right
                    }
                    lastScrollY = scrollY;
                });
            }
        });
    </script>
</section>
