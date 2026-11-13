<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds based on Adnan's authoritative GitHub profile.
     */
    public function run(): void
    {
        $skills = [
            // Backend Core
            [
                'name' => 'PHP & Laravel Framework',
                'category' => 'Backend Core',
                'proficiency' => 95,
                'highlight' => 'Clean architecture, maintainable code, service structures & robust core logic.',
                'sort_order' => 1,
            ],
            [
                'name' => 'RESTful APIs & Micro-endpoints',
                'category' => 'Backend Core',
                'proficiency' => 90,
                'highlight' => 'API design, request validation, resource transformations & secure endpoints.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Auth & Access Control (RBAC)',
                'category' => 'Backend Core',
                'proficiency' => 92,
                'highlight' => 'Authentication, role-based authorization, session & token security guards.',
                'sort_order' => 3,
            ],

            // Database & Persistence
            [
                'name' => 'MySQL Relational Design',
                'category' => 'Database & Storage',
                'proficiency' => 88,
                'highlight' => 'Efficient relational schemas, indexes, migrations & high-integrity transactions.',
                'sort_order' => 4,
            ],
            [
                'name' => 'Eloquent ORM & Query Tuning',
                'category' => 'Database & Storage',
                'proficiency' => 92,
                'highlight' => 'Relationship modeling, eager loading (preventing N+1), query scopes & aggregations.',
                'sort_order' => 5,
            ],

            // Specialized Business Logic
            [
                'name' => 'E-Commerce & Subscriptions',
                'category' => 'Systems & Logic',
                'proficiency' => 88,
                'highlight' => 'Payment gateway integration, discount/pricing engines, dynamic carts & invoices.',
                'sort_order' => 6,
            ],
            [
                'name' => 'Admin Dashboards & Management',
                'category' => 'Systems & Logic',
                'proficiency' => 90,
                'highlight' => 'User management systems, operational metrics, activity audits & device tracking.',
                'sort_order' => 7,
            ],

            // Tools, DevOps & Presentation
            [
                'name' => 'Git & GitHub Workflow',
                'category' => 'Tools & Frontend',
                'proficiency' => 90,
                'highlight' => 'Atomic commits, trunk/feature branching, repo maintenance & issue tracking.',
                'sort_order' => 8,
            ],
            [
                'name' => 'Linux, Composer & NPM',
                'category' => 'Tools & Frontend',
                'proficiency' => 82,
                'highlight' => 'Server administration, dependency orchestration & build automation.',
                'sort_order' => 9,
            ],
            [
                'name' => 'Blade, Tailwind CSS & JavaScript',
                'category' => 'Tools & Frontend',
                'proficiency' => 85,
                'highlight' => 'Dark cinematic layouts, component architecture & reactive DOM interactions.',
                'sort_order' => 10,
            ],
        ];

        // Clear previous generic skills and insert Adnan's accurate skill set
        Skill::truncate();

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
