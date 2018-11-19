<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 19/11/18
 * Time: 2:02 PM
 */

namespace App\Repositories;

interface UserRepository{

    public function create($attributes);
}