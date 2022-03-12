<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Game extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'games';

    protected $fillable = [
        'tenant_id',
        'sis_id',
        'name',
        'code',
        'level',
        'play_url',
        'image',
        'description',
        'grade_ids',
        'subject_ids',
        'settings',
        'status',
        'deleted_at'
    ];
}
