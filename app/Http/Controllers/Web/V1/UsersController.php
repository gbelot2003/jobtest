<?php

namespace App\Http\Controllers\Web\V1;

use Illuminate\Http\Request;
use App\Services\UserServices;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function __construct(
        protected UserServices $userServices
    )
    {
    }

    public function index()
    {
    }
}
