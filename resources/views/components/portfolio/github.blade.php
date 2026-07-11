<section id="github" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden text-white" 
    x-data="{ 
        profile: null, 
        repos: [], 
        loading: true,
        init() {
            fetch('https://api.github.com/users/demas26')
                .then(res => res.json())
                .then(data => { this.profile = data; });
            
            fetch('https://api.github.com/users/demas26/repos?sort=updated&per_page=3')
                .then(res => res.json())
                .then(data => { this.repos = data; this.loading = false; });
        }
    }">
    
    <!-- Header -->
    <div class="mb-12 flex flex-col md:flex-row justify-between items-start md:items-end gap-6" data-aos="fade-up">
        <div>
            <p class="text-cyan-400 text-sm font-bold tracking-widest uppercase mb-2">05 / DASBOR GITHUB</p>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-2 tracking-tight">Belajar di depan umum.</h2>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-500 tracking-tight">Pengiriman secara konsisten.</h2>
        </div>
        <a href="https://github.com/demas26" target="_blank" class="px-6 py-3 border border-gray-600 rounded-full text-sm font-semibold flex items-center gap-2 hover:bg-white hover:text-black transition-colors duration-300 shadow-[0_0_15px_rgba(255,255,255,0.05)]">
            BUKA GITHUB <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Profile Card -->
        <div class="bg-[#0b1121]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-8 flex flex-col justify-between hover:border-cyan-500/30 transition-colors" data-aos="fade-up" data-aos-delay="100">
            <div>
                <div class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-4">PROFIL GITHUB</div>
                <div class="flex items-start gap-4 mb-6">
                    <img :src="profile?.avatar_url || 'https://github.com/identicons/demas26.png'" class="w-16 h-16 rounded-xl bg-gray-800 shadow-[0_0_15px_rgba(34,211,238,0.2)]">
                    <div>
                        <h3 class="text-2xl font-bold" x-text="profile?.name || 'Demas Eka Pradhisa'"></h3>
                        <a href="https://github.com/demas26" target="_blank" class="text-cyan-400 text-sm font-semibold hover:underline">@demas26 ↗</a>
                    </div>
                </div>
                <p class="text-gray-400 text-sm mb-8" x-text="profile?.bio || 'Mahasiswa Sistem Informasi Telkom University dengan pengalaman UI/UX Design dan Web Development.'"></p>
            </div>
            
            <div class="flex items-center gap-8 md:gap-12 border-t border-gray-800/80 pt-6">
                <div>
                    <div class="text-3xl font-bold" x-text="profile?.public_repos || '0'"></div>
                    <div class="text-[10px] text-gray-500 font-bold uppercase tracking-widest mt-1">REPOSITORI</div>
                </div>
                <div>
                    <div class="text-3xl font-bold" x-text="profile?.followers || '0'"></div>
                    <div class="text-[10px] text-gray-500 font-bold uppercase tracking-widest mt-1">PENGIKUT</div>
                </div>
                <div>
                    <div class="text-3xl font-bold" x-text="profile?.following || '0'"></div>
                    <div class="text-[10px] text-gray-500 font-bold uppercase tracking-widest mt-1">MENGIKUTI</div>
                </div>
            </div>
        </div>

        <!-- Languages Card -->
        <div class="bg-[#0b1121]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-8 hover:border-cyan-500/30 transition-colors" data-aos="fade-up" data-aos-delay="200">
            <div class="flex justify-between items-center mb-8">
                <div class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">PALING SERING DIGUNAKAN</div>
                <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 rounded-full text-[10px] font-bold shadow-[0_0_10px_rgba(34,211,238,0.1)]">BAHASA</span>
            </div>
            <h3 class="text-xl font-bold mb-8">Bahasa</h3>
            
            <div class="space-y-5">
                <!-- Lang 1 -->
                <div>
                    <div class="flex justify-between text-xs font-bold mb-2">
                        <span>PHP</span>
                        <span class="text-gray-400">42%</span>
                    </div>
                    <div class="w-full h-1.5 bg-gray-900 rounded-full overflow-hidden shadow-inner">
                        <div class="h-full bg-[#4F5D95] rounded-full w-[42%] shadow-[0_0_10px_rgba(79,93,149,0.5)]"></div>
                    </div>
                </div>
                <!-- Lang 2 -->
                <div>
                    <div class="flex justify-between text-xs font-bold mb-2">
                        <span>Blade</span>
                        <span class="text-gray-400">28%</span>
                    </div>
                    <div class="w-full h-1.5 bg-gray-900 rounded-full overflow-hidden shadow-inner">
                        <div class="h-full bg-[#F7523F] rounded-full w-[28%] shadow-[0_0_10px_rgba(247,82,63,0.5)]"></div>
                    </div>
                </div>
                <!-- Lang 3 -->
                <div>
                    <div class="flex justify-between text-xs font-bold mb-2">
                        <span>HTML</span>
                        <span class="text-gray-400">18%</span>
                    </div>
                    <div class="w-full h-1.5 bg-gray-900 rounded-full overflow-hidden shadow-inner">
                        <div class="h-full bg-[#E34F26] rounded-full w-[18%] shadow-[0_0_10px_rgba(227,79,38,0.5)]"></div>
                    </div>
                </div>
                <!-- Lang 4 -->
                <div>
                    <div class="flex justify-between text-xs font-bold mb-2">
                        <span>CSS</span>
                        <span class="text-gray-400">8%</span>
                    </div>
                    <div class="w-full h-1.5 bg-gray-900 rounded-full overflow-hidden shadow-inner">
                        <div class="h-full bg-[#1572B6] rounded-full w-[8%] shadow-[0_0_10px_rgba(21,114,182,0.5)]"></div>
                    </div>
                </div>
                <!-- Lang 5 -->
                <div>
                    <div class="flex justify-between text-xs font-bold mb-2">
                        <span>JavaScript</span>
                        <span class="text-gray-400">4%</span>
                    </div>
                    <div class="w-full h-1.5 bg-gray-900 rounded-full overflow-hidden shadow-inner">
                        <div class="h-full bg-[#F7DF1E] rounded-full w-[4%] shadow-[0_0_10px_rgba(247,223,30,0.5)]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contributions Calendar -->
    <div class="bg-[#0b1121]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-8 mb-6 overflow-hidden relative hover:border-cyan-500/30 transition-colors" data-aos="fade-up" data-aos-delay="300">
        <div class="flex justify-between items-center mb-6">
            <div class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">AKTIVITAS</div>
            <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 rounded-full text-[10px] font-bold shadow-[0_0_10px_rgba(34,211,238,0.1)]">PROFIL PUBLIK</span>
        </div>
        <h3 class="text-xl font-bold mb-8">Kontribusi GitHub</h3>
        <div class="w-full overflow-x-auto pb-4 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-transparent">
            <!-- Using custom cyan color for the contribution graph: 22d3ee (tailwind cyan-400) -->
            <img src="https://ghchart.rshah.org/22d3ee/demas26" alt="GitHub Contributions" class="min-w-[800px] opacity-80 hover:opacity-100 transition-opacity drop-shadow-[0_0_15px_rgba(34,211,238,0.15)] filter saturate-150">
        </div>
        <p class="text-[10px] text-gray-500 mt-2 font-medium">Data kontribusi diambil secara langsung dari profil GitHub publik.</p>
    </div>

    <!-- Recent Repositories -->
    <div class="bg-[#0b1121]/80 backdrop-blur-xl border border-gray-800 rounded-3xl p-8 hover:border-cyan-500/30 transition-colors" data-aos="fade-up" data-aos-delay="400">
        <div class="flex justify-between items-center mb-8">
            <div>
                <div class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-1">BARU SAJA DIPERBARUI</div>
                <h3 class="text-xl font-bold">Repositori</h3>
            </div>
            <a href="https://github.com/demas26?tab=repositories" target="_blank" class="text-cyan-400 text-sm font-bold hover:underline flex items-center gap-1">Lihat semua ↗</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <template x-for="repo in repos" :key="repo.id">
                <a :href="repo.html_url" target="_blank" class="block bg-[#0f172a] border border-gray-800 hover:border-cyan-500/50 rounded-2xl p-6 transition-colors group shadow-lg hover:shadow-[0_0_20px_rgba(34,211,238,0.1)]">
                    <h4 class="text-sm font-bold mb-2 group-hover:text-cyan-400 transition-colors truncate" x-text="repo.name"></h4>
                    <p class="text-[10px] text-gray-400 mb-6 line-clamp-2 h-7 leading-relaxed" x-text="repo.description || 'Repositori publik oleh Demas Eka Pradhisa.'"></p>
                    <div class="flex justify-between items-center text-[10px] font-bold">
                        <span class="text-cyan-400" x-text="repo.language || 'Markdown'"></span>
                        <span class="flex items-center gap-1 text-gray-500">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span x-text="repo.stargazers_count"></span>
                        </span>
                    </div>
                </a>
            </template>

            <!-- Skeleton Loaders (Show while loading) -->
            <template x-if="loading">
                <div class="bg-[#0f172a] border border-gray-800 rounded-2xl p-6 animate-pulse">
                    <div class="h-4 bg-gray-800 rounded w-3/4 mb-4"></div>
                    <div class="h-2 bg-gray-800 rounded w-full mb-2"></div>
                    <div class="h-2 bg-gray-800 rounded w-1/2 mb-8"></div>
                    <div class="flex justify-between">
                        <div class="h-3 bg-gray-800 rounded w-12"></div>
                        <div class="h-3 bg-gray-800 rounded w-8"></div>
                    </div>
                </div>
            </template>
            <template x-if="loading">
                <div class="bg-[#0f172a] border border-gray-800 rounded-2xl p-6 animate-pulse hidden md:block">
                    <div class="h-4 bg-gray-800 rounded w-3/4 mb-4"></div>
                    <div class="h-2 bg-gray-800 rounded w-full mb-2"></div>
                    <div class="h-2 bg-gray-800 rounded w-1/2 mb-8"></div>
                    <div class="flex justify-between">
                        <div class="h-3 bg-gray-800 rounded w-12"></div>
                        <div class="h-3 bg-gray-800 rounded w-8"></div>
                    </div>
                </div>
            </template>
            <template x-if="loading">
                <div class="bg-[#0f172a] border border-gray-800 rounded-2xl p-6 animate-pulse hidden md:block">
                    <div class="h-4 bg-gray-800 rounded w-3/4 mb-4"></div>
                    <div class="h-2 bg-gray-800 rounded w-full mb-2"></div>
                    <div class="h-2 bg-gray-800 rounded w-1/2 mb-8"></div>
                    <div class="flex justify-between">
                        <div class="h-3 bg-gray-800 rounded w-12"></div>
                        <div class="h-3 bg-gray-800 rounded w-8"></div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
