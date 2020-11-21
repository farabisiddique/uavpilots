<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// // use Auth;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Hash;







class UserData extends Model 
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_data_id','first_name', 'last_name', 'description', 'state', 'country', 'industry',
    ];




	public function user()
    {
        return $this->belongsTo('App\Models\User','user_data_id','id');
    }


}
