<section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-t border-gray-100 dark:border-gray-800/50 mt-20 relative z-10">
    <div class="mb-16 text-center" data-aos="fade-up">
        <p class="text-cyan-400 text-sm font-bold tracking-widest uppercase mb-4">05 / GET IN TOUCH</p>
        <h2 class="text-5xl md:text-7xl font-black text-white tracking-tight leading-tight mb-2">
            Let's build the
        </h2>
        <h2 class="text-5xl md:text-7xl font-black text-gray-500 tracking-tight leading-tight">
            future together.
        </h2>
    </div>

    <!-- Asymmetrical Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Large Left Card: Borderless Minimalist Form -->
        <div class="md:col-span-2 bg-gray-900/60 backdrop-blur-xl border-t border-t-cyan-500/30 rounded-3xl p-10 shadow-[0_10px_40px_rgba(0,0,0,0.5)] group hover:-translate-y-1 hover:border-cyan-500/50 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-2xl font-bold text-white mb-8">Send a message</h3>
            <form action="https://formsubmit.co/demas.pradhisa@gmail.com" method="POST" class="space-y-8" 
                  x-data="{ isSubmitting: false }" 
                  @submit="isSubmitting = true">
                
                <!-- FormSubmit Configuration -->
                <input type="hidden" name="_subject" value="New Message from Portfolio!">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_next" value="{{ url('/thanks') }}">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="relative">
                        <input type="text" name="name" required class="w-full bg-transparent border-0 border-b border-gray-700 text-white focus:ring-0 focus:border-cyan-400 peer px-0 py-2 transition-colors placeholder-transparent" placeholder="Name">
                        <label class="absolute left-0 -top-3.5 text-gray-500 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-cyan-400 transition-all pointer-events-none">Your Name</label>
                    </div>
                    <div class="relative">
                        <input type="email" name="email" required class="w-full bg-transparent border-0 border-b border-gray-700 text-white focus:ring-0 focus:border-cyan-400 peer px-0 py-2 transition-colors placeholder-transparent" placeholder="Email">
                        <label class="absolute left-0 -top-3.5 text-gray-500 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-cyan-400 transition-all pointer-events-none">Email Address</label>
                    </div>
                </div>
                <div class="relative">
                    <textarea name="message" required rows="3" class="w-full bg-transparent border-0 border-b border-gray-700 text-white focus:ring-0 focus:border-cyan-400 peer px-0 py-2 transition-colors placeholder-transparent resize-none" placeholder="Message"></textarea>
                    <label class="absolute left-0 -top-3.5 text-gray-500 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-cyan-400 transition-all pointer-events-none">Tell me about your project or idea...</label>
                </div>
                
                <button type="submit" :class="isSubmitting ? 'opacity-70 cursor-not-allowed' : 'hover:border-cyan-400 hover:bg-cyan-500/10 group-hover/btn'" class="mt-8 flex items-center gap-3 text-white font-bold relative overflow-hidden px-6 py-3 rounded-full border border-cyan-500/30 transition-all">
                    <span x-text="isSubmitting ? 'Transmitting...' : 'Initiate Connection'">Initiate Connection</span>
                    <svg x-show="!isSubmitting" class="w-5 h-5 transform group-hover/btn:translate-x-1 group-hover/btn:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    <svg x-show="isSubmitting" style="display: none;" class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                </button>
            </form>
        </div>

        <!-- Right Column (Stacked Cards) -->
        <div class="flex flex-col gap-6">
            
            <!-- Top Right Card: Status & Direct Copy -->
            <div class="bg-gray-900/60 backdrop-blur-xl border-t border-t-cyan-500/30 rounded-3xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.5)] group hover:-translate-y-1 hover:border-cyan-500/50 transition-all duration-500 flex flex-col justify-center" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-3 mb-6">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-white font-bold text-sm">Available for Work</span>
                </div>
                
                <h4 class="text-gray-400 text-xs uppercase tracking-widest font-bold mb-2">Direct Email</h4>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=demas.pradhisa@gmail.com" target="_blank"
                   class="flex items-center justify-between bg-gray-800/50 border border-gray-700/50 p-4 rounded-xl hover:bg-gray-800 hover:border-cyan-500/50 transition-all cursor-pointer group/mail">
                    <span class="text-white font-bold text-sm truncate group-hover/mail:text-cyan-400 transition-colors">demas.pradhisa@gmail.com</span>
                    <svg class="w-5 h-5 text-cyan-400 transform group-hover/mail:translate-x-1 group-hover/mail:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                </a>
            </div>

            <!-- Bottom Right Card: Social Grid -->
            <div class="bg-gray-900/60 backdrop-blur-xl border-t border-t-cyan-500/30 rounded-3xl p-8 shadow-[0_10px_40px_rgba(0,0,0,0.5)] group hover:-translate-y-1 hover:border-cyan-500/50 transition-all duration-500 h-full flex flex-col justify-center" data-aos="fade-up" data-aos-delay="300">
                <h4 class="text-gray-400 text-xs uppercase tracking-widest font-bold mb-4">Socials & Links</h4>
                <div class="grid grid-cols-2 gap-4">
                    <!-- GitHub -->
                    <a href="https://github.com/demas26" target="_blank" class="flex flex-col items-center justify-center p-4 bg-gray-800/30 border border-gray-700/30 rounded-2xl hover:bg-gray-800 hover:border-cyan-500/30 transition-all group/icon">
                        <svg class="w-6 h-6 text-gray-400 group-hover/icon:text-white transition-colors mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        <span class="text-[10px] font-bold text-gray-500 group-hover/icon:text-cyan-400 transition-colors uppercase tracking-wider">GitHub</span>
                    </a>
                    
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/demas-eka-pradhisa-b98836296" target="_blank" class="flex flex-col items-center justify-center p-4 bg-gray-800/30 border border-gray-700/30 rounded-2xl hover:bg-gray-800 hover:border-cyan-500/30 transition-all group/icon">
                        <svg class="w-6 h-6 text-gray-400 group-hover/icon:text-white transition-colors mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <span class="text-[10px] font-bold text-gray-500 group-hover/icon:text-cyan-400 transition-colors uppercase tracking-wider">LinkedIn</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/qr/AKFYUTNBPGCJF1" target="_blank" class="col-span-2 flex flex-col items-center justify-center p-4 bg-gray-800/30 border border-gray-700/30 rounded-2xl hover:bg-gray-800 hover:border-cyan-500/30 transition-all group/icon">
                        <svg class="w-6 h-6 text-gray-400 group-hover/icon:text-white transition-colors mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0c-6.627 0-12 5.373-12 12 0 2.115.549 4.108 1.517 5.86l-1.517 6.14 6.275-1.646c1.713.882 3.659 1.385 5.725 1.385 6.627 0 12-5.373 12-12s-5.373-12-12-12zm6.27 17.151c-.244.686-1.42 1.309-1.982 1.365-.503.05-1.16-.145-3.307-1.034-2.738-1.135-4.512-3.921-4.654-4.11-.141-.189-1.111-1.479-1.111-2.822 0-1.343.693-2.004.939-2.265.246-.261.536-.327.712-.327.177 0 .353.003.509.011.168.008.393-.064.614.471.277.67.893 2.179.972 2.338.081.16.13.346.035.534-.094.188-.143.303-.285.47-.143.167-.305.371-.433.488-.14.129-.286.273-.122.557.163.284.726 1.205 1.558 1.947 1.074.957 1.979 1.258 2.27 1.411.292.152.463.126.634-.073.172-.199.739-.861.936-1.157.197-.296.395-.246.66-.147.266.099 1.68.792 1.968.935.289.144.481.215.55.334.07.121.07.697-.174 1.383z"/></svg>
                        <span class="text-[10px] font-bold text-gray-500 group-hover/icon:text-cyan-400 transition-colors uppercase tracking-wider">WhatsApp Direct</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
