<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Nexus CRM & Enterprise ERP',
                'slug' => 'nexus-crm-enterprise-erp',
                'subtitle' => 'High-load Architecture / Modular Dashboard',
                'summary' => 'A scalable, role-based enterprise management system with dynamic invoicing, real-time analytics, and optimized SQL performance for high-traffic environments.',
                'tech_stack' => ['Laravel 11', 'MySQL', 'Tailwind CSS', 'Alpine.js', 'Redis'],
                'demo_url' => 'https://example.com/demo-crm',
                'github_url' => 'https://github.com/AdnanMahmoudiDev/nexus-crm',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Aura E-Commerce Engine',
                'slug' => 'aura-e-commerce-engine',
                'subtitle' => 'Headless Commerce Architecture',
                'summary' => 'Clean e-commerce core featuring complex cart management, multi-gateway payment processing, order tracking, and high-performance indexed queries.',
                'tech_stack' => ['Laravel 11', 'Tailwind CSS', 'MySQL', 'Blade', 'Stripe API'],
                'demo_url' => 'https://example.com/demo-store',
                'github_url' => 'https://github.com/AdnanMahmoudiDev/aura-ecommerce',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Sentinel License Guard',
                'slug' => 'sentinel-license-guard',
                'subtitle' => 'SaaS Security & Device Fingerprinting',
                'summary' => 'Digital licensing service engineered with cryptographic verification, hardware lock mechanisms, and automated abuse-prevention telemetry.',
                'tech_stack' => ['Laravel 11', 'REST API', 'PostgreSQL', 'Docker'],
                'demo_url' => null,
                'github_url' => 'https://github.com/AdnanMahmoudiDev/sentinel-guard',
                'is_featured' => false,
                'sort_order' => 3,
            ],
            [
                'title' => 'Cinematic Dark Portfolio Engine',
                'slug' => 'cinematic-dark-portfolio-engine',
                'subtitle' => 'Frontend & System Showcase',
                'summary' => 'Personal website engineered with a minimalist luxury aesthetic inspired by Mercedes-Benz, optimized for lightning-fast delivery and extreme visual focus.',
                'tech_stack' => ['Laravel 11', 'Tailwind CSS', 'Vite', 'PHP 8.2'],
                'demo_url' => 'https://github.com/AdnanMahmoudiDev/portfolio',
                'github_url' => 'https://github.com/AdnanMahmoudiDev/portfolio',
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
