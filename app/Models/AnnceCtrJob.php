<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnceCtrJob extends Model
{
    use HasFactory;

    protected $table = 'announcement_ctr_job';

    public $timestamps = false;

    protected $fillable = [
        'CONTAINER_KEY',
        'CONTAINER_NO',
        'ISO_CODE',
        'CTR_SIZE',
        'CTR_TYPE',
        'CTR_STATUS',
        'CTPS_YN',
        'GROSS',
        'GROSS_CLASS',
        'STACK_DATE',
        'YARD_BLOCK',
        'YARD_SLOT',
        'YARD_ROW',
        'YARD_TIER',
        'VES_ID',
        'VES_CODE',
        'VOY_OUT'
    ];
}
