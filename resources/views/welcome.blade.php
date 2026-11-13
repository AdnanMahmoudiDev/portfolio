<!DOCTYPE html>
<html lang="en" dir="ltr" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adnan Mahmoudi | Full-stack Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-brand-dark text-zinc-100 antialiased selection:bg-brand-blue selection:text-white">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 border-b border-zinc-900 bg-brand-dark/80 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-sm font-bold tracking-luxury text-white uppercase">
                ADNAN<span class="text-brand-blue">.</span>
            </a>

            <nav class="hidden md:flex items-center space-x-10 text-xs tracking-widest text-zinc-400 uppercase">
                <a href="#projects" class="hover:text-white transition-colors">
                    Projects
                </a>
                <a href="#experience" class="hover:text-white transition-colors">
                    Experience
                </a>
                <a href="#skills" class="hover:text-white transition-colors">
                    Skills
                </a>
                <a href="#contact" class="hover:text-white transition-colors">
                    Contact
                </a>
            </nav>

            <div>
                <a href="#contact" class="text-xs border border-zinc-700 px-4 py-2 hover:bg-white hover:text-black transition-all">
                    Get in touch
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-20 border-b border-zinc-900">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-blue/5 via-transparent to-transparent pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 py-24 w-full">
            <div class="max-w-3xl">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/60 mb-8">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-xs text-zinc-400">
                        Available for new projects and collaborations
                    </span>
                </div>

                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-light tracking-tight text-white mb-6 leading-tight">
                    Engineering systems.<br>
                    <span class="font-normal text-zinc-400">
                        Writing clean, scalable code.
                    </span>
                </h1>

                <p class="text-zinc-400 text-base sm:text-lg max-w-2xl font-light mb-10 leading-relaxed">
                    I am Adnan Mahmoudi, a Full-stack Developer focused on Laravel,
                    database architecture, advanced admin panels, and building minimal,
                    high-performance user interfaces.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#projects" class="px-8 py-4 bg-white text-black text-xs font-semibold tracking-widest uppercase hover:bg-zinc-200 transition-colors">
                        Explore projects <span aria-hidden="true">→</span>
                    </a>

                    <a href="#contact" class="px-8 py-4 border border-zinc-800 text-zinc-300 text-xs font-semibold tracking-widest uppercase hover:border-zinc-600 transition-colors">
                        Download resume
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="projects" class="py-24 border-b border-zinc-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-xs uppercase tracking-luxury text-brand-blue mb-2">
                        Portfolio
                    </h2>
                    <p class="text-3xl font-light text-white">
                        Selected projects
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($projects as $project)
                    <div class="group border border-zinc-900 bg-brand-card p-8 hover:border-zinc-700 transition-all duration-300">
                        <div class="text-xs text-zinc-500 mb-4">
                            {{ $project->subtitle ?? 'Web project' }}
                        </div>

                        <h3 class="text-2xl text-white font-normal mb-3 group-hover:text-brand-blue transition-colors">
                            {{ $project->title }}
                        </h3>

                        <p class="text-zinc-400 text-sm leading-relaxed mb-6 font-light">
                            {{ $project->summary }}
                        </p>

                        @if($project->tech_stack)
                            <div class="flex flex-wrap gap-2 mb-8">
                                @foreach($project->tech_stack as $tech)
                                    <span class="text-[10px] px-2.5 py-1 border border-zinc-800 text-zinc-400 uppercase tracking-wider">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <div class="flex items-center space-x-4 text-xs font-medium">
                            @if($project->demo_url)
                                <a
                                    href="{{ $project->demo_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-white hover:underline"
                                >
                                    View live project <span aria-hidden="true">→</span>
                                </a>
                            @endif

                            @if($project->github_url)
                                <a
                                    href="{{ $project->github_url }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-zinc-500 hover:text-white"
                                >
                                    Source code
                                </a>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-2 border border-dashed border-zinc-800 p-12 text-center text-zinc-500">
                        No projects have been added yet.
                        They will appear here after adding project data or building the admin panel.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

</body>
</html>
