<?php

namespace Database\Seeders;

use App\Models\TbmMeeting;
use Illuminate\Database\Seeder;

class TbmMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbmMeetingDatas =[
            [
                'id'                => '1',
                'external_id'       => 'Bm64',
                'name'              => 'sandown'
            ],
            [
                'id'                => '2',
                'external_id'       => 'Bm65',
                'name'              => 'sanup'
            ],
        ];
        foreach ($tbmMeetingDatas as $tbmMeetingData) {
                TbmMeeting::create([
                'id'            => $tbmMeetingData['id'],
                'external_id'   => $tbmMeetingData['external_id'],
                'name'          => $tbmMeetingData['name'],
                ]);
        }
    
    }
}
