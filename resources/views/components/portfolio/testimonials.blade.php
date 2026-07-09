<section id="certifications" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden">
    <div class="mb-12 text-center" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-primary dark:text-white mb-2 tracking-tight">Testimonials & Certifications</h2>
        <p class="text-gray-500 dark:text-gray-400">Apa kata mereka dan bukti validasi keahlian saya.</p>
    </div>

    <!-- Swiper Container -->
    <div class="swiper testimonials-slider pb-12" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            
            <!-- Slide 1: Testimonial -->
            <div class="swiper-slide">
                <div class="floating-card h-full p-8 border border-gray-100 dark:border-gray-800 flex flex-col justify-between">
                    <div>
                        <svg class="w-8 h-8 text-accent mb-4 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
                        <p class="text-gray-600 dark:text-gray-300 italic mb-6">"Demas merombak sistem pemesanan manual kami menjadi digital dengan sangat cepat. Sistem POS yang dibuat sangat stabil dan mudah digunakan oleh kasir kami."</p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-gray-100 dark:border-gray-700 pt-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-bold">DR</div>
                        <div>
                            <h4 class="font-bold text-primary dark:text-white text-sm">Owner Dapur Riuh</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Klien Freelance</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Testimonial -->
            <div class="swiper-slide">
                <div class="floating-card h-full p-8 border border-gray-100 dark:border-gray-800 flex flex-col justify-between">
                    <div>
                        <svg class="w-8 h-8 text-accent mb-4 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"></path></svg>
                        <p class="text-gray-600 dark:text-gray-300 italic mb-6">"Mahasiswa yang sangat proaktif dan memiliki pemahaman analitis yang tajam terhadap rekayasa perangkat lunak dan proses bisnis."</p>
                    </div>
                    <div class="flex items-center gap-4 border-t border-gray-100 dark:border-gray-700 pt-4">
                        <div class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold">TU</div>
                        <div>
                            <h4 class="font-bold text-primary dark:text-white text-sm">Dosen Pembimbing</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Telkom University</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Certification -->
            <div class="swiper-slide">
                <div class="floating-card h-full p-8 border border-gray-100 dark:border-gray-800 flex flex-col items-center text-center justify-center bg-gradient-to-br from-accent/5 to-transparent">
                    <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-sm flex items-center justify-center mb-4 border border-gray-100 dark:border-gray-700">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary dark:text-white mb-2">Certified Laravel Developer</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Validasi kemampuan membangun aplikasi level enterprise dengan Laravel.</p>
                    <a href="#" class="text-accent text-sm font-bold hover:underline">View Credential</a>
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination mt-8 relative"></div>
    </div>
</section>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    });
</script>

<style>
    .swiper-pagination-bullet {
        background: #0D9488 !important;
        opacity: 0.3;
    }
    .swiper-pagination-bullet-active {
        opacity: 1;
    }
</style>
