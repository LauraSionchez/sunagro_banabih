<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use HasFactory,
        Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'name',
        'surname',
        'email',
        'active',
        'rol_id'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules($id = null, $merge = []) {
        $Roles = Role::pluck('id')->toArray();
        $validRoles = (count($Roles)>0 ? '|in:'.implode(',',$Roles):'');
        
        return array_merge(
                [
            'username' => 'required|alpha_num|min:4|max:12|unique:users,username' . ($id != null ? ",$id" : ''),
            'password' => 'required|min:60|max:60',
            'name' => 'required',
            'surmane' => 'required',
            'email' => 'required|email|unique:users' . ($id != null ? ",id,$id" : ''),
            'rol_id' => 'required|numeric'.$validRoles,
                ], $merge);
        
        
    }

    /*
     * 
     */

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function getPassRecovery() {
        return $this->hasMany('App\Models\UserRecovery', 'user_id')->where("status", "1")->orderBy('date_request', 'desc');
    }
    
    
    public function getRol() {
        return $this->belongsTo('App\Models\Role', 'rol_id');
    }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*
      protected $hidden = [
      'password',
      'remember_token',
      ];
     */
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /*
      protected $casts = [
      'email_verified_at' => 'datetime',
      ];

     */
}
