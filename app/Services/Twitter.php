<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 19/11/18
 * Time: 12:18 PM
 */

namespace App\Services;

class Twitter
{

    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey=$apiKey;
    }
}