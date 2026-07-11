<x-layouts.app>
    <div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-secondary dark:bg-gray-950">
        
        <!-- Ambient Glow Orbs -->
        <div class="absolute top-1/4 left-1/4 w-[40%] h-[40%] rounded-full bg-cyan-500/10 blur-[120px] animate-pulse -z-30 pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[40%] h-[40%] rounded-full bg-blue-500/10 blur-[120px] animate-pulse -z-30 pointer-events-none" style="animation-delay: 2s;"></div>
        
        <!-- Noise Texture Overlay -->
        <div class="absolute inset-0 pointer-events-none -z-10 opacity-[0.03] dark:opacity-[0.04]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>

        <div class="bg-gray-900/60 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-12 shadow-[0_10px_40px_rgba(0,0,0,0.5)] text-center max-w-2xl mx-4 z-10" data-aos="zoom-in">
            <div class="w-24 h-24 bg-green-500/10 rounded-full flex items-center justify-center mx-auto mb-8 border border-green-500/20">
                <svg class="w-12 h-12 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-4">Transmission Received.</h1>
            <p class="text-gray-400 text-lg mb-10 leading-relaxed">Terima kasih! Pesan Anda telah berhasil dikirim. Saya akan segera meninjaunya dan membalas Anda ke email yang Anda berikan.</p>
            
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 text-white font-bold group/btn relative overflow-hidden px-8 py-4 rounded-full border border-cyan-500/30 hover:border-cyan-400 hover:bg-cyan-500/10 transition-all">
                <svg class="w-5 h-5 transform group-hover/btn:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <span>Return to Portfolio</span>
            </a>
        </div>
    </div>
</x-layouts.app>
