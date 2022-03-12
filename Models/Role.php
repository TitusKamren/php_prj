<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $collection = 'roles';

    protected $fillable = ['id', 'tenant_id', 'code', 'name', 'status'];

    public function users()
    {
        return $this->belongsToMany(User::class, null, 'role_ids', 'user_ids');
    }
}
