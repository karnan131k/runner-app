<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmMeeting extends Model
{
    use HasFactory;
    protected $table ='tbm_meetings';
    
    protected $guarded = [
        'id',
        
    ];
    protected $fillable = [
        'external_id',
        'name'
    ];
}
