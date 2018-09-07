<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    const ACTIVE = 1;
    const NOT_ACTIVE = 0;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name',
    	'username',
    	'password',
    	'email',
    	'avatar',
    	'active',
    	'created_at'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'password',
    	'remember_token'
    ];

    /**
     * [getFileList description]
     * @return [array] [description]
     */
    public function getFieldList()
    {
    	return $this->fillable;
    }

    /**
     * [getList admin]
     * @param  array  $filters [description]
     * @return [type]          [description]
     */
    public function getList($filters = [])
    {
    	$query = $this
    		->selectRaw("
	    		admins.id,
	    		admins.name,
	    		admins.username,
	    		admins.password,
	    		admins.email,
	    		admins.active
    		");
    	return $query->paginate(10);
    }
}
