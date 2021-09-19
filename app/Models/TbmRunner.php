<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmRunner extends Model
{
    use HasFactory;
    protected $table ='tbm_runners';
    
    protected $guarded = [
        'id',
        
    ];
    protected $fillable = [
        'external_id',
        'name',
        'race_id'
    ];

    public function race()
    {
        return $this->belongsTo(TbmRace::class, 'race_id', 'id');
    }

    public function formDataGeneral()
    {
        return $this->hasOne(TbmFormData::class, 'runner_id', 'id');
    }
    public function runnersLastHistory()
    {
        return $this->hasMany(TbmFormLastRunr::class, 'runner_id', 'id');
    }
}
