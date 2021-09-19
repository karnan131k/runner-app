<?php

namespace Database\Seeders;

use App\Models\TbmFormData;
use Illuminate\Database\Seeder;

class TbmFormDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbmFormDatas =[
            [
                'id'                => '1',
                'runner_id'         => '1',
                'age'               => '4',
                'sex'               => 'G',
                'colour'            => 'B',
                'sire'              => 'Camelot',
                'dam'               => 'Frdiyna',

            ],
        ];
        foreach ($tbmFormDatas as $tbmFormData) {
            TbmFormData::create([
            'id'            => $tbmFormData['id'],
            'runner_id'     => $tbmFormData['runner_id'],
            'age'           => $tbmFormData['age'],
            'sex'           => $tbmFormData['sex'],
            'colour'        => $tbmFormData['colour'],
            'sire'          => $tbmFormData['sire'],
            'dam'           => $tbmFormData['dam'],
            ]);
        }
    }
}
