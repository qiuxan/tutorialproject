<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 19/11/18
 * Time: 2:02 PM
 */

namespace App\Repositories;

class DbUserRepository implements UserRepository{

    public function create($attributes){

        dd('created user');
    }
}