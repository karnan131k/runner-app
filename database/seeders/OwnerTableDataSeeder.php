<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ownerDatas =[
            [
                'id'            => '1',
                'race_id'       => '1',
                'name'          => 'Hendey',
            ],
            [
                'id'            => '2',
                'race_id'       => '1',
                'name'          => 'David',
            ],
        ];
        foreach ($ownerDatas as $ownerData) {
            Owner::create([
            'id'            => $ownerData['id'],
            'race_id'       => $ownerData['race_id'],
            'name'          => $ownerData['name'],
            ]);
        }
    }
}
