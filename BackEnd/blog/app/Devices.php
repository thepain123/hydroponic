<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends BaseModel
{
    protected $table = 'devices';
    protected $fillable = [
        'user_id', 'temperature', 'humidity', 'light', 'EC', 'PPM', 'water', 'pump', 'type', 'day'
    ];

    // public static $rules = array(
    //     'Rule_RequestResetPassword' => [
    //         'email' => 'required|regex:/^[a-z][a-z0-9_\.]{2,}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/'
    //     ],
    //     'Rule_AcceptResetPassword' => [
    //         'token' => 'required|string',
    //         'newPassword' => 'required|string|min:6|max:16',
    //         'confirmNewPassword' => 'required|same:newPassword'
    //     ],
    // );

    public static function getData($idUser) {
        return Devices::where('user_id', $idUser)
        ->get();
    }
}
