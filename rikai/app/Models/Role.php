<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\Group;

class Role extends Model
{
    use HasFactory;
    protected $table = "roles";
    public $timestamps = false;
    protected $fillable = [
        'name', 
        'updated_at',
        'created_at',
    ];

    public function users(){
        return $this->belongsToMany(User::class,'user_role');
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class,'role_permission');
    }
    public function groups(){
        return $this->hasMany(Group::class);
    }    
    
}
