<!DOCTYPE html>
<html lang="en" dir="ltr" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adnan Mahmoudi | Backend Developer</title>
    <meta name="description" content="Backend Developer focused on PHP & Laravel. Building clean, scalable backend systems, database architectures, and RESTful APIs.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #0b0c10;
            color: #e5e7eb;
        }
        ::selection {
            background-color: #3b82f6;
            color: #ffffff;
        }
    </style>
</head>
<body class="bg-brand-dark text-neutral-200 antialiased selection:bg-brand-blue selection:text-white">

    <!-- Top Ambient Light -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-64 bg-brand-blue/5 blur-[120px] pointer-events-none -z-10"></div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 backdrop-blur-md bg-brand-dark/80 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
            <a href="/" class="text-sm font-light tracking-luxury uppercase text-white hover:text-brand-blue transition-colors duration-200">
                Adnan Mahmoudi
            </a>
            <div class="flex items-center space-x-8 text-xs tracking-luxury uppercase text-neutral-400">
                <a href="#about" class="hover:text-white transition-colors duration-200">About</a>
                <a href="#projects" class="hover:text-white transition-colors duration-200">Projects</a>
                <a href="#skills" class="hover:text-white transition-colors duration-200">Capabilities</a>
                <a href="#contact" class="text-white hover:text-brand-blue transition-colors duration-200">Contact</a>
            </div>
        </div>
    </nav>

    <!-- ================= HERO SECTION ================= -->
    <header class="relative pt-24 pb-28 sm:pt-32 sm:pb-36 border-b border-white/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="max-w-4xl space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 border border-white/10 bg-white/[0.02] text-[11px] tracking-luxury uppercase text-neutral-400">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-blue animate-pulse"></span>
                    Backend Developer &bull; PHP &amp; Laravel
                </div>

                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-light tracking-tight text-white leading-[1.1]">
                    Writing clean, maintainable &amp; reliable backend architectures.
                </h1>

                <p class="text-lg sm:text-xl text-neutral-400 font-light max-w-2xl leading-relaxed">
                    Focused on scalable backend systems, high-integrity database design, REST APIs, authentication security, and real-world web applications.
                </p>

                <div class="pt-6 flex flex-wrap gap-4 items-center">
                    <a href="#projects" class="px-8 py-3.5 bg-white text-black text-xs font-medium tracking-luxury uppercase hover:bg-neutral-200 transition-colors duration-200">
                        View Projects
                    </a>
                    <a href="#contact" class="px-8 py-3.5 border border-white/20 text-white text-xs font-medium tracking-luxury uppercase hover:border-white transition-colors duration-200">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= ABOUT & ENGINEERING INTERESTS ================= -->
    <section id="about" class="py-24 border-b border-white/5 bg-brand-dark/40">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4">
                    <span class="text-xs tracking-luxury uppercase text-brand-blue font-semibold">Engineering Philosophy</span>
                    <h2 class="text-3xl font-light tracking-tight text-white mt-2">Building. Learning. Improving.</h2>
                    <p class="text-xs text-neutral-500 font-mono mt-4">adnan.mahmoudi.dev@gmail.com</p>
                </div>
                <div class="lg:col-span-8 space-y-6 text-neutral-300 font-light text-base leading-relaxed">
                    <p>
                        I build backend systems and web applications with PHP and Laravel, with an obsessive focus on writing clean, maintainable, and reliable code. For me, every project is an opportunity to improve how I design, build, test, and maintain software.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4">
                        <div class="p-6 border border-white/5 bg-brand-card/30">
                            <h3 class="text-xs uppercase tracking-luxury text-white font-semibold mb-2">Backend Architecture</h3>
                            <p class="text-xs text-neutral-400 leading-relaxed font-light">
                                Designing systems that remain understandable, extensible, and performant as business demands scale.
                            </p>
                        </div>
                        <div class="p-6 border border-white/5 bg-brand-card/30">
                            <h3 class="text-xs uppercase tracking-luxury text-white font-semibold mb-2">Database Integrity</h3>
                            <p class="text-xs text-neutral-400 leading-relaxed font-light">
                                Relational modeling, indexing strategies, optimized queries, and strict data consistency rules.
                            </p>
                        </div>
                        <div class="p-6 border border-white/5 bg-brand-card/30">
                            <h3 class="text-xs uppercase tracking-luxury text-white font-semibold mb-2">Security &amp; Auth</h3>
                            <p class="text-xs text-neutral-400 leading-relaxed font-light">
                                Mitigating web vulnerabilities, role-based authorization, sanitization, and defensive programming.
                            </p>
                        </div>
                        <div class="p-6 border border-white/5 bg-brand-card/30">
                            <h3 class="text-xs uppercase tracking-luxury text-white font-semibold mb-2">Modern APIs</h3>
                            <p class="text-xs text-neutral-400 leading-relaxed font-light">
                                Standardized REST endpoints, predictable response formats, rate limiting, and seamless client integration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FEATURED PROJECTS SECTION ================= -->
    <section id="projects" class="py-24 max-w-7xl mx-auto px-6 sm:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-white/5">
            <div>
                <span class="text-xs tracking-luxury uppercase text-brand-blue font-semibold">Featured Work</span>
                <h2 class="text-3xl sm:text-4xl font-light tracking-tight mt-2 text-white">System Implementations</h2>
            </div>
            <p class="text-neutral-400 text-sm max-w-md mt-4 md:mt-0 font-light leading-relaxed">
                Turning ideas into robust web applications, administrative dashboards, subscription models, and API-driven systems.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse ($featuredProjects as $project)
                <article class="group bg-brand-card border border-white/5 hover:border-white/20 transition-all duration-500 flex flex-col justify-between p-8 sm:p-10 relative overflow-hidden">
                    <div>
                        <div class="flex items-center justify-between text-xs tracking-luxury text-neutral-500 uppercase mb-4">
                            <span>{{ $project->subtitle ?? 'Web Application' }}</span>
                            <span class="font-mono text-[11px] text-brand-blue">0{{ $loop->iteration }}</span>
                        </div>

                        <h3 class="text-2xl font-light text-white group-hover:text-brand-blue transition-colors duration-300">
                            {{ $project->title }}
                        </h3>

                        <p class="mt-4 text-sm text-neutral-400 font-light leading-relaxed">
                            {{ $project->summary }}
                        </p>

                        @if (!empty($project->tech_stack))
                            <div class="mt-6 flex flex-wrap gap-2">
                                @foreach ($project->tech_stack as $tech)
                                    <span class="text-[11px] font-mono tracking-wider px-2.5 py-1 bg-white/[0.03] border border-white/5 text-neutral-300">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="mt-10 pt-6 border-t border-white/5 flex items-center justify-between text-xs tracking-luxury uppercase">
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer" class="text-white hover:text-brand-blue transition-colors duration-200 flex items-center gap-1">
                                View Live <span class="text-sm">&rarr;</span>
                            </a>
                        @else
                            <span class="text-neutral-600">Private Deploy</span>
                        @endif

                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="text-neutral-400 hover:text-white transition-colors duration-200">
                                Source Code
                            </a>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-full py-16 text-center border border-dashed border-white/10">
                    <p class="text-neutral-500 text-sm tracking-luxury uppercase">No projects configured in database.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- ================= TECHNICAL CAPABILITIES SECTION ================= -->
    <section id="skills" class="py-24 border-t border-white/5 bg-brand-dark/60">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-white/5">
                <div>
                    <span class="text-xs tracking-luxury uppercase text-brand-blue font-semibold">Capabilities &amp; Tech Stack</span>
                    <h2 class="text-3xl sm:text-4xl font-light tracking-tight mt-2 text-white">Technical Arsenal</h2>
                </div>
                <p class="text-neutral-400 text-sm max-w-md mt-4 md:mt-0 font-light leading-relaxed">
                    Continuously expanding knowledge across modern backend architectures, database optimization, and scalable systems.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($skillsGrouped as $category => $skills)
                    <div class="bg-brand-card/60 border border-white/5 p-6 rounded-none backdrop-blur-sm hover:border-white/20 transition-all duration-300">
                        <div class="flex items-center justify-between mb-6 pb-3 border-b border-white/5">
                            <h3 class="text-xs uppercase tracking-luxury text-neutral-300 font-semibold">{{ $category }}</h3>
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-blue"></span>
                        </div>

                        <div class="space-y-5">
                            @foreach ($skills as $skill)
                                <div>
                                    <div class="flex items-center justify-between text-sm mb-1.5">
                                        <span class="font-medium text-neutral-200">{{ $skill->name }}</span>
                                        <span class="text-xs text-neutral-500 font-mono">{{ $skill->proficiency }}%</span>
                                    </div>
                                    @if ($skill->highlight)
                                        <p class="text-[11px] text-neutral-400 font-light leading-relaxed mb-2">{{ $skill->highlight }}</p>
                                    @endif
                                    <div class="w-full bg-neutral-900 h-1 overflow-hidden">
                                        <div class="bg-gradient-to-r from-brand-blue to-white h-full transition-all duration-700" style="width: {{ $skill->proficiency }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= CONTACT SECTION (DIRECT INQUIRY) ================= -->
    <section id="contact" class="py-28 border-t border-white/5 bg-brand-dark/80 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="relative border border-white/10 bg-brand-card/30 backdrop-blur-sm p-10 sm:p-16 lg:p-20 overflow-hidden">
                <!-- Ambient Accent Glow -->
                <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-blue/10 rounded-full blur-[100px] pointer-events-none"></div>

                <div class="max-w-3xl space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 border border-white/10 bg-white/[0.02] text-[11px] tracking-luxury uppercase text-neutral-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Open for Opportunities
                    </div>

                    <h2 class="text-3xl sm:text-5xl lg:text-6xl font-light tracking-tight text-white leading-tight">
                        Let's build reliable, high-performance systems.
                    </h2>

                    <p class="text-neutral-400 text-sm sm:text-base font-light leading-relaxed max-w-2xl">
                        Whether you are planning a new Laravel backend, need to architect scalable APIs, or want to discuss database optimization and system integrity, my inbox is open.
                    </p>

                    <div class="pt-6 flex flex-wrap gap-4 items-center">
                        <a href="mailto:adnan.mahmoudi.dev@gmail.com?subject=Backend%20Engineering%20Inquiry" 
                           class="group inline-flex items-center gap-3 px-8 py-4 bg-white text-black hover:bg-neutral-200 text-xs font-semibold tracking-luxury uppercase transition-all duration-200">
                            <svg class="w-4 h-4 transition-transform group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <span>Initiate Contact via Email</span>
                        </a>

                        <a href="https://github.com/AdnanMahmoudiDev" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="inline-flex items-center gap-2 px-8 py-4 border border-white/20 text-white hover:border-white text-xs font-semibold tracking-luxury uppercase transition-all duration-200">
                            <span>Explore GitHub</span>
                            <span class="text-sm font-mono">&rarr;</span>
                        </a>
                    </div>

                    <div class="pt-4 text-xs font-mono text-neutral-500">
                        <span>Direct Communication: </span>
                        <a href="mailto:adnan.mahmoudi.dev@gmail.com" class="text-neutral-300 hover:text-white transition-colors duration-200">
                            adnan.mahmoudi.dev@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="border-t border-white/5 py-12 bg-brand-dark">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 flex flex-col sm:flex-row items-center justify-between text-xs text-neutral-500 font-light space-y-4 sm:space-y-0">
            <p>&copy; {{ date('Y') }} Adnan Mahmoudi. All rights reserved.</p>
            <div class="flex items-center space-x-6 tracking-luxury uppercase">
                <a href="https://github.com/AdnanMahmoudiDev" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors duration-200">GitHub</a>
                <a href="mailto:adnan.mahmoudi.dev@gmail.com" class="hover:text-white transition-colors duration-200">Email</a>
            </div>
        </div>
    </footer>

</body>
</html>
