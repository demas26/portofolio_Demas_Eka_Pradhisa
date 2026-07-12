<section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto relative z-10">
    <!-- Header & Filter -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-16 gap-8" data-aos="fade-up">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tight">Projects</h2>
            <p class="text-gray-400 text-lg">Digital management information systems for businesses and MSMEs.</p>
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
        <div class="project-card lg:col-span-3 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_40px_rgba(34,211,238,0.15)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="100" data-category="web">
            
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="text-xs font-bold text-cyan-400 mb-3 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">WEB APP / SYSTEM</div>
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">Dapur Riuh — Integrated POS & Production System</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">A comprehensive Point of Sale (POS) platform and inventory management specially architected for culinary MSMEs. Supports sales reporting automation, real-time raw material tracking, and daily operational efficiency.</p>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Livewire</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">MySQL</span>
                </div>
                <div class="flex flex-wrap gap-4 mt-2">
                    <a href="#" class="px-6 py-3 bg-white text-black rounded-full text-sm font-bold flex items-center gap-2 hover:scale-105 transition-transform shadow-[0_0_15px_rgba(255,255,255,0.2)]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> Live Demo
                    </a>
                    <a href="https://github.com/demas26/UMKM-Dapur-Riuh" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-transparent border border-gray-500 text-white rounded-full text-sm font-bold flex items-center gap-2 hover:bg-gray-800 transition-colors">
                        Source Code
                    </a>
                </div>
            </div>
            
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-8">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-cyan-500/5 blur-3xl pointer-events-none"></div>
                <img src="{{ asset('images/Project Dapur Riuh.png') }}" alt="Dapur Riuh" class="w-[90%] h-auto object-cover rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10" onerror="this.src='data:image/svg+xml;charset=UTF-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22800%22 height=%22400%22 viewBox=%220 0 800 400%22%3E%3Crect width=%22800%22 height=%22400%22 fill=%22%23e2e8f0%22/%3E%3Ctext x=%22400%22 y=%22200%22 font-family=%22sans-serif%22 font-size=%2224%22 text-anchor=%22middle%22 fill=%22%2394a3b8%22%3EProject Image Placeholder%3C/text%3E%3C/svg%3E'">
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
                <p class="text-sm text-gray-400 mb-6 flex-grow">Exploration of redesigning the Indomaret Mobile app interface to make it more interactive.</p>
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
                <p class="text-sm text-gray-400 mb-6 flex-grow">Interface design and prototype of a financial management app specially for students.</p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Figma</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">Wireframing</span>
                </div>
            </div>
        </div>

        <!-- Project 4: Figjam Saku Mahasiswa (Span 3) -->
        <div class="project-card lg:col-span-3 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="400" data-category="uiux">
            <div class="p-8 md:w-1/2 flex flex-col justify-center">
                <div class="text-[10px] font-bold text-cyan-400 mb-2 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">SYSTEM FLOW / PLANNING</div>
                <h3 class="text-xl font-bold text-white mb-3">Saku Mahasiswa System Flow</h3>
                <p class="text-sm text-gray-400 mb-6">Documentation of system flow, user journey, and information architecture mapping.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">FigJam</span>
                    <span class="px-2.5 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-[10px] font-semibold">User Flow</span>
                </div>
            </div>
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-6">
                <img src="{{ asset('images/Figjam Saku Mahasiswa.png') }}" alt="Figjam Saku Mahasiswa" class="w-full h-full object-contain rounded-xl shadow-lg group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gray-900/80 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-20">
                    <a href="https://www.figma.com/board/l2nxfNkCjBTQGAI6YPKAwu/Figjam-Saku-Mahasiswa?node-id=0-1&t=R3q196VkcEszNLsU-1" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 bg-[#F24E1E] text-white rounded-full text-xs font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        Open in FigJam
                    </a>
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
                <p class="text-sm text-gray-400 mb-6 flex-grow">Interface prototype for Human Resource Management Information System covering all main business processes.</p>
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
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">QateringGo Ordering App</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">QateringGo prototype is a mobile-based catering ordering app interface design. The entire display is designed by paying attention to User Interface (UI) and User Experience (UX) principles.</p>
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
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">QateringGo — System Analysis Working Paper</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">Comprehensive System Analysis document for the QateringGo platform. Covers Agile Scrum methodology justification, requirement elicitation techniques, stakeholder problem mapping, and in-depth software functional requirement definitions.</p>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Agile Scrum</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Elicitation Technique</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">User Requirements</span>
                </div>
                <div class="flex flex-wrap gap-4 mt-2">
                    <a href="{{ asset('assets/docs/qateringgo-kertas-kerja-1.pdf') }}" target="_blank" class="px-6 py-3 bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-cyan-500/20 hover:scale-105 transition-all shadow-[0_0_15px_rgba(34,211,238,0.15)]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Working Paper 1
                    </a>
                    <a href="{{ asset('assets/docs/qateringgo-kertas-kerja-2.pdf') }}" target="_blank" class="px-6 py-3 bg-indigo-500/10 text-indigo-400 border border-indigo-500/30 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-indigo-500/20 hover:scale-105 transition-all shadow-[0_0_15px_rgba(99,102,241,0.15)]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Working Paper 2
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-8">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-cyan-500/5 blur-3xl"></div>
                <!-- Custom PDF Icon Design (Responsive) -->
                <div class="w-[80%] md:w-[60%] max-w-[280px] aspect-[3/4] bg-white border-4 md:border-[10px] border-black rounded-lg flex flex-col relative shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10 overflow-hidden my-4 mx-auto">
                    <!-- Folded Corner -->
                    <div class="absolute top-[-5px] right-[-5px] md:top-[-10px] md:right-[-10px] w-12 h-12 md:w-20 md:h-20 bg-gray-800 z-0"></div> <!-- dark bg behind fold -->
                    <div class="absolute top-0 right-0 w-10 h-10 md:w-16 md:h-16 bg-white border-b-4 md:border-b-[10px] border-l-4 md:border-l-[10px] border-black z-20"></div>
                    
                    <!-- Top spacing -->
                    <div class="h-10 md:h-16 w-full bg-white"></div>
                    
                    <!-- Red Banner -->
                    <div class="w-[90%] bg-[#E00000] py-2 md:py-3 lg:py-5 self-center flex items-center justify-center z-10 border-black border-y-2 md:border-y-0">
                        <span class="text-white font-black text-3xl md:text-5xl lg:text-6xl tracking-wider font-sans leading-none">PDF</span>
                    </div>

                    <!-- Lines -->
                    <div class="flex flex-col gap-2 md:gap-3 lg:gap-5 mt-4 md:mt-6 lg:mt-10 px-4 md:px-6 lg:px-8">
                        <div class="h-2 md:h-3 lg:h-4 bg-black rounded-full w-full"></div>
                        <div class="h-2 md:h-3 lg:h-4 bg-black rounded-full w-full"></div>
                        <div class="h-2 md:h-3 lg:h-4 bg-black rounded-full w-[85%]"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project 8: Toko Amira (Span 3) -->
        <div class="project-card lg:col-span-3 bg-gray-900/40 backdrop-blur-xl border border-gray-700/30 rounded-3xl overflow-hidden group hover:shadow-[0_0_40px_rgba(34,211,238,0.15)] transition-all duration-500 flex flex-col md:flex-row relative" data-aos="fade-up" data-aos-delay="800" data-category="web">
            <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <div class="text-xs font-bold text-cyan-400 mb-3 tracking-widest drop-shadow-[0_0_5px_rgba(34,211,238,0.5)]">WEB DEVELOPMENT</div>
                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">Toko Amira Information System</h3>
                <p class="text-gray-400 mb-8 leading-relaxed max-w-xl">E-commerce platform and management information system for Toko Amira. Built using web architecture to ensure fast performance and optimal user experience.</p>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Web System</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">E-Commerce</span>
                    <span class="px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700 rounded-full text-xs font-semibold">Source Code</span>
                </div>
                <a href="https://github.com/demas26/toko-amira" target="_blank" rel="noopener noreferrer" class="self-start px-6 py-3 bg-gray-800 text-white border border-gray-600 rounded-full text-sm font-bold flex items-center gap-2 hover:bg-gray-700 hover:scale-105 transition-all shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.03-2.682-.103-.253-.447-1.27.098-2.646 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.376.202 2.394.1 2.646.64.699 1.026 1.591 1.026 2.682 0 3.841-2.337 4.687-4.565 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.416 22 12c0-5.523-4.477-10-10-10z"></path></svg> View Repository on GitHub
                </a>
            </div>
            <div class="md:w-1/2 bg-gray-800/50 relative overflow-hidden flex items-center justify-center p-8">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-blue-500/5 blur-3xl"></div>
                <!-- Project Image -->
                <img src="{{ asset('images/toko-amira.png') }}" alt="Toko Amira Web" class="w-[85%] h-auto object-cover rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                
                <!-- Fallback Placeholder if Image Not Found -->
                <div style="display: none" class="w-[85%] h-64 bg-gray-700/50 rounded-xl border border-gray-600/50 flex flex-col items-center justify-center text-gray-400 shadow-[0_10px_40px_rgba(0,0,0,0.6)] group-hover:scale-105 transition-transform duration-700 z-10">
                    <svg class="w-16 h-16 mb-4 text-gray-500/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="font-semibold tracking-wider text-sm text-center px-4">Prepare a screenshot of your website and name it:<br><span class="text-cyan-400 text-xs mt-2 block font-mono">toko-amira.png</span><br>Then place it in the public/images/ folder</span>
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
