<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $sqlFilePath = base_path('database/seeders/world_timestamp_structure.sql');
//        $sql = file_get_contents($sqlFilePath);
//
//        DB::unprepared($sql);



         $sqlFilePath = base_path('.ignorefiles/world_timestamp.sql');
         $sql = file_get_contents($sqlFilePath);
         $statements = array_filter(array_map('trim', explode(';', $sql)));

         foreach ($statements as $stmt) {
            DB::statement($stmt);
         }


    }
}
