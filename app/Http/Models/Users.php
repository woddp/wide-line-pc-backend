<?php


namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Users
 * @package App\Http\Models
 * @property  integer $id
 */
class Users extends Model
{

    public $dateFormat='U';

    public  function getAttributes()
    {
    }

}
