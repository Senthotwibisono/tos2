<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistContnr extends Model
{
    use HasFactory;
    protected $table = 'history_container';
    public $timestamps = false;
        
    protected $fillable = [
        'CONTAINER_KEY', 
        'CONTAINER_NO', 
        'OPERATION_NAME', 
        'VES_ID', 
        'VES_CODE', 
        'VOY_NO', 
        'CTR_I_E_T', 
        'CTR_ACTIVE_YN', 
        'CTR_SIZE', 
        'CTR_TYPE', 
        'CTR_STATUS', 
        'CTR_INTERN_STATUS', 
        'YARD_BLOCK', 
        'YARD_SLOT', 
        'YARD_ROW', 
        'YARD_TIER', 
        'TRUCK_NO', 
        'TRUCK_IN_DATE', 
        'TRUCK_OUT_DATE', 
        'OPER_NAME', 
        'UPDATE_TIME', 
        'ISO_CODE'
    ];
}
