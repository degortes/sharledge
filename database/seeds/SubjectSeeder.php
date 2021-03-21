<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = ['Italiano', 'Storia','Matematica','Economia','Informatica','Inglese', 'Geometria','Medicina','Architettura','Politica','Ingegneria','Filosofia'];
        foreach ($subjects as $subject) {
            $item = new Subject();
            $item->name = $subject;
            $item->save();

        }
    }
}
