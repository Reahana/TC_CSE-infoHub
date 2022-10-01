<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    private static $user;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [

        'name',
        'role_id',
        'email',
        'roll',
        't_id',
        'g_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function student ()
    {

        return $this->hasMany('App\Models\Student');
    }


    public function teacher ()
    {

        return $this->hasMany('App\Models\Teacher');
    }

    public function donor ()
    {

        return $this->hasMany('App\Models\Donor');
    }
public  static function changePassword($request)
{
//    self::$user = User::find($id);
    self::$user =Auth::user();
    $userPassword = self::$user ->password;
    if (!Hash::check($request->old_password, $userPassword)) {
        return back()->withErrors(['old_password'=>'password not match']);
    }

    self::$user->password = Hash::make($request->password);

    self::$user->save();
}
    public  static function updateUser($request)
    {


        self::$user =Auth::user();
        self::$user->name = $request->name;
       self::$user->email = $request->email;
        self::$user->save();
    }

    public  static function deleteUser($id){

        self::$user =Auth::user()->find($id);

        self::$user->delete();

    }

}


