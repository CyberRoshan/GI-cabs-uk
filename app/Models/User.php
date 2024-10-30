<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    




    // public function getRattingAttribute($value)
    // {

        
    //     if ($value>0) {
    //         return '<img src="'.url('/public/frontend/').'/assets/images/like.svg" alt="">'. $value.'%';
    //     } else {
    //         return '';
    //     }
    // }


    // public function getCountryCode1Attribute()
    // {
    //     $name = Country::find($this->country_code);
    //     if (!empty($name)) {
    //         return '+' . $name->phonecode;
    //     } else {
    //         return 'N/A';
    //     }
    // }









    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'email',
        'role',
        'password',
        'mobile',
        'category',
        'collection',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
