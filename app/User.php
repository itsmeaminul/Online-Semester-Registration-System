<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'std_id', 'std_regn', 'std_session', 'std_fathersname', 'std_mothersname', 'std_dob', 'std_contact', 'std_blood', 'std_nationality', 'std_religion', 'std_photo', 'std_sign', 'ssc_board', 'school', 'ssc_roll', 'ssc_year', 'ssc_gpa', 'hsc_board', 'college', 'hsc_roll', 'hsc_year', 'hsc_gpa',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getImageAttribute(){
        return $this->std_photo;
    }
}
