<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" 
    x-data="{ 
        darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        scrollPercent: 0,
        updateScroll() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            this.scrollPercent = (winScroll / height) * 100;
        }
    }"
    x-init="$watch('darkMode', val => localStorage.setItem('theme', val ? 'dark' : 'light'))"
    :class="{ 'dark': darkMode }"
    @scroll.window="updateScroll()">
<head>
    <meta charset="utf-8">
    <!-- Force Desktop Layout on Mobile (User Preference) -->
    <meta name="viewport" content="width=1280">
    <title>Demas Eka Pradhisa | UI/UX Designer, Web Developer & System Analyst</title>

    <!-- Meta Tags & SEO -->
    <meta name="description" content="Official portfolio of Demas Eka Pradhisa, a Web Developer and System Analyst. Information Systems student at Telkom University.">
    <meta name="keywords" content="Demas Eka Pradhisa, Web Developer, System Analyst, UI/UX Designer, Telkom University, Laravel, Tailwind CSS, Portfolio">
    <meta name="author" content="Demas Eka Pradhisa">
    
    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demasekapradhisa.com/">
    <meta property="og:title" content="Demas Eka Pradhisa | UI/UX Designer, Web Developer & System Analyst">
    <meta property="og:description" content="Official portfolio of Demas Eka Pradhisa. Explore various web, UI/UX, and system analysis projects that I have developed.">
    <meta property="og:image" content="{{ asset('images/og-preview.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Demas Eka Pradhisa | UI/UX Designer, Web Developer & System Analyst">
    <meta property="twitter:description" content="Official portfolio of Demas Eka Pradhisa. Explore various web, UI/UX, and system analysis projects that I have developed.">
    <meta property="twitter:image" content="{{ asset('images/og-preview.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    
    <!-- Fonts (Preloaded) -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preload" href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" /></noscript>
    
    <link rel="preload" href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&display=swap" rel="stylesheet" /></noscript>

    <!-- AOS CSS (Non-blocking) -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"></noscript>
    
    <!-- Swiper CSS (Non-blocking) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /></noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-primary text-primary dark:text-gray-100 font-sans transition-colors duration-300 overflow-x-hidden"
    x-data="{ cursorX: -100, cursorY: -100, isHovering: false }"
    @mousemove="cursorX = $event.clientX; cursorY = $event.clientY"
    @mouseover="if($event.target.tagName.toLowerCase() === 'a' || $event.target.tagName.toLowerCase() === 'button' || $event.target.closest('a') || $event.target.closest('button')) isHovering = true"
    @mouseout="isHovering = false">
    
    <!-- Custom Cursor -->
    <div class="custom-cursor hidden md:block fixed pointer-events-none z-[100] border-2 border-accent rounded-full transition-transform duration-200 ease-out"
         :class="isHovering ? 'w-12 h-12 -ml-6 -mt-6 bg-accent/20' : 'w-6 h-6 -ml-3 -mt-3'"
         :style="`left: ${cursorX}px; top: ${cursorY}px;`"></div>

    <!-- Scroll Progress Bar -->
    <div class="fixed top-0 left-0 h-1 bg-accent z-[100] transition-all duration-150 ease-out"
         :style="`width: ${scrollPercent}%`"></div>

    <!-- Main Content Wrapper (for Parallax Reveal Footer) -->
    <div class="relative z-10 bg-secondary dark:bg-gray-900 rounded-b-[3rem] shadow-2xl transition-colors duration-300 mb-0 pb-10">
        <x-partials.header />

        <main class="min-h-screen">
            {{ $slot }}
        </main>
    </div>

    <!-- Sticky Footer Container -->
    <div class="sticky bottom-0 w-full z-0">
        <x-partials.footer />
    </div>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- AOS JS -->
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- CountUp JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.0/countUp.min.js"></script>
    <!-- Lenis JS -->
    <script defer src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>
    <!-- GSAP -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Vanilla Tilt -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lenis Smooth Scroll (Standard setup for Touchpad/Mouse compatibility)
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                smoothWheel: true,
                touchMultiplier: 2
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }

            requestAnimationFrame(raf);

            // Initialize AOS
            AOS.init({
                once: true,
                offset: 50,
                duration: 800,
                easing: 'ease-out-cubic',
            });

            // Spotlight Glow Effect
            const cards = document.querySelectorAll('.floating-card');
            cards.forEach(card => {
                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });

            // Magnetic Buttons
            const magneticBtns = document.querySelectorAll('.magnetic-btn');
            magneticBtns.forEach(btn => {
                btn.addEventListener('mousemove', e => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translate(0px, 0px)';
                });
            });

            // Interactive Particle Canvas
            const canvas = document.getElementById('particleCanvas');
            if (canvas) {
                const ctx = canvas.getContext('2d');
                let width, height;
                let particles = [];
                
                function resize() {
                    width = window.innerWidth;
                    height = window.innerHeight;
                    canvas.width = width;
                    canvas.height = height;
                }
                
                window.addEventListener('resize', resize);
                resize();
                
                const isDarkMode = () => document.documentElement.classList.contains('dark');
                
                class Particle {
                    constructor() {
                        this.x = Math.random() * width;
                        this.y = Math.random() * height;
                        this.vx = (Math.random() - 0.5) * 0.5;
                        this.vy = (Math.random() - 0.5) * 0.5;
                        this.radius = Math.random() * 1.5 + 0.5;
                    }
                    update() {
                        this.x += this.vx;
                        this.y += this.vy;
                        if (this.x < 0 || this.x > width) this.vx = -this.vx;
                        if (this.y < 0 || this.y > height) this.vy = -this.vy;
                        
                        // Mouse interaction
                        const dx = window.mouseX - this.x;
                        const dy = window.mouseY - this.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        if (distance < 150) {
                            this.x -= dx * 0.01;
                            this.y -= dy * 0.01;
                        }
                    }
                    draw() {
                        ctx.beginPath();
                        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                        ctx.fillStyle = isDarkMode() ? 'rgba(255, 255, 255, 0.4)' : 'rgba(15, 23, 42, 0.3)';
                        ctx.fill();
                    }
                }
                
                const particleCount = window.innerWidth >= 768 ? 80 : 20;
                for (let i = 0; i < particleCount; i++) particles.push(new Particle());
                
                window.mouseX = -1000;
                window.mouseY = -1000;
                window.addEventListener('mousemove', e => {
                    window.mouseX = e.clientX;
                    window.mouseY = e.clientY;
                });
                
                function animateParticles() {
                    ctx.clearRect(0, 0, width, height);
                    
                    for (let i = 0; i < particles.length; i++) {
                        particles[i].update();
                        particles[i].draw();
                        
                        for (let j = i + 1; j < particles.length; j++) {
                            const dx = particles[i].x - particles[j].x;
                            const dy = particles[i].y - particles[j].y;
                            const dist = Math.sqrt(dx * dx + dy * dy);
                            
                            if (dist < 120) {
                                ctx.beginPath();
                                const color = isDarkMode() ? `rgba(255, 255, 255, ${0.15 - dist/800})` : `rgba(15, 23, 42, ${0.1 - dist/1200})`;
                                ctx.strokeStyle = color;
                                ctx.lineWidth = 0.5;
                                ctx.moveTo(particles[i].x, particles[i].y);
                                ctx.lineTo(particles[j].x, particles[j].y);
                                ctx.stroke();
                            }
                        }
                    }
                    requestAnimationFrame(animateParticles);
                }
                animateParticles();
            }

            // Initialize GSAP ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Staggered Text Reveal
            const splitText = (selector) => {
                const element = document.querySelector(selector);
                if(element) {
                    const text = element.innerText;
                    element.innerHTML = text.split('').map(char => 
                        char === ' ' ? '&nbsp;' : `<span class="inline-block relative opacity-0 translate-y-8">${char}</span>`
                    ).join('');
                    return element.querySelectorAll('span');
                }
                return [];
            };

            const chars1 = splitText('.reveal-text-1');
            const chars2 = splitText('.reveal-text-2');
            
            if(chars1.length || chars2.length) {
                gsap.to([...chars1, ...chars2], {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.02,
                    ease: "back.out(1.7)",
                    delay: 0.5
                });
            }

            // Scroll-Driven Image Parallax (Desktop Only to save GPU)
            if (window.matchMedia("(min-width: 768px)").matches) {
                gsap.utils.toArray('.parallax-img').forEach(img => {
                    gsap.to(img, {
                        yPercent: 20,
                        ease: "none",
                        scrollTrigger: {
                            trigger: img.parentElement,
                            start: "top bottom",
                            end: "bottom top",
                            scrub: true
                        }
                    });
                });
            }
            
            // SVG Logo Drawing Animation
            const logoPaths = document.querySelectorAll('.logo-path path');
            if (logoPaths.length > 0) {
                logoPaths.forEach(path => {
                    const length = path.getTotalLength();
                    path.style.strokeDasharray = length;
                    path.style.strokeDashoffset = length;
                    
                    // Trigger animation after a slight delay
                    setTimeout(() => {
                        path.style.transition = 'stroke-dashoffset 2s ease-in-out, fill 1s ease 1.5s';
                        path.style.strokeDashoffset = '0';
                        path.style.fill = 'currentColor';
                    }, 500);
                });
            }

            // Initialize Vanilla Tilt explicitly (Desktop Only to prevent touch jank)
            if (window.matchMedia("(min-width: 768px)").matches) {
                VanillaTilt.init(document.querySelectorAll("[data-tilt]"));
            }
        });
    </script>
</body>
</html>
