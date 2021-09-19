<?php

namespace Database\Seeders;

use App\Models\TbmRunner;
use Illuminate\Database\Seeder;

class TbmRunnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbmRunnerDatas =[
            [
                'id'                => '1',
                'external_id'       => 'E-15',
                'name'              => 'Eaglemont',
                'race_id'           => '1'
            ],
        ];
        foreach ($tbmRunnerDatas as $tbmRunnerData) {
            TbmRunner::create([
            'id'            => $tbmRunnerData['id'],
            'external_id'   => $tbmRunnerData['external_id'],
            'name'          => $tbmRunnerData['name'],
            'race_id'       => $tbmRunnerData['race_id'],
            ]);
        }
    }
}
