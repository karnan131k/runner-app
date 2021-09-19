<?php

namespace Database\Seeders;

use App\Models\TbmFormLastRunr;
use Illuminate\Database\Seeder;

class TbmFormLastRunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $runnerFormLastDatas =[
            [
                'id'              => '1',
                'runner_id'       => '1',
                'score'           => '2\11',
                'place'           => 'Moe',
                'pariticipate_at' => '2021-08-04',
                'condition'       => 'Heavy',
                'price'           => '3.3'
            ],
            [
                'id'              => '2',
                'runner_id'       => '1',
                'score'           => '3\10',
                'place'           => 'Sandown',
                'pariticipate_at' => '2021-07-14',
                'condition'       => 'Soft',
                'price'           => '10'
            ],
            [
                'id'              => '3',
                'runner_id'       => '1',
                'score'           => '4\12',
                'place'           => 'Dundalk',
                'pariticipate_at' => '2020-10-02',
                'condition'       => 'Good',
                'price'           => '3.5'
            ],
            [
                'id'              => '4',
                'runner_id'       => '1',
                'score'           => '1\14',
                'place'           => 'Dundalk',
                'pariticipate_at' => '2020-09-25',
                'condition'       => 'Good',
                'price'           => '8'
            ],
            [
                'id'              => '5',
                'runner_id'       => '1',
                'score'           => '8\16',
                'place'           => 'Navan',
                'pariticipate_at' => '2020-09-10',
                'condition'       => 'Soft',
                'price'           => '4'
            ],
            
        ];
        foreach ($runnerFormLastDatas as $runnerFormLastData) {
            TbmFormLastRunr::create([
            'id'             => $runnerFormLastData['id'],
            'runner_id'      => $runnerFormLastData['runner_id'],
            'score'          => $runnerFormLastData['score'],
            'place'          => $runnerFormLastData['place'],
            'pariticipate_at'=> $runnerFormLastData['pariticipate_at'],
            'condition'      => $runnerFormLastData['condition'],
            'price'          => $runnerFormLastData['price'],
            ]);
        }
    }
}
