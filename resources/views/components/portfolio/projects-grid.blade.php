<section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto relative z-10">
    <!-- Header & Filter -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-16 gap-8" data-aos="fade-up">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tight">Projects</h2>
            <p class="text-gray-400 text-lg">Sistem informasi manajemen digital untuk bisnis dan UMKM.</p>
        </div>
        
        <!-- Filter Pills -->
        <div class="flex flex-wrap gap-3">
            <button data-filter="all" class="filter-btn px-5 py-2 bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 rounded-full text-sm font-bold shadow-[0_0_15px_rgba(34,211,238,0.2)] transition-all">All</button>
            <button data-filter="web" class="filter-btn px-5 py-2 bg-gray-800/50 text-gray-400 hover:text-white border border-gray-700 hover:border-gray-500 rounded-full text-sm font-semibold transition-all">Web Systems</button>
            <button data-filter="uiux" class="filter-btn px-5 py-2 bg-gray-800/50 text-gray-400 hover:text-white border border-gray-700 hover:border-gray-500 rounded-full text-sm font-semibold transition-all">UI/UX Design</button>
            <button data-filter="sa" class="filter-btn px-5 py-2 bg-gray-800/50 text-gray-400 hover:text-white border border-gray-700 hover:border-gray-500 rounded-full text-sm font-semibold transition-all">System Analysis</button>
        </div>
    </div>

    <!-- Asymmetrical Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-min grid-flow-dense" id="portfolio-grid">
        
        <!-- Project 1: Dapur Riuh (Featured, Spans 2 Cols, 2 Rows) -->
        <div class="project-card lg:col-span-2 lg:row-span-2 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_40px_rgba(34,211,238,0.15)] transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="100" data-category="web">
            <!-- Background Glow -->
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-cyan-500/10 rounded-full blur-3xl group-hover:bg-cyan-500/20 transition-colors duration-700 pointer-events-none"></div>
            
            <div class="h-[400px] bg-gray-800/50 relative overflow-hidden flex items-end justify-center p-8 pb-0">
                <img src="{{ asset('images/Project Dapur Riuh.png') }}" alt="Dapur Riuh" class="w-[90%] h-auto object-cover rounded-t-xl shadow-[0_-10px_40px_rgba(0,0,0,0.5)] group-hover:translate-y-[-10px] transition-transform duration-700" onerror="this.src='data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22400%22 viewBox=%220 0 800 400%22%3E%3Crect width=%22800%22 height=%22400%22 fill=%22%23e2e8f0%22/%3E%3Ctext x=%22400%22 y=%22200%22 font-family=%22sans-serif%22 font-size=%2224%22 text-anchor=%22middle%22 fill=%22%2394a3b8%22%3EProject Image Placeholder%3C/text%3E%3C/svg%3E'">
                
                <!-- Hover Overlay for Links -->
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4 z-20">
                    <a href="#" class="px-6 py-3 bg-white text-black rounded-full text-sm font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> Live Demo
                    </a>
                    <a href="https://github.com/demas26/UMKM-Dapur-Riuh" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-transparent border border-gray-500 text-white rounded-full text-sm font-bold flex items-center gap-2 hover:bg-gray-800 transition-colors">
                        Source Code
                    </a>
                </div>
            </div>
            <div class="p-8 flex-grow flex flex-col justify-end z-10 bg-gradient-to-t from-gray-900 via-gray-900/90 to-transparent">
                <div class="text-xs font-bold text-cyan-400 mb-3 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">WEB APP / SYSTEM</div>
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">Dapur Riuh — Integrated POS & Production System</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-2xl">Platform Point of Sale (POS) dan manajemen inventaris komprehensif yang diarsiteki khusus untuk UMKM kuliner. Mendukung automasi pelaporan penjualan, pelacakan bahan baku real-time, dan efisiensi operasional harian.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Livewire</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">MySQL</span>
                </div>
            </div>
        </div>

        <!-- Project 2: Indomaret Mobile (Span 1) -->
        <div class="project-card lg:col-span-1 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="200" data-category="uiux">
            <div class="h-48 bg-gray-800/50 relative overflow-hidden flex items-end justify-center p-6 pb-0">
                <img src="{{ asset('images/UiUX Indomaret Mobile.png') }}" alt="Indomaret Mobile" class="w-full h-auto object-cover rounded-t-xl shadow-[0_-5px_20px_rgba(0,0,0,0.4)] group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-20">
                    <a href="https://www.figma.com/design/q9mefp7qytNVhrfOFlsCI4/indomaret-mobile?node-id=0-1&t=TjXDIhDWzGYgfO4j-1" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#F24E1E] text-white rounded-full text-xs font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        Open in Figma
                    </a>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col z-10 bg-gradient-to-t from-gray-900 to-transparent">
                <div class="text-[10px] font-bold text-cyan-400 mb-2 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">UI/UX DESIGN / MOBILE</div>
                <h3 class="text-xl font-bold text-white mb-3">Indomaret Mobile App Redesign</h3>
                <p class="text-sm text-gray-400 mb-6 flex-grow">Eksplorasi perancangan ulang antarmuka aplikasi Indomaret Mobile agar lebih interaktif.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Figma</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Mobile UI</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">E-Commerce</span>
                </div>
            </div>
        </div>

        <!-- Project 3: Saku Mahasiswa UI/UX (Span 1) -->
        <div class="project-card lg:col-span-1 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="300" data-category="uiux">
            <div class="h-48 bg-gray-800/50 relative overflow-hidden flex items-end justify-center p-6 pb-0">
                <img src="{{ asset('images/UIUX Website Saku Mahasiswa.png') }}" alt="Saku Mahasiswa" class="w-full h-auto object-cover rounded-t-xl shadow-[0_-5px_20px_rgba(0,0,0,0.4)] group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-20">
                    <a href="https://www.figma.com/design/0v7GpdTWQ2bibLwsUqE8L3/Website-Saku-Makasiswa?node-id=0-1&t=d7zhiHysxsZRYy7L-1" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#F24E1E] text-white rounded-full text-xs font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        Open in Figma
                    </a>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col z-10 bg-gradient-to-t from-gray-900 to-transparent">
                <div class="text-[10px] font-bold text-cyan-400 mb-2 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">UI/UX DESIGN / PROTOTYPE</div>
                <h3 class="text-xl font-bold text-white mb-3">Saku Mahasiswa UI/UX</h3>
                <p class="text-sm text-gray-400 mb-6 flex-grow">Desain antarmuka dan prototipe aplikasi manajemen keuangan khusus mahasiswa.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Figma</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Wireframing</span>
                </div>
            </div>
        </div>

        <!-- Project 4: Figjam Saku Mahasiswa (Span 2) -->
        <div class="project-card lg:col-span-2 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="400" data-category="uiux">
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-6">
                <img src="{{ asset('images/Figjam Saku Mahasiswa.png') }}" alt="Figjam Saku Mahasiswa" class="w-full h-full object-contain rounded-xl shadow-lg group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-20">
                    <a href="https://www.figma.com/board/l2nxfNkCjBTQGAI6YPKAwu/Figjam-Saku-Mahasiswa?node-id=0-1&t=R3q196VkcEszNLsU-1" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#F24E1E] text-white rounded-full text-xs font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        Open in FigJam
                    </a>
                </div>
            </div>
            <div class="p-8 md:w-1/2 flex flex-col justify-center">
                <div class="text-[10px] font-bold text-cyan-400 mb-2 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">SYSTEM FLOW / PLANNING</div>
                <h3 class="text-xl font-bold text-white mb-3">Saku Mahasiswa System Flow</h3>
                <p class="text-sm text-gray-400 mb-6">Dokumentasi alur sistem, perjalanan pengguna (user journey), dan pemetaan arsitektur informasi.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">FigJam</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">User Flow</span>
                </div>
            </div>
        </div>

        <!-- Project 5: PT Indofood (Span 1) -->
        <div class="project-card lg:col-span-1 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all duration-500 flex flex-col relative" data-aos="fade-up" data-aos-delay="500" data-category="uiux">
            <div class="h-48 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-6">
                <img src="{{ asset('images/Desain Antarmuka (UI) Sistem Informasi Manajemen Kepegawaian PT Indofood Menggunakan Figma.png') }}" alt="PT Indofood" class="w-full h-full object-contain rounded-xl shadow-lg group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-20">
                    <a href="https://www.figma.com/design/3QeFPJqA0RmaT8enkFX6UJ/Pt.-indofood?node-id=0-1&t=6JQ6I3hXxNj5yDNl-1" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#F24E1E] text-white rounded-full text-xs font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        Open in Figma
                    </a>
                </div>
            </div>
            <div class="p-6 flex-grow flex flex-col">
                <div class="text-[10px] font-bold text-cyan-400 mb-2 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">UI/UX DESIGN / SYSTEM</div>
                <h3 class="text-lg font-bold text-white mb-3">HRIS PT Indofood</h3>
                <p class="text-sm text-gray-400 mb-6 flex-grow">Prototype antarmuka Sistem Informasi Manajemen Kepegawaian mencakup seluruh proses bisnis utama.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Figma</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Dashboard UI</span>
                </div>
            </div>
        </div>

        <!-- Project 6: QateringGo (Span 3) -->
        <div class="project-card lg:col-span-3 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_40px_rgba(34,211,238,0.15)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="600" data-category="uiux">
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="text-xs font-bold text-cyan-400 mb-3 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">UI/UX DESIGN / APP</div>
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">Aplikasi Pemesanan QateringGo</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">Prototype QateringGo merupakan rancangan antarmuka aplikasi pemesanan catering berbasis mobile. Seluruh tampilan dirancang dengan memperhatikan prinsip User Interface (UI) dan User Experience (UX).</p>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Figma</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Food Delivery UI</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Prototyping</span>
                </div>
                <div class="flex flex-wrap gap-4 mt-2">
                    <a href="https://www.figma.com/design/JcJS7Unf8GujpPvVDLPEt4/QateringGo?node-id=0-1&t=Jo38w0YBiomUG441-1" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-[#F24E1E] text-white rounded-full text-sm font-bold flex items-center gap-2 hover:scale-105 transition-transform shadow-[0_0_15px_rgba(242,78,30,0.4)]">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 2c-3.3 0-6 2.7-6 6s2.7 6 6 6v4c0 3.3 2.7 6 6 6s6-2.7 6-6v-4h-4v4c0 1.1-.9 2-2 2s-2-.9-2-2v-4h4v-8h-4V4c0-1.1-.9-2-2-2S8 1.1 8 2z"/></svg> Open Project in Figma
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-8">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-cyan-500/5 blur-3xl"></div>
                <img src="{{ asset('images/Perancangan Prototype User Interface (UI) Aplikasi Pemesanan Catering QateringGo Menggunakan Figma.png') }}" alt="QateringGo" class="w-[85%] h-auto object-cover rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10">
            </div>
        </div>
        <!-- Project 7: QateringGo System Analyst (Span 3) -->
        <div class="project-card lg:col-span-3 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_40px_rgba(34,211,238,0.15)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="700" data-category="sa">
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="text-xs font-bold text-cyan-400 mb-3 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">SYSTEM ANALYSIS & DOCUMENTATION</div>
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">QateringGo — Kertas Kerja Analisis Sistem</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">Dokumen komprehensif Analisis Sistem untuk platform QateringGo. Mencakup justifikasi metodologi Agile Scrum, teknik elisitasi kebutuhan, pemetaan masalah stakeholder, serta definisi spesifikasi kebutuhan fungsional perangkat lunak secara mendalam.</p>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Agile Scrum</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Elicitation Technique</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">User Requirements</span>
                </div>
                <div class="flex flex-wrap gap-4 mt-2">
                    <a href="{{ asset('assets/docs/qateringgo-kertas-kerja-1.pdf') }}" target="_blank" class="px-6 py-3 bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-cyan-500/20 hover:scale-105 transition-all shadow-[0_0_15px_rgba(34,211,238,0.15)]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Kertas Kerja 1
                    </a>
                    <a href="{{ asset('assets/docs/qateringgo-kertas-kerja-2.pdf') }}" target="_blank" class="px-6 py-3 bg-indigo-500/10 text-indigo-400 border border-indigo-500/30 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-indigo-500/20 hover:scale-105 transition-all shadow-[0_0_15px_rgba(99,102,241,0.15)]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Kertas Kerja 2
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-8">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-cyan-500/5 blur-3xl"></div>
                <!-- Custom PDF Icon Design (Requested by User) -->
                <div class="w-[60%] max-w-[280px] aspect-[3/4] bg-white border-[10px] border-black rounded-lg flex flex-col relative shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10 overflow-hidden my-4">
                    <!-- Folded Corner -->
                    <div class="absolute top-[-10px] right-[-10px] w-20 h-20 bg-gray-800 z-0"></div> <!-- dark bg behind fold -->
                    <div class="absolute top-0 right-0 w-16 h-16 bg-white border-b-[10px] border-l-[10px] border-black z-20"></div>
                    
                    <!-- Top spacing -->
                    <div class="h-16 w-full bg-white"></div>
                    
                    <!-- Red Banner -->
                    <div class="w-[90%] bg-[#E00000] py-3 lg:py-5 self-center flex items-center justify-center z-10">
                        <span class="text-white font-black text-5xl lg:text-6xl tracking-wider font-sans">PDF</span>
                    </div>

                    <!-- Lines -->
                    <div class="flex flex-col gap-3 lg:gap-5 mt-6 lg:mt-10 px-6 lg:px-8">
                        <div class="h-3 lg:h-4 bg-black rounded-full w-full"></div>
                        <div class="h-3 lg:h-4 bg-black rounded-full w-full"></div>
                        <div class="h-3 lg:h-4 bg-black rounded-full w-[85%]"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Filter Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active button styles
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-cyan-500/20', 'text-cyan-400', 'border-cyan-500/30', 'shadow-[0_0_15px_rgba(34,211,238,0.2)]', 'font-bold');
                        b.classList.add('bg-gray-800/50', 'text-gray-400', 'border-gray-700', 'font-semibold');
                    });
                    
                    this.classList.remove('bg-gray-800/50', 'text-gray-400', 'border-gray-700', 'font-semibold');
                    this.classList.add('bg-cyan-500/20', 'text-cyan-400', 'border-cyan-500/30', 'shadow-[0_0_15px_rgba(34,211,238,0.2)]', 'font-bold');

                    const filterValue = this.getAttribute('data-filter');

                    // Filter cards
                    projectCards.forEach(card => {
                        const categories = card.getAttribute('data-category').split(' ');
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            card.style.display = '';
                            // add simple fade-in animation
                            card.animate([
                                { opacity: 0, transform: 'scale(0.95)' },
                                { opacity: 1, transform: 'scale(1)' }
                            ], {
                                duration: 400,
                                easing: 'ease-out'
                            });
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</section>
