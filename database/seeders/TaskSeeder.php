<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        $userAdmin = User::find(1);
        $userEmployees = User::find([2, 3, 4]);

        foreach ($userEmployees as $userEmployee) {
            $startDate = Carbon::today()->subDay(5);
            $endDate = Carbon::today()->addDay(5);
            while ($startDate <= $endDate) {
                $userEmployee->tasks()->create([
                    'name' => 'کار کارمند' . $userEmployee->id,
                    'note' => 'یادداشت کار کارمند' . $userEmployee->id,
                    'date' => $startDate
                ]);
                $startDate = Carbon::parse($startDate)->addDay(1);
            }
        }
        $userAdmin->tasks()->createMany([
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-06'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-07'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-08'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-08'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-09'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-10'
            ],
            [
                'name' => 'کار مدیر1',
                'note' => 'یادداشت کار مدیر1',
                'date' => '2021-04-11'
            ],
        ]);
    }
}
