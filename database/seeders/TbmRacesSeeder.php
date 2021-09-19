<?php

namespace Database\Seeders;

use App\Models\TbmRace;
use Illuminate\Database\Seeder;

class TbmRacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbmRaceDatas =[
            [
                'id'                => '1',
                'external_id'       => 'R-1',
                'name'              => 'Race 1',
                'meeting_id'        => '1'
            ],
            [
                'id'                => '2',
                'external_id'       => 'R-2',
                'name'              => 'Race 2',
                'meeting_id'        => '1'
            ],
            [
                'id'                => '3',
                'external_id'       => 'R-3',
                'name'              => 'Race 3',
                'meeting_id'        => '1'
            ],
            [
                'id'                => '4',
                'external_id'       => 'R-4',
                'name'              => 'Race 4',
                'meeting_id'        => '1'
            ],[
                'id'                => '5',
                'external_id'       => 'R-5',
                'name'              => 'Race 5',
                'meeting_id'        => '1'
            ],
        ];
        foreach ($tbmRaceDatas as $tbmRaceData) {
            TbmRace::create([
            'id'            => $tbmRaceData['id'],
            'external_id'   => $tbmRaceData['external_id'],
            'name'          => $tbmRaceData['name'],
            'meeting_id'    => $tbmRaceData['meeting_id'],
            ]);
        }
    }
}
