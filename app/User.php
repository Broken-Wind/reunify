<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function clean($string) {
        $string = str_replace(' ', '-', $string);

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
     }

    public static function generateSlug($name)
    {

        $baseSlug = User::clean($name);

        $slug = $baseSlug;

        $i = 0;

        while (User::where('slug', $slug)->count() > 0) {

            $i++;

            $slug = $baseSlug . '-' . $i;

        }

        return $slug;

    }

    public function getQrUrlAttribute()
    {

        return "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . config('app.url') . '/' . $this->slug;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug', 'phone', 'linkedin', 'fb', 'instagram'
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
}
