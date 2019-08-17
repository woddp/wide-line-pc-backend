<?php


namespace App\Http\Controllers;



class UserController extends Controller
{


    public function addUser(){
            return $this->Response([
                "cont"=>1,
                "cont2"=>1,
            ]);
    }

}
