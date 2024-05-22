<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Functions\Helper as Help;

class TecnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'Vue', 'Vite', 'PHP', 'Laravel'];

        foreach($data as $item){
            $new_item = new Technology();
            $new_item->title = $item;
            $new_item->slug = Help::generateSlug($item, Technology::class);

            $new_item->save();
        }
    }
}
