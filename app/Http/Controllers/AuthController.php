<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118109",
            "Name" => "Passa Anzallika",
            "Gender" => "Perempuan", 
            "Phone" => "081228832914",
            "Kelas" => "XII RPL 3",       
        ];
    }
}