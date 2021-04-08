<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::find(1) ;
        $userEmpl1 = User::find(2) ;
        $userEmpl2 = User::find(3) ;

        $userAdmin->tasks()->createMany([
            [
                'name'=>'کار مدیر 1',
                'note'=>'یادداشت کار مدیر 1',
                'date'=>'2021-04-06'
            ],
            [
                'name'=>'کار مدیر 2',
                'note'=>'یادداشت کار مدیر 2',
                'date'=>'2021-04-07'
            ],
            [
                'name'=>'کار مدیر 3',
                'note'=>'یادداشت کار مدیر 3',
                'date'=>'2021-04-08'
            ],
            [
                'name'=>'کار مدیر 4',
                'note'=>'یادداشت کار مدیر 4',
                'date'=>'2021-04-08'
            ],
        ]);
        $userEmpl1->tasks()->createMany([
            [
                'name'=>'کار کارمند1 1',
                'note'=>'یادداشت کار کارمند1 1',
                'date'=>'2021-04-06'
            ],
            [
                'name'=>'کار کارمند1 2',
                'note'=>'یادداشت کار کارمند1 2',
                'date'=>'2021-04-07'
            ],
            [
                'name'=>'کار کارمند1 3',
                'note'=>'یادداشت کار کارمند1 3',
                'date'=>'2021-04-08'
            ],
            [
                'name'=>'کار کارمند1 4',
                'note'=>'یادداشت کار کارمند1 4',
                'date'=>'2021-04-08'
            ],
        ]);
        $userEmpl1->tasks()->createMany([
            [
                'name'=>'کار کارمند2 1',
                'note'=>'یادداشت کار کارمند2 1',
                'date'=>'2021-04-06'
            ],
            [
                'name'=>'کار کارمند2 2',
                'note'=>'یادداشت کار کارمند2 2',
                'date'=>'2021-04-07'
            ],
            [
                'name'=>'کار کارمند2 3',
                'note'=>'یادداشت کار کارمند2 3',
                'date'=>'2021-04-08'
            ],
            [
                'name'=>'کار کارمند2 4',
                'note'=>'یادداشت کار کارمند2 4',
                'date'=>'2021-04-08'
            ],
        ]);

    }
}
