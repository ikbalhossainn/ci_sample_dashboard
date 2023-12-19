<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class RegistrationController extends BaseController
{
    use ResponseTrait;
    public function registration()
    {
        echo "Hello";
    }
}
