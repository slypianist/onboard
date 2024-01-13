<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends BaseController
{
    public function test(){
        return $this->sendResponse('Working...', 'successful');
    }
}
