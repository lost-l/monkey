<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentType::factory(3)
            ->state(new Sequence(
                ['description' => 'CC'],
                ['description' => 'TI'],
                ['description' => 'CE'],
                )
            )
            ->has(User::factory()->count(2))
            ->create();
    }
}
