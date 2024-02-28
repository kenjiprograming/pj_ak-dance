<?php

namespace Database\Seeders;

use DateTimeImmutable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'status' => 'public',
            'public_date' => new DateTimeImmutable('now'),
            'title' => Str::random(10),
            'body' => Str::random(50),
        ]);
    }
}
