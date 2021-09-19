<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbmFormData extends Model
{
    use HasFactory;
    protected $table ='tbm_form_datas';
    
    protected $guarded = [
        'id',
        
    ];
    protected $fillable = [
        'runner_id',
    ];
}
