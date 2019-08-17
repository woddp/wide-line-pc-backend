<?php

namespace App\Http\Controllers;

use App\Http\Utils\Api;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //



    public function Response($data,$code=200){

        return Api::send($code,$data);
    }

}
