<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $total = 100000;
        $batchSize = 1000;

        for ($i = 0; $i < $total / $batchSize; $i++) {
            Book::factory()->count($batchSize)->create();

            // Tampilkan progress di console
            $done = ($i + 1) * $batchSize;
            $percent = number_format(($done / $total) * 100, 2);
            echo "Inserted {$done}/{$total} ({$percent}%)\n";
        }
    }
}

