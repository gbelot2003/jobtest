<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\UserServices;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\Collection;

class UsersController extends Controller
{

    public function __construct(
        protected UserServices $userServices
    )
    {
    }

    public function store()
    {
        $service = $this->userServices->imporUsers();
        return response()->json($service, 200);
    }

}
