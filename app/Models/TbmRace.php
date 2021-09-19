<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmRace extends Model
{
    use HasFactory;
    protected $table ='tbm_races';
    
    protected $guarded = [
        'id',
        
    ];
    protected $fillable = [
        'external_id',
        'name',
        'meeting_id'
    ];
    public function owners()
    {
        return $this->hasMany(Owner::class,'race_id','id');
    }
}
