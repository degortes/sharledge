<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = ['Appunti', 'Lezioni Private', 'Libri', 'Ricerche', 'Video Corso', 'Ebook'];
        foreach ($sections as $section) {

            $item= new Section();
            $item->name = $section;
            $item->save();
        }

    }
}
