<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tbm_runner_table_data_available()
    {
        $this->assertDatabaseHas('tbm_runners',[
            'id'                => '1',
            'external_id'       => 'E-15',
            'name'              => 'Eaglemont',
            'race_id'           => '1'
        ]);
    }
    public function test_tbm_race_table_data_available()
    {
        $this->assertDatabaseHas('tbm_races',[
            'id'                => '1',
            'external_id'       => 'R-1',
            'name'              => 'Race 1',
            'meeting_id'        => '1'
        ]);
    }
    public function test_tbm_meeting_table_data_available()
    {
        $this->assertDatabaseHas('tbm_meetings',[
            'id'                => '1',
            'external_id'       => 'Bm64',
            'name'              => 'sandown'
        ]);
    }
    public function test_tbm_formlastruns_table_data_available()
    {
        $this->assertDatabaseHas('tbm_form_last_runrs',[
            'id'              => '1',
            'runner_id'       => '1',
            'score'           => '2\11',
            'place'           => 'Moe',
            'pariticipate_at' => '2021-08-04',
            'condition'       => 'Heavy',
            'price'           => '3.3'
        ]);

    }
    public function test_tbm_formdata_table_data_available()
    {
        $this->assertDatabaseHas('tbm_form_datas',[
            'id'                => '1',
            'runner_id'         => '1',
            'age'               => '4',
            'sex'               => 'G',
            'colour'            => 'B',
            'sire'              => 'Camelot',
            'dam'               => 'Frdiyna',
        ]);
        
    }
    
}
