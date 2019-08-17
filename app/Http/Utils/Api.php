<?php


namespace App\Http\Utils;


class Api
{

    const SUCCESS=200;
    const ERROR=500;



    /**
     * @param int $code
     * @param $data
     * @return array
     */
    public static function send(int $code=200,$data){

        return [
            'code'=>$code,
            'data'=>$data,
        ];
    }
}
